<?php

$localeDirectories = glob(dirname(__DIR__).'/lang/*', GLOB_ONLYDIR) ?: [];
$locales = array_values(array_filter(
    array_map('basename', $localeDirectories),
    fn (string $locale): bool => preg_match('/^[a-z]{2,3}(?:-[A-Za-z0-9]{2,8})*$/D', $locale) === 1,
));
sort($locales);

return [
    'locales' => $locales,
    'files' => [
        'auth.php',
        'common.php',
        'contribute.php',
        'dashboard.php',
        'home.php',
        'pagination.php',
        'search.php',
        'settings.php',
        'tournaments.php',
        'users.php',
        'validation.php',
    ],
    'allowed_url_hosts' => [
        'support.discord.com',
    ],
    'forbidden_phrases' => [
    ],
    'crowdin_locale_aliases' => [
        'es-ES' => 'es',
    ],
    'locale_overrides' => [
        'en' => ['native_name' => 'English', 'flag_country' => 'us'],
        'es' => ['flag_country' => 'es'],
        'ko' => ['flag_country' => 'kr'],
        'ru' => ['flag_country' => 'ru'],
        'sr-SP' => ['canonical_locale' => 'sr-RS', 'native_name' => 'Српски', 'flag_country' => 'rs'],
    ],
];
