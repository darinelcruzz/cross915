<?php

return [

    'members' => [
        'title' => 'Simple',
        'icon' => 'fa fa-user',
        'route' => 'home'
    ],

    'members' => [
        'title' => 'Miembros',
        'icon' => 'fa fa-user-circle-o',
        'submenu' => [
            'index' => [
                'title' => 'Lista',
                'route' => 'members.index'
            ],
            'create' => [
                'title' => 'Agregar',
                'route' => 'members.create'
            ],
        ]
    ],

    'schedules' => [
        'title' => 'Horarios',
        'icon' => 'fa fa-clock-o',
        'submenu' => [
            'index' => [
                'title' => 'Lista',
                'route' => 'schedules.index'
            ],
            'classes' => [
                'title' => 'Clases',
                'route' => 'trainings.index'
            ],
        ]
    ],

    'logout' => [
        'title' => 'Salir',
        'icon' => 'fa fa-sign-out',
        'route' => 'getout'
    ],
];
