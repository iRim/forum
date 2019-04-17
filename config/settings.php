<?php

return [
    'frontend'=>[
        'menu'=>[
            [
                'icon'=>'home',
                'title'=>'messages.frontend.categories.title',
                'url'=>'frontend.categories.list'
            ],
            // [
            //     'icon'=>'pie-chart',
            //     'title'=>'Rating',
            //     'url'=>'frontend.rating.index'
            // ]
        ]
    ],
    'backend'=>[
        'menu'=>[
            [
                'icon'=>'briefcase',
                'title'=>'messages.frontend.categories.title',
                'childrens'=>[
                    [
                        'icon'=>'list',
                        'title'=>'messages.backend.categories.menu.list',
                        'url'=>'backend.categories.list'
                    ],
                    [
                        'icon'=>'plus',
                        'title'=>'messages.backend.categories.menu.create',
                        'url'=>'backend.categories.create'
                    ]
                ]
            ],
            // [
            //     'icon'=>'users',
            //     'title'=>'Users',
            //     'childrens'=>[
            //         [
            //             'icon'=>'list',
            //             'title'=>'List',
            //             'url'=>'backend.users.list',
            //         ],
            //         [
            //             'icon'=>'plus',
            //             'title'=>'Create',
            //             'url'=>'backend.users.create',
            //         ]
            //     ]
            // ]
        ]
    ]
];
