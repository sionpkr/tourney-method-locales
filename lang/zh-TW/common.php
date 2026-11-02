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
            'heading' => '頁面不存在',
            'message' => '你尋找的頁面不存在或已被移動。這可能就像是你 Combo 中漏掉的一個 Note。',
            'go_home' => '返回首頁',
            'go_back' => '返回上一頁',
        ],
        401 => [
            'heading' => '需要身分驗證',
            'message' => 'Sign in with your osu! account to continue.',
        ],
        403 => [
            'heading' => '訪問被拒絕',
            'message' => 'You do not have permission to view this page.',
        ],
        500 => [
            'heading' => '伺服器出錯了',
            'message' => 'An unexpected error occurred. Please try again.',
        ],
    ],
    'nav' => [
        'appearance' => 'Appearance',
        'menu' => 'Menu',
        'open_menu' => 'Open navigation',
        'tournaments' => '比賽',
        'dashboard' => '儀表盤',
        'admin' => '管理',
        'profile' => '個人資料',
        'settings' => '設置',
        'device_theme' => 'Device theme',
        'dark_theme' => 'Dark theme',
        'light_theme' => 'Light theme',
        'search' => '搜尋',
        'logout' => '登出',
        'login_with_osu' => '使用 osu! 帳號登入',
    ],
    'actions' => [
        'close' => 'Close',
        'reload' => '重試',
    ],
    'messages' => [
        'language_updated' => '語言設置已更新。',
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
        'contact' => '聯繫我們',
        'discord' => 'Discord',
        'donate' => '贊助',
        'contribute' => 'Contribute',
    ],
];
