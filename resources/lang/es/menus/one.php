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
            'attendence' => [
                'title' => 'Asistencia',
                'route' => 'attendences.index'
            ],
        ]
    ],

    'store' => [
        'title' => 'Tienda',
        'icon' => 'fa fa-shopping-bag',
        'submenu' => [
            'sales' => [
                'title' => 'Venta',
                'route' => 'sales.index'
            ],
            'credit' => [
                'title' => 'Crédito',
                'route' => 'home'
            ],
            'index' => [
                'title' => 'Productos',
                'route' => 'products.index'
            ],
        ]
    ],

    'administration' => [
        'title' => 'Administración',
        'icon' => 'fa fa-line-chart',
        'submenu' => [
            'balance' => [
                'title' => 'Caja',
                'route' => 'admin.cash'
            ],
            'expenses' => [
                'title' => 'Gastos',
                'route' => 'expenses.create'
            ],
            'memberships' => [
                'title' => 'Membresias y descuentos',
                'route' => 'admin.indexMD'
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
            'classes' => [
                'title' => 'Clases',
                'route' => 'trainings.index'
            ],
            'coachs' => [
                'title' => 'Entrenadores',
                'route' => 'coaches.index'
            ]
        ]
    ],

    'workouts' => [
        'title' => 'WODs',
        'icon' => 'fa fa-bolt',
        'submenu' => [
            'create' => [
                'title' => 'Crear',
                'route' => 'workouts.create'
            ],
            'index' => [
                'title' => 'Listado',
                'route' => 'workouts.index'
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

    'attendence' => [
        'title' => 'Asistencia',
        'icon' => 'fa fa-check-square-o',
        'route' => 'attendences.create'
    ],

    'logout' => [
        'title' => 'Salir',
        'icon' => 'fa fa-sign-out',
        'route' => 'getout'
    ],
];
