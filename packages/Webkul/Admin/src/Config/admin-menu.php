<?php

return [
    [
        'key'        => 'client',
        'name'       => 'Clients',
        'route'      => 'client.get.all',
        'params'     => ['route' => 'client.get.all'],
        'sort'       => 7,
        'icon-class' => 'avatar-icon',
    ],[
        'key'        => 'client.all',
        'name'       => 'All Clients',
        'route'      => 'client.get.all',
        'sort'       => 1,
    ],[
        'key'        => 'client.create',
        'name'       => 'Add Client',
        'route'      => 'client.get.add.form',
        'sort'       => 2,
    ],
//    [
//        'key'        => 'item',
//        'name'       => 'Items',
//        'route'      => 'item.get.all',
//        'params'     => ['route' => 'item.get.all'],
//        'sort'       => 11,
//        'icon-class' => 'dashboard-icon',
//    ], [
//        'key'        => 'item.create',
//        'name'       => 'Add Item',
//        'route'      => 'item.get.add.form',
//        'sort'       => 2,
//        'icon-class' => 'dashboard-icon',
//    ], [
//        'key'        => 'item.all',
//        'name'       => 'All Item',
//        'route'      => 'item.get.add.form',
//        'sort'       => 1,
//        'icon-class' => 'dashboard-icon',
//    ], [
//        'key'        => 'service',
//        'name'       => 'Service',
//        'route'      => 'service.get.all',
//        'params'     => ['route' => 'service.get.all'],
//        'sort'       => 12,
//        'icon-class' => 'dashboard-icon',
//    ], [
//        'key'        => 'service.all',
//        'name'       => 'Service',
//        'route'      => 'service.get.all',
//        'sort'       => 1,
//        'icon-class' => 'dashboard-icon',
//    ], [
//        'key'        => 'service.create',
//        'name'       => 'Add Service',
//        'route'      => 'service.get.add.form',
//        'sort'       => 2,
//        'icon-class' => 'dashboard-icon',
//    ],
    [
        'key'        => 'settings.front-setting',
        'name'       => 'Front Setting',
        'info'       => 'manage all about Package,Items and Services',
        'sort'       => 5,
        'icon-class' => 'settings-icon',
    ],[
        'key'        => 'settings.front-setting.package',
        'name'       => 'Packages',
        'info'       => 'Add, edit or delete packages from CRM',
        'route'      => 'package.get.all',
        'sort'       => 1,
        'icon-class' => 'type-icon',
    ],[
        'key'        => 'settings.front-setting.service',
        'name'       => 'Services',
        'info'       => 'Add, edit or delete services from CRM',
        'route'      => 'service.get.all',
        'sort'       => 2,
        'icon-class' => 'type-icon',
    ],[
        'key'        => 'settings.front-setting.item',
        'name'       => 'Items',
        'info'       => 'Add, edit or delete items from CRM',
        'route'      => 'item.get.all',
        'sort'       => 3,
        'icon-class' => 'type-icon',
    ],
];
