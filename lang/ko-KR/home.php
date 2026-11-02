<?php

return [
    'hero' => [
        'title' => 'Find your next osu! tournament',
        'subtitle' => 'Browse tournaments by mode and entry requirements. Keep a record of the events you play.',
    ],
    'actions' => [
        'browse' => 'Browse Tournaments',
        'login' => 'Sign in to check eligibility',
        'participation' => 'My participation',
        'public_search' => 'Tournament search is public. Sign in for eligibility checks and tournament alerts.',
    ],
    'featured' => [
        'title' => 'Upcoming registration deadlines',
        'empty' => 'No upcoming registration dates are listed. Browse all tournaments.',
    ],
    'sections' => [
        'how_to_use' => [
            'title' => 'How to use Tourney Method',
            'items' => [
                'registration' => [
                    'title' => 'Registration alerts',
                    'body' => 'Signed-in users can receive alerts for eligible tournaments when registration opens or closes within 24 hours.',
                ],
                'participation' => [
                    'title' => 'Participation records',
                    'body' => 'Open your profile and add participation records for tournaments you played, including stage reached, placement, teammates, and match links.',
                ],
                'corrections' => [
                    'title' => 'Tournament corrections',
                    'body' => 'Open a tournament detail page, scroll to Contributions, and submit corrections for metadata, staff, podiums, or links.',
                ],
            ],
        ],
        'data_sources' => [
            'title' => '데이터 소스',
            'osu_api' => 'osu! API',
            'osu_api_desc' => '사용자 인증, 프로필 데이터, 토너먼트 데이터',
            'tcomm' => 'tcomm API',
            'tcomm_desc' => '배지 토너먼트 데이터',
            'otr' => 'o!TR 공개 데이터셋',
            'otr_desc' => '토너먼트 데이터',
            'community' => '커뮤니티',
            'community_desc' => '토너먼트 데이터',
        ],
    ],
    'stats' => [
        'active_players' => 'Active Players',
        'active_staff' => 'Active Staff',
        'tournaments' => '토너먼트',
    ],
];
