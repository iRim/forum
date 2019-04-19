<?php

return [
    'ua'=>'Українською',
    'ru'=>'Русский',

    'frontend'=>[
        'auth'=>[
            'login'=>[
                'title'=>'Авторизація',
                'submit'=>'Авторизуватися'
            ],
            'register'=>[
                'title'=>'Реєстрація',
                'submit'=>'Зареєструватися',
            ],
            'profile'=>[
                'title'=>'Профіль',
                'logout'=>'Вийти',
            ],
            'forgot'=>[
                'title'=>'Нагадати пароль?',
            ],

            'password'=>'Пароль',
            'password_confirm'=>'Повторити пароль',
            'remember_me'=>'Запамятати мене?',
            'first_name'=>'Ім\'я',
            'last_name'=>'Прізвище',
        ],
        'categories'=>[
            'title'=>'Категорії',
            'list'=>[
                'title'=>'Перелік категорій',
            ],
            'view'=>[
                'title'=>'Перегляд категорії ":title"'
            ]
        ],
        'topics'=>[
            'fields'=>[
                'title'=>'Назва теми',
                'description'=>'Текст теми'
            ],
            'create'=>[
                'title'=>'Додати тему',
                'button'=>'Додати тему'
            ],
            'view'=>[
                'title'=>'Тема ":title"'
            ]
        ],
        'comments'=>[
            'create'=>[
                'title'=>'Додати комментар',
                'button'=>'Додати комментар'
            ],
            'fields'=>[
                'message'=>'Комментар'
            ]
        ],
        'search'=>'Пошук',

        'last_comment'=>[
            'topic'=>'Тема',
            'user'=>'Автор',
            'last'=>'Останній'
        ],
        'alerts'=>[
            'create'=>[
                'comment'=>'Ви додали новий комментар!',
                'topic'=>'Ви додали нову тему!'
            ]
        ]
    ],
    'backend'=>[
        'menu'=>'Адмінка',

        'categories'=>[
            'menu'=>[
                'list'=>'Перелік',
                'create'=>'Додати',
            ],
            'buttons'=>[
                'create'=>'Додати категорію'
            ],
            'fields'=>[
                'title'=>'Назва',
                'description'=>'Описання',
                'author'=>'Автор',
                'created_at'=>'Створена',
                'active'=>'Активна',
                'actions'=>'Дії',
                'active_on'=>'Ввім',
                'active_off'=>'Вимк',

            ],
            'descriptions'=>[
                'title'=>'Опис для назви категорії',
                'description'=>'Опис для опису'
            ],
            'list'=>[
                'title'=>'Усі категорії',
            ],
            'create'=>[
                'title'=>'Додаємо категорію',
            ]

        ]

    ]
];
