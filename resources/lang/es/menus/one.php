<?php

return [

    'members' => [
        'title' => 'Miembros',
        'icon' => 'fa fa-id-card-o',
        'submenu' => [
            'deposits' => [
                'title' => 'Pago',
                'route' => 'home'
            ],
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

    'store' => [
        'title' => 'Tienda',
        'icon' => 'fa fa-shopping-bag',
        'submenu' => [
            'sales' => [
                'title' => 'Venta',
                'route' => 'home'
            ],
            'credit' => [
                'title' => 'Crédito',
                'route' => 'home'
            ],
            'index' => [
                'title' => 'Productos',
                'route' => 'home'
            ],
            'create' => [
                'title' => 'Nuevo producto',
                'route' => 'products.create'
            ],
        ]
    ],

    'administration' => [
        'title' => 'Administración',
        'icon' => 'fa fa-line-chart',
        'submenu' => [
            'balance' => [
                'title' => 'Caja',
                'route' => 'home'
            ],
            'expenses' => [
                'title' => 'Gastos',
                'route' => 'home'
            ],
            'memberships' => [
                'title' => 'Membrecias',
                'route' => 'home'
            ],
        ]
    ],

    'training' => [
        'title' => 'Entrenamiento',
        'icon' => 'fa fa-clock-o',
        'submenu' => [
            'schedules' => [
                'title' => 'Horario',
                'route' => 'schedules.index'
            ],
            'coachs' => [
                'title' => 'Entrenadores',
                'route' => 'home'
            ]
        ]
    ],

    'workouts' => [
        'title' => 'WODs',
        'icon' => 'fa fa-bolt',
        'submenu' => [
            'create' => [
                'title' => 'Crear',
                'route' => 'home'
            ],
            'index' => [
                'title' => 'Listado',
                'route' => 'home'
            ],
            'results' => [
                'title' => 'Listado',
                'route' => 'home'
            ],
        ]
    ],

    'users' => [
        'title' => 'Usuarios',
        'icon' => 'fa fa-user-circle-o',
        'submenu' => [
            'index' => [
                'title' => 'Listado',
                'route' => 'home'
            ],
            'create' => [
                'title' => 'Crear',
                'route' => 'home'
            ],
        ]
    ],

    'logout' => [
        'title' => 'Salir',
        'icon' => 'fa fa-sign-out',
        'route' => 'getout'
    ],
];
