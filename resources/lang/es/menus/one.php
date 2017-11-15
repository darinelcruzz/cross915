<?php

return [

    'first' => [
        'title' => 'Simple',
        'icon' => 'fa fa-user',
        'route' => 'home'
    ],

    'second' => [
        'title' => 'Multinivel',
        'icon' => 'fa fa-car',
        'submenu' => [
            'second.one' => [
                'title' => 'Uno',
                'route' => 'home'
            ],
            'second.two' => [
                'title' => 'Dos',
                'route' => 'home'
            ],
        ]
    ],
];
