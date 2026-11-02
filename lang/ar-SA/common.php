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
            'heading' => 'Page Not Found',
            'message' => 'The page you\'re looking for doesn\'t exist or has been moved.',
            'go_home' => 'Go Home',
            'go_back' => 'Go Back',
        ],
        401 => [
            'heading' => 'Authentication Required',
            'message' => 'Sign in with your osu! account to continue.',
        ],
        403 => [
            'heading' => 'Access Forbidden',
            'message' => 'You do not have permission to view this page.',
        ],
        500 => [
            'heading' => 'Something Went Wrong',
            'message' => 'An unexpected error occurred. Please try again.',
        ],
    ],
    'nav' => [
        'appearance' => 'Appearance',
        'menu' => 'Menu',
        'open_menu' => 'Open navigation',
        'tournaments' => 'Tournaments',
        'dashboard' => 'Dashboard',
        'admin' => 'Admin',
        'profile' => 'Profile',
        'settings' => 'Settings',
        'device_theme' => 'Device theme',
        'dark_theme' => 'Dark theme',
        'light_theme' => 'Light theme',
        'search' => 'Search',
        'logout' => 'Logout',
        'login_with_osu' => 'Login with osu!',
    ],
    'actions' => [
        'close' => 'Close',
        'reload' => 'Try Again',
    ],
    'messages' => [
        'language_updated' => 'Language updated successfully.',
    ],
    'notifications' => [
        'title' => 'Notifications',
        'read_all' => 'Read all notifications',
        'remove_read' => 'Remove all read notifications',
        'loading' => 'Loading notifications...',
        'empty' => 'No notifications yet.',
        'load_error' => 'Notifications could not be loaded. Try again.',
        'update_error' => 'Notifications could not be updated. Try again.',
        'dismiss' => 'Dismiss notification',
        'unread_count' => ':count unread',
        'fields' => [
            'team_name' => 'team name',
            'stage_value' => 'final stage',
            'seed' => 'seed',
        ],
        'messages' => [
            'teammate_added' => [
                'title' => 'Added as teammate',
                'body' => ':actor added you as a teammate for :tournament.',
            ],
            'teammate_removed' => [
                'title' => 'Removed as teammate',
                'body' => ':actor removed you as a teammate for :tournament.',
            ],
            'participation_updated' => [
                'title' => 'Participation updated',
                'body' => ':actor updated :fields for :tournament.',
            ],
            'participation_add_approved' => [
                'title' => 'Participation approved',
                'body' => 'Your podium participation request for :tournament was approved.',
            ],
            'participation_add_denied' => [
                'title' => 'Participation denied',
                'body' => 'Your podium participation request for :tournament was denied.',
            ],
            'teammate_osu_id_failed' => [
                'title' => 'Teammate could not be added',
                'body' => 'Failed to add osu! ID :ids for :tournament.',
            ],
            'deletion_approved' => [
                'title' => 'Deletion request approved',
                'body' => 'Your deletion request for :tournament was approved.',
            ],
            'deletion_denied' => [
                'title' => 'Deletion request denied',
                'body' => 'Your deletion request for :tournament was denied.',
            ],
            'eligible_registration_open' => [
                'title' => 'Registration is open',
                'body' => ':tournament is open for registration and matches your main mode.',
            ],
            'eligible_registration_closing_24h' => [
                'title' => 'Registration closes soon',
                'body' => ':tournament registration ends within 24 hours.',
            ],
        ],
    ],
    'footer' => [
        'contact' => 'Contact',
        'discord' => 'Discord',
        'donate' => 'Donate',
        'contribute' => 'Contribute',
    ],
];
