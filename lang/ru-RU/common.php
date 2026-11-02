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
            'heading' => 'Страница не найдена',
            'message' => 'Страница, которую вы ищете, не существует или была перемещена.',
            'go_home' => 'Вернуться на главную',
            'go_back' => 'Назад',
        ],
        401 => [
            'heading' => 'Требуется аутентификация',
            'message' => 'Sign in with your osu! account to continue.',
        ],
        403 => [
            'heading' => 'Доступ запрещен',
            'message' => 'You do not have permission to view this page.',
        ],
        500 => [
            'heading' => 'Что-то пошло не так',
            'message' => 'An unexpected error occurred. Please try again.',
        ],
    ],
    'nav' => [
        'appearance' => 'Appearance',
        'menu' => 'Menu',
        'open_menu' => 'Open navigation',
        'tournaments' => 'Турниры',
        'dashboard' => 'Дэшборд',
        'admin' => 'Админ панель',
        'profile' => 'Профиль',
        'settings' => 'Настройки',
        'device_theme' => 'Device theme',
        'dark_theme' => 'Dark theme',
        'light_theme' => 'Light theme',
        'search' => 'Поиск',
        'logout' => 'Выйти из аккаунта',
        'login_with_osu' => 'Войти с помощью osu!',
    ],
    'actions' => [
        'close' => 'Close',
        'reload' => 'Попробовать ещё раз',
    ],
    'messages' => [
        'language_updated' => 'Язык успешно обновлен.',
    ],
    'notifications' => [
        'title' => 'Уведомления',
        'read_all' => 'Отметить всё прочитанным',
        'remove_read' => 'Remove all read notifications',
        'loading' => 'Загрузка уведомлений...',
        'empty' => 'Еще нет уведомлений.',
        'load_error' => 'Notifications could not be loaded. Try again.',
        'update_error' => 'Notifications could not be updated. Try again.',
        'dismiss' => 'Dismiss notification',
        'unread_count' => ':count unread',
        'fields' => [
            'team_name' => 'Название команды',
            'stage_value' => 'Итоговая стадия',
            'seed' => 'Место в квалификациях/групповой стадии',
        ],
        'messages' => [
            'teammate_added' => [
                'title' => 'Добавлен как тиммейт',
                'body' => ':actor добавил(-а) Вас как тиммейта на :tournament.',
            ],
            'teammate_removed' => [
                'title' => 'Удален как тиммейт',
                'body' => ':actor удалил(-а) Вас как тиммейта на :tournament.',
            ],
            'participation_updated' => [
                'title' => 'Участие в турнире обновлено',
                'body' => ':actor обновил(-а) информацию для :tournament: :fields.',
            ],
            'participation_add_approved' => [
                'title' => 'Участие в турнире утверждено',
                'body' => 'Ваше изменение информации о подиуме для :tournament была одобрена.',
            ],
            'participation_add_denied' => [
                'title' => 'Участие в турнире отказано',
                'body' => 'Ваше изменение информации о подиуме для :tournament была отклонена.',
            ],
            'teammate_osu_id_failed' => [
                'title' => 'Тиммейт не может быть добавлен',
                'body' => 'Не удалось добавить osu! ID :ids для :tournament.',
            ],
            'deletion_approved' => [
                'title' => 'Запрос на удаление одобрен',
                'body' => 'Ваш запрос на удаление для :tournament был одобрен.',
            ],
            'deletion_denied' => [
                'title' => 'Запрос на удаление отклонен',
                'body' => 'Ваш запрос на удаление для :tournament был отклонен.',
            ],
            'eligible_registration_open' => [
                'title' => 'Регистрация открыта',
                'body' => ':tournament открыт для регистрации и совпадает с вашим основным режимом.',
            ],
            'eligible_registration_closing_24h' => [
                'title' => 'Регистрация скоро будет закрыта',
                'body' => 'Регистрация на :tournament заканчивается в течение 24 часов.',
            ],
        ],
    ],
    'footer' => [
        'contact' => 'Связаться',
        'discord' => 'Discord-сервер',
        'donate' => 'Поддержать',
        'contribute' => 'Внести свой вклад',
    ],
];
