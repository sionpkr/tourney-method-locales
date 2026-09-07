<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$policy = require $root.'/config/public-locales.php';

$placeholders = static function (string $value): array {
    preg_match_all('/(?<!:):([a-z_][A-Za-z0-9_]*)|\{([a-z_][A-Za-z0-9_]*)\}|%(?:\d+\$)?[bcdeEfFgGosuxX](?![A-Fa-f0-9])/', $value, $matches);
    $result = array_values(array_unique($matches[0]));
    sort($result);

    return $result;
};

$normalize = function (array $source, array $translation) use (&$normalize, $placeholders): array {
    $result = $translation;

    foreach ($source as $key => $sourceValue) {
        $translatedValue = $translation[$key] ?? null;

        if (is_array($sourceValue)) {
            $result[$key] = is_array($translatedValue)
                ? $normalize($sourceValue, $translatedValue)
                : $sourceValue;

            continue;
        }

        if (! is_string($sourceValue)) {
            $result[$key] = $sourceValue;

            continue;
        }

        if (
            ! is_string($translatedValue)
            || trim($translatedValue) === ''
            || $placeholders($translatedValue) !== $placeholders($sourceValue)
        ) {
            $result[$key] = $sourceValue;
        }
    }

    return $result;
};

$sources = [];
foreach ($policy['files'] as $file) {
    $source = require $root.'/lang/en/'.$file;
    if (! is_array($source)) {
        throw new RuntimeException("English locale file must return an array: {$file}");
    }
    $sources[$file] = $source;
}

foreach (glob($root.'/lang/*', GLOB_ONLYDIR) ?: [] as $localeDirectory) {
    if (basename($localeDirectory) === 'en') {
        continue;
    }

    foreach ($sources as $file => $source) {
        $path = $localeDirectory.'/'.$file;
        $translation = is_file($path) ? require $path : [];
        if (! is_array($translation)) {
            throw new RuntimeException("Locale file must return an array: {$path}");
        }

        $normalized = $normalize($source, $translation);
        if ($normalized === $translation) {
            continue;
        }

        $written = file_put_contents($path, "<?php\n\nreturn ".var_export($normalized, true).";\n");
        if ($written === false) {
            throw new RuntimeException("Unable to normalize locale file: {$path}");
        }
    }
}

fwrite(STDOUT, "Locale normalization completed.\n");
