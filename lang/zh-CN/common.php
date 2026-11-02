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
            'heading' => '页面不存在',
            'message' => '你寻找的页面不存在或已被移动。',
            'go_home' => '返回首页',
            'go_back' => '返回上一页',
        ],
        401 => [
            'heading' => '需要身份验证',
            'message' => 'Sign in with your osu! account to continue.',
        ],
        403 => [
            'heading' => '访问被拒绝',
            'message' => 'You do not have permission to view this page.',
        ],
        500 => [
            'heading' => '服务器出错了',
            'message' => 'An unexpected error occurred. Please try again.',
        ],
    ],
    'nav' => [
        'appearance' => 'Appearance',
        'menu' => 'Menu',
        'open_menu' => 'Open navigation',
        'tournaments' => '比赛',
        'dashboard' => '仪表盘',
        'admin' => '管理',
        'profile' => '个人资料',
        'settings' => '设置',
        'device_theme' => 'Device theme',
        'dark_theme' => 'Dark theme',
        'light_theme' => 'Light theme',
        'search' => '搜索',
        'logout' => '退出登录',
        'login_with_osu' => '使用 osu! 账号登录',
    ],
    'actions' => [
        'close' => 'Close',
        'reload' => '重试',
    ],
    'messages' => [
        'language_updated' => '语言设置已更新。',
    ],
    'notifications' => [
        'title' => '通知',
        'read_all' => '阅读所有通知',
        'remove_read' => 'Remove all read notifications',
        'loading' => '正在加载通知……',
        'empty' => '暂无通知。',
        'load_error' => 'Notifications could not be loaded. Try again.',
        'update_error' => 'Notifications could not be updated. Try again.',
        'dismiss' => 'Dismiss notification',
        'unread_count' => ':count unread',
        'fields' => [
            'team_name' => '队伍名称',
            'stage_value' => '最终阶段',
            'seed' => '种子',
        ],
        'messages' => [
            'teammate_added' => [
                'title' => '已添加为队友',
                'body' => ':actor 已将你添加为 :tournament 的队友。',
            ],
            'teammate_removed' => [
                'title' => '已从队友中移除',
                'body' => ':actor 已将你从 :tournament 的队友中移除。',
            ],
            'participation_updated' => [
                'title' => '参赛信息已更新',
                'body' => ':actor 更新了 :tournament 的 :fields。',
            ],
            'participation_add_approved' => [
                'title' => '参赛已批准',
                'body' => '你对 :tournament 的领奖台参赛请求已批准。',
            ],
            'participation_add_denied' => [
                'title' => '参赛已拒绝',
                'body' => '你对 :tournament 的领奖台参赛请求已拒绝。',
            ],
            'teammate_osu_id_failed' => [
                'title' => '无法添加队友',
                'body' => '未能为 :tournament 添加 osu! ID :ids。',
            ],
            'deletion_approved' => [
                'title' => '删除请求已批准',
                'body' => '你对 :tournament 的删除请求已批准。',
            ],
            'deletion_denied' => [
                'title' => '删除请求已拒绝',
                'body' => '你对 :tournament 的删除请求已拒绝。',
            ],
            'eligible_registration_open' => [
                'title' => '报名已开放',
                'body' => ':tournament 已开放报名，并与你的主要模式匹配。',
            ],
            'eligible_registration_closing_24h' => [
                'title' => '报名即将截止',
                'body' => ':tournament 将在 24 小时内结束报名。',
            ],
        ],
    ],
    'footer' => [
        'contact' => '联系我们',
        'discord' => 'Discord',
        'donate' => '捐赠',
        'contribute' => '贡献',
    ],
];
