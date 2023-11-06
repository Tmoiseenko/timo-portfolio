<?php

return [
    'name' => 'Портфолио',
    'created_at' => 'Дата создания',
    'education' => [
        'name' => 'Образование',
        'single' => 'Образование',
        'field_labels' => [
            'title' => 'Название',
            'institution' => 'Заведение',
            'description' => 'Описание',
            'date_to' => 'Дата окончания',
        ],
    ],
    'experience' => [
        'name' => 'Опыт работы',
        'single' => 'Место работы',
        'field_labels' => [
            'position' => 'Должность',
            'employer' => 'Работадатель',
            'employer_link' => 'Ссылка на сайт работадателя',
            'logo' => 'Логотип работадателя',
            'description' => 'Описание',
            'date_from' => 'Дата начала',
            'date_to' => 'Дата окончания',
            'current' => 'По настоящий момент',
        ],
    ],
    'skill' => [
        'name' => 'Навыки',
        'single' => 'Навык',
        'field_labels' => [
            'title' => 'Название',
            'percent' => 'Процент',
        ],
    ],
    'technology' => [
        'name' => 'Технологии',
        'single' => 'Технологию',
        'field_labels' => [
            'title' => 'Название',
        ],
    ],
    'project' => [
        'name' => 'Проекты',
        'single' => 'Проект',
        'field_labels' => [
            'title' => 'Название',
            'link_url' => 'Ссылка на проект или сайт',
            'link_title' => 'Текст сылки',
            'description' => 'Описание',
            'technologies' => 'Технологии',
            'images' => 'Фотографии'
        ],
    ],
    'settings' => [
        'name' => 'Основные настройки',
        'description' => 'Оснвоная информация о пользователе',
        'field_labels' => [
            'birthday' => 'День рождения',
            'country' => 'Страна',
            'city' => 'Город',
            'email' => 'Email',
            'phone' => 'Телефон',
            'resume_file' => 'Файл резюме',
            'avatar' => 'Аватар',
            'about' => 'Обо мне',
            'socials_title' => 'Соц. сети',
            'socials_icon' => 'Иконка соц. сети',
            'socials_link' => 'Ссылка на соц. сеть',
        ],
    ]
];
