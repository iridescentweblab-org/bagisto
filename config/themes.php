<?php

return [
    'default' => 'default',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],

        // 'bliss' => [
        //     'views_path' => 'resources/themes/bliss/views',
        //     'assets_path' => 'public/themes/bliss/assets',
        //     'name' => 'Bliss',
        //     'parent' => 'default'
        // ]

        'velocity' => [
            'views_path' => 'resources/themes/velocity/views',
            'assets_path' => 'public/themes/velocity/assets',
            'name' => 'Velocity',
            'parent' => 'default'
        ],

        'basic' => [
            'views_path' => 'resources/themes/basic/views',
            'assets_path' => 'public/themes/basic/assets',
            'name' => 'Basic',
            'parent' => 'default'
        ],

        'advanced' => [
            'views_path' => 'resources/themes/advanced/views',
            'assets_path' => 'public/themes/advanced/assets',
            'name' => 'Advanced',
            'parent' => 'velocity'
        ],
    ]
];