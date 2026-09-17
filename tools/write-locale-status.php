<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$policy = require $root.'/config/public-locales.php';
$dryRun = in_array('--dry-run', $argv, true);
$projectId = getenv('CROWDIN_PROJECT_ID');
$token = getenv('CROWDIN_PERSONAL_TOKEN');

if (! is_string($projectId) || $projectId === '' || ! is_string($token) || $token === '') {
    fwrite(STDERR, "CROWDIN_PROJECT_ID and CROWDIN_PERSONAL_TOKEN are required.\n");
    exit(1);
}

$fetch = static function (string $path) use ($token): array {
    $request = curl_init('https://api.crowdin.com/api/v2'.$path);
    curl_setopt_array($request, [CURLOPT_HTTPHEADER => ['Authorization: Bearer '.$token, 'Accept: application/json'], CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 30]);
    $response = curl_exec($request);
    $status = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
    $error = curl_error($request);
    curl_close($request);
    if (! is_string($response) || $status !== 200) {
        throw new RuntimeException("Crowdin request failed for {$path}: {$error}");
    }
    return json_decode($response, true, flags: JSON_THROW_ON_ERROR);
};

try {
    $progressPayload = $fetch("/projects/{$projectId}/languages/progress?limit=500");
    $languagesPayload = $fetch('/languages?limit=500');
} catch (Throwable $exception) {
    fwrite(STDERR, $exception->getMessage()."\n");
    exit(1);
}

$languages = [];
foreach ($languagesPayload['data'] ?? [] as $entry) {
    $language = $entry['data'] ?? null;
    if (is_array($language) && is_string($language['id'] ?? null) && is_string($language['locale'] ?? null)) {
        $languages[$language['id']] = $language;
    }
}
$progressById = [];
foreach ($progressPayload['data'] ?? [] as $entry) {
    if (is_array($entry['data'] ?? null) && is_string($entry['data']['languageId'] ?? null)) {
        $progressById[$entry['data']['languageId']] = $entry['data'];
    }
}
$projectLanguagesByLocale = [];
foreach ($progressById as $languageId => $progress) {
    $language = $languages[$languageId] ?? null;
    if (! is_array($language)) {
        fwrite(STDERR, "Crowdin progress references unknown language {$languageId}.\n");
        exit(1);
    }

    $locale = $language['locale'];
    if (isset($projectLanguagesByLocale[$locale])) {
        fwrite(STDERR, "Crowdin project has duplicate target locale {$locale}.\n");
        exit(1);
    }
    $projectLanguagesByLocale[$locale] = $language;
}

$resolved = [];
foreach (glob($root.'/lang/*', GLOB_ONLYDIR) ?: [] as $directory) {
    $locale = basename($directory);
    if ($locale === 'en') {
        continue;
    }

    $language = $projectLanguagesByLocale[$locale] ?? null;
    $progress = is_array($language) ? ($progressById[$language['id']] ?? null) : null;
    $translation = $progress['translationProgress'] ?? null;
    $approval = $progress['approvalProgress'] ?? null;
    if (! is_array($progress) || ! is_numeric($translation) || ! is_numeric($approval)) {
        $languageId = is_array($language) ? (string) ($language['id'] ?? 'unknown') : 'not-found';
        $progressId = is_array($progress) ? (string) ($progress['languageId'] ?? 'unknown') : 'not-found';
        fwrite(STDERR, "Missing valid Crowdin metadata for {$locale} (language={$languageId}, progress={$progressId}; project targets=".implode(', ', array_keys($projectLanguagesByLocale)).").\n");
        exit(1);
    }

    $resolved[$locale] = [
        'language' => $language,
        'translation' => (float) $translation,
        'approval' => (float) $approval,
    ];
}

$primaryCounts = [];
foreach ($resolved as $locale => $entry) {
    $primary = Locale::getPrimaryLanguage($locale);
    $primaryCounts[$primary] = ($primaryCounts[$primary] ?? 0) + 1;
}

$locales = [];
foreach ($resolved as $locale => $entry) {
    $primary = Locale::getPrimaryLanguage($locale);
    $nativeName = $primaryCounts[$primary] > 1
        ? Locale::getDisplayName($locale, $locale)
        : Locale::getDisplayLanguage($locale, $locale);
    $flagCountry = strtolower(Locale::getRegion($locale));
    $flagCountry = validFlagCountry($flagCountry) ? $flagCountry : null;
    if (! is_string($nativeName) || $nativeName === '') {
        fwrite(STDERR, "Unable to derive presentation metadata for {$locale}.\n");
        exit(1);
    }

    $locales[$locale] = [
        'translation_progress' => $entry['translation'],
        'approval_progress' => $entry['approval'],
        'native_name' => $nativeName,
        'flag_country' => $flagCountry,
    ];
}

ksort($locales);
$json = json_encode([
    'version' => 1,
    'locales' => $locales,
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR)."\n";

if ($dryRun) {
    fwrite(STDOUT, $json);
    exit(0);
}

if (file_put_contents($root.'/locale-status.json', $json) === false) {
    fwrite(STDERR, "Unable to write locale-status.json.\n");
    exit(1);
}

fwrite(STDOUT, "Crowdin locale status written.\n");

function validFlagCountry(mixed $country): bool
{
    if (! is_string($country) || preg_match('/^[a-z]{2}$/', $country) !== 1 || ! class_exists(Locale::class)) {
        return false;
    }

    $name = Locale::getDisplayRegion('und-'.strtoupper($country), 'en');

    return $name !== '' && strcasecmp($name, $country) !== 0 && $name !== 'Unknown Region';
}
