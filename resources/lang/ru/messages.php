<?php

return [
    'ua'=>'Українською',
    'ru'=>'Русский',

    'frontend'=>[
        'auth'=>[
            'login'=>[
                'title'=>'Авторизация',
                'submit'=>'Авторизироваться'
            ],
            'register'=>[
                'title'=>'Регистрация',
                'submit'=>'Зарегестрироваться',
            ],
            'profile'=>[
                'title'=>'Профиль',
                'logout'=>'Выйти',
            ],
            'forgot'=>[
                'title'=>'Напомнить пароль?',
                'email'=>'Електронная почта',
                'password'=>'Пароль',
                'confirm_password'=>'Повторить пароль',
                'button1'=>'Отослать пароль'
            ],

            'password'=>'Пароль',
            'password_confirm'=>'Повторить пароль',
            'remember_me'=>'Запомнить меня?',
            'first_name'=>'Имя',
            'last_name'=>'Фамилия',
        ],
        'categories'=>[
            'title'=>'Категории',
            'list'=>[
                'title'=>'Перечень категорий',
            ],
            'view'=>[
                'title'=>'Просмотр категории ":title"'
            ]
        ],
        'topics'=>[
            'fields'=>[
                'title'=>'Название темы',
                'description'=>'Текст темы'
            ],
            'create'=>[
                'title'=>'Добавить тему',
                'button'=>'Добавить тему'
            ],
            'view'=>[
                'title'=>'Тема ":title"'
            ]
        ],
        'comments'=>[
            'create'=>[
                'title'=>'Добавить коммент',
                'button'=>'Добавить коммент'
            ],
            'fields'=>[
                'message'=>'Коммент'
            ]
        ],
        'search'=>'Поиск',

        'last_comment'=>[
            'topic'=>'Тема',
            'user'=>'Автор',
            'last'=>'Последний'
        ],
        'alerts'=>[
            'create'=>[
                'comment'=>'Вы добавили новый комментарий!',
                'topic'=>'Вы добавили новую тему!'
            ]
        ]
    ],
    'backend'=>[
        'menu'=>'Админка',

        'categories'=>[
            'menu'=>[
                'list'=>'Список',
                'create'=>'Добавить',
            ],
            'buttons'=>[
                'create'=>'Добавить категорию'
            ],
            'fields'=>[
                'title'=>'Название',
                'description'=>'Описание',
                'author'=>'Автор',
                'created_at'=>'Создана',
                'active'=>'Активность',
                'actions'=>'Действия',
                'active_on'=>'Вкл',
                'active_off'=>'Выкл',

            ],
            'descriptions'=>[
                'title'=>'Описание для названия категории',
                'description'=>'Описание для описания'
            ],
            'list'=>[
                'title'=>'Все категории',
            ],
            'create'=>[
                'title'=>'Добавляем категорию',
            ]

        ],
        'users'=>[
            'title'=>'Пользователи',
            'menu'=>[
                'list'=>'Список',
                'create'=>'Добавить',
            ],
            'fields'=>[
                'first_name'=>'Имя',
                'last_name'=>'Фамилия',
                'email'=>'Email',
                'role'=>'Роль',
                'active'=>'Активность',
                'actions'=>'Действия',
                'role_user'=>'Пользователь',
                'role_admin'=>'Администратор',
                'active_on'=>'ON',
                'active_off'=>'OFF',
                'password'=>'Пароль',
                'password_confirmation'=>'Повторить пароль'
            ],
            'list'=>[
                'title'=>'Список пользователей'
            ],
            'buttons'=>[
                'create'=>'Добавить пользователя'
            ],
            'create'=>[
                'title'=>'Добавление нового пользователя'
            ]
        ]

    ]
];
