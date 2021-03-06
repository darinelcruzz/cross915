<?php

return [

    'members' => [
        'title' => 'Miembros',
        'icon' => 'fa fa-id-card-o',
        'submenu' => [
            'deposits' => [
                'title' => 'Pagos',
                'route' => 'payments.index'
            ],
            'index' => [
                'title' => 'Lista',
                'route' => 'members.index'
            ],
            'expired' => [
                'title' => 'Vencidas',
                'route' => 'members.expired'
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
                'title' => 'Ventas',
                'route' => 'sales.index'
            ],
            'credit' => [
                'title' => 'Crédito',
                'route' => 'sales.pending'
            ],
            'products' => [
                'title' => 'Productos',
                'route' => 'products.index'
            ],
            'entries' => [
                'title' => 'Entradas',
                'route' => 'entries.index'
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
            'photos' => [
                'title' => 'Fotos tablet',
                'route' => 'attendences.edit'
            ],
        ]
    ],

    /*'training' => [
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
    ],*/

    'users' => [
        'title' => 'Usuarios',
        'icon' => 'fa fa-user-circle-o',
        'submenu' => [
            'index' => [
                'title' => 'Listado',
                'route' => 'users.index'
            ],
            'create' => [
                'title' => 'Crear',
                'route' => 'users.create'
            ],
        ]
    ],

    /*'attendence' => [
        'title' => 'Asistencia',
        'icon' => 'fa fa-check-square-o',
        'route' => 'attendences.create'
    ],*/

    'logout' => [
        'title' => 'Salir',
        'icon' => 'fa fa-sign-out',
        'route' => 'getout'
    ],
];
