<?php

return [
    'deleted_user' => 'Deleted user',
    'confirmation' => [
        'title' => 'Confirm action',
        'cancel' => 'Cancel',
        'confirm' => 'Continue',
        'javascript_required' => 'Enable JavaScript to use actions that require confirmation.',
    ],
    'dismiss_notification' => 'Dismiss notification',
    'release_notes' => [
        'title' => 'Site updates',
        'theme' => 'Choose a light or dark theme from navigation.',
        'countries' => 'Tournament details show allowed countries.',
    ],
    'changelog' => [
        'title' => 'Changelog',
        'description' => 'Updates to tournament discovery, profiles, and participation records.',
    ],
    'errors' => [
        404 => [
            'heading' => 'Pagina nu a fost găsită',
            'message' => 'Pagina pe care o căutați nu există sau a fost mutată.',
            'go_home' => 'Mergi la pagina principală',
            'go_back' => 'Înapoi',
        ],
        401 => [
            'heading' => 'Autentificare necesară',
            'message' => 'Sign in with your osu! account to continue.',
        ],
        403 => [
            'heading' => 'Accesul interzis',
            'message' => 'You do not have permission to view this page.',
        ],
        500 => [
            'heading' => 'A survenit o eroare',
            'message' => 'An unexpected error occurred. Please try again.',
        ],
    ],
    'nav' => [
        'appearance' => 'Appearance',
        'menu' => 'Menu',
        'open_menu' => 'Open navigation',
        'tournaments' => 'Turnee',
        'dashboard' => 'Tablou de bord',
        'admin' => 'Admin',
        'profile' => 'Profil',
        'settings' => 'Setări',
        'device_theme' => 'Device theme',
        'dark_theme' => 'Dark theme',
        'light_theme' => 'Light theme',
        'search' => 'Caută',
        'logout' => 'Deconectare',
        'login_with_osu' => 'Autentifică-te cu osu!',
    ],
    'actions' => [
        'close' => 'Close',
        'reload' => 'Încearcă din nou',
    ],
    'messages' => [
        'language_updated' => 'Limbă actualizată cu succes.',
    ],
    'notifications' => [
        'title' => 'Notificări',
        'read_all' => 'Citește toate notificările',
        'remove_read' => 'Remove all read notifications',
        'loading' => 'Se încarcă notificările...',
        'empty' => 'Încă nu există notificări.',
        'load_error' => 'Notifications could not be loaded. Try again.',
        'update_error' => 'Notifications could not be updated. Try again.',
        'dismiss' => 'Dismiss notification',
        'unread_count' => ':count unread',
        'fields' => [
            'team_name' => 'Numele echipei',
            'stage_value' => 'Etapa finală',
            'seed' => 'Seed',
        ],
        'messages' => [
            'teammate_added' => [
                'title' => 'Adăugat ca membru al echipei',
                'body' => ':actor te-a adăugat ca membru al echipei pentru :tournament.',
            ],
            'teammate_removed' => [
                'title' => 'Eliminat ca membru al echipei',
                'body' => ':actor v-a eliminat ca membru al echipei pentru :tournament.',
            ],
            'participation_updated' => [
                'title' => 'Participare actualizată',
                'body' => ':actor a actualizat :fields pentru :tournament.',
            ],
            'participation_add_approved' => [
                'title' => 'Participare aprobată',
                'body' => 'Cererea dvs. de participare la podium pentru :tournament a fost aprobată.',
            ],
            'participation_add_denied' => [
                'title' => 'Participare refuzată',
                'body' => 'Cererea dvs. de participare la podium pentru :tournament a fost refuzată.',
            ],
            'teammate_osu_id_failed' => [
                'title' => 'Coechipier nu a putut fi adăugat',
                'body' => 'Nu s-a putut adăuga osu! ID :ids pentru :tournament.',
            ],
            'deletion_approved' => [
                'title' => 'Cerere de ștergere aprobată',
                'body' => 'Cererea dvs. de ștergere pentru :tournament a fost aprobată.',
            ],
            'deletion_denied' => [
                'title' => 'Cerere de ștergere refuzată',
                'body' => 'Cererea dvs. de ștergere pentru :tournament a fost refuzată.',
            ],
            'eligible_registration_open' => [
                'title' => 'Înscrierea este deschisă',
                'body' => ':tournament este deschis pentru înscriere și corespunde modului dvs. principal.',
            ],
            'eligible_registration_closing_24h' => [
                'title' => 'Înscrierea se închide în curând',
                'body' => 'Înscrierea pentru :tournament se închide în 24 de ore.',
            ],
        ],
    ],
    'footer' => [
        'contact' => 'Contact',
        'discord' => 'Discord',
        'donate' => 'Donează',
        'contribute' => 'Contribuie',
    ],
];
