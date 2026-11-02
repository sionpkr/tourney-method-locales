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
            'heading' => 'Página no encontrada',
            'message' => 'La página que estás buscando no existe o ha sido removida.',
            'go_home' => 'Ir a Inicio',
            'go_back' => 'Volver atrás',
        ],
        401 => [
            'heading' => 'Autentificación requerida',
            'message' => 'Sign in with your osu! account to continue.',
        ],
        403 => [
            'heading' => 'Acceso prohibido',
            'message' => 'You do not have permission to view this page.',
        ],
        500 => [
            'heading' => 'Algo ha salido mal',
            'message' => 'An unexpected error occurred. Please try again.',
        ],
    ],
    'nav' => [
        'appearance' => 'Appearance',
        'menu' => 'Menu',
        'open_menu' => 'Open navigation',
        'tournaments' => 'Torneos',
        'dashboard' => 'Panel de control',
        'admin' => 'Administrador',
        'profile' => 'Perfil',
        'settings' => 'Configuración',
        'device_theme' => 'Device theme',
        'dark_theme' => 'Dark theme',
        'light_theme' => 'Light theme',
        'search' => 'Buscar',
        'logout' => 'Cerrar sesión',
        'login_with_osu' => 'Iniciar sesión con osu!',
    ],
    'actions' => [
        'close' => 'Close',
        'reload' => 'Inténtalo de nuevo',
    ],
    'messages' => [
        'language_updated' => 'Idioma actualizado correctamente.',
    ],
    'notifications' => [
        'title' => 'Notificaciones',
        'read_all' => 'Leer todas las notificaciones',
        'remove_read' => 'Remove all read notifications',
        'loading' => 'Cargando notificaciones...',
        'empty' => 'Aún no hay notificaciones.',
        'load_error' => 'Notifications could not be loaded. Try again.',
        'update_error' => 'Notifications could not be updated. Try again.',
        'dismiss' => 'Dismiss notification',
        'unread_count' => ':count unread',
        'fields' => [
            'team_name' => 'nombre del equipo',
            'stage_value' => 'etapa final',
            'seed' => 'seed',
        ],
        'messages' => [
            'teammate_added' => [
                'title' => 'Agregado como compañero de equipo',
                'body' => ':actor te ha añadido como compañero de equipo para :tournament.',
            ],
            'teammate_removed' => [
                'title' => 'Eliminado como compañero de equipo',
                'body' => ':actor te eliminó como compañero de equipo de :tournament.',
            ],
            'participation_updated' => [
                'title' => 'Participación actualizada',
                'body' => ':actor actualizó :fields para :tournament.',
            ],
            'participation_add_approved' => [
                'title' => 'Participación aprobada',
                'body' => 'Tu solicitud para participar en el podio de :tournament ha sido aprobada.',
            ],
            'participation_add_denied' => [
                'title' => 'Participación denegada',
                'body' => 'Tu solicitud para participar en el podio de :tournament ha sido denegada.',
            ],
            'teammate_osu_id_failed' => [
                'title' => 'No se pudo agregar compañero',
                'body' => 'Error al agregar osu! ID :ids para :tournament.',
            ],
            'deletion_approved' => [
                'title' => 'Solicitud de eliminación aprobada',
                'body' => 'Tu solicitud de eliminación para :tournament ha sido aprobada.',
            ],
            'deletion_denied' => [
                'title' => 'Solicitud de eliminación rechazada',
                'body' => 'Tu solicitud de eliminación para :tournament ha sido denegada.',
            ],
            'eligible_registration_open' => [
                'title' => 'Los registros están abiertos',
                'body' => 'Los registros de :tournament están abiertos y coincide con tu modo principal.',
            ],
            'eligible_registration_closing_24h' => [
                'title' => 'Registros cierran pronto',
                'body' => 'Los registros de :tournament terminan en 24 horas.',
            ],
        ],
    ],
    'footer' => [
        'contact' => 'Contacto',
        'discord' => 'Servidor de Discord',
        'donate' => 'Donar',
        'contribute' => 'Contribuir',
    ],
];
