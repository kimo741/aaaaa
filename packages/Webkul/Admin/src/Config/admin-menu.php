<?php

return [
    [
        'key'        => 'package',
        'name'       => 'Packages',
        'route'      => 'package.get.all',
        'params'     => ['route' => 'package.get.all'],
        'sort'       => 11,
        'icon-class' => 'dashboard-icon',
    ],[
        'key'        => 'package.all',
        'name'       => 'All Packages',
        'route'      => 'package.get.all',
        'sort'       => 11,
        'icon-class' => 'dashboard-icon',
    ],[
        'key'        => 'package.create',
        'name'       => 'Add Package',
        'route'      => 'package.get.add.form',
        'sort'       => 12,
        'icon-class' => 'dashboard-icon',
    ], [
        'key'        => 'item',
        'name'       => 'Items',
        'route'      => 'item.get.all',
        'sort'       => 13,
        'icon-class' => 'dashboard-icon',
    ], [
        'key'        => 'item.create',
        'name'       => 'Add Item',
        'route'      => 'item.get.add.form',
        'sort'       => 14,
        'icon-class' => 'dashboard-icon',
    ], [
        'key'        => 'service',
        'name'       => 'Service',
        'route'      => 'service.get.all',
        'sort'       => 15,
        'icon-class' => 'dashboard-icon',
    ], [
        'key'        => 'service.create',
        'name'       => 'Add Service',
        'route'      => 'service.get.add.form',
        'sort'       => 16,
        'icon-class' => 'dashboard-icon',
    ]
];
