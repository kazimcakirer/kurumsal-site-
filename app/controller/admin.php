<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

$menus = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'tachometer'
    ],
    'menu' => [
        'title' => 'Menü Yönetimi',
        'icon' => 'bars',
        'submenu' => [
            'add-menu' => 'Menü Ekle',
            'menu' => 'Menü Listesi'
        ]
    ],
    'about' => [
        'title' => 'Hakkımızda',
        'icon' => 'cog'
    ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog'
    ]
];

require admin_controller(route(1));