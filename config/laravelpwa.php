<?php

return [
    'name' => 'LaravelPWA',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'PWA',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/images/icons/Jaydey-72X72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/images/icons/Jaydey-96X96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/images/icons/Jaydey-128X128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/images/icons/Jaydey-144X144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/images/icons/Jaydey-152X152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/images/icons/Jaydey-192X192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/images/icons/Jaydey-384X384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/images/icons/Jaydey-512X512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/Jaydey-640X1136.png',
            '750x1334' => '/images/icons/Jaydey-750X1334.png',
            '828x1792' => '/images/icons/Jaydey828X1792.png',
            '1125x2436' => '/images/icons/Jaydey-1125X2436.png',
            '1242x2208' => '/images/icons/Jaydey-1242X2208.png',
            '1242x2688' => '/images/icons/Jaydey-1242X2688.png',
            '1536x2048' => '/images/icons/Jaydey-1536X2048.png',
            '1668x2224' => '/images/icons/Jaydey1658x2224.png' ,
            '1668x2388' => '/images/icons/Jaydey1668x2388.png',
            '2048x2732' => '/images/icons/Jaydey-2048x2772.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
