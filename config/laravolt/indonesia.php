<?php

return [
    'table_prefix' => 'indonesia_',
    'route' => [
        'enabled' => false,
        'middleware' => ['web', 'auth'],
        'prefix' => 'indonesia',
    ],
    'view' => [
        'layout' => 'ui::layouts.app',
    ],
    'menu' => [
        'enabled' => false,
    ],
    'providers' => [

    Laravolt\Indonesia\ServiceProvider::class

    ],
    'aliases' => [

    'Indonesia' => Laravolt\Indonesia\Facade::class

]
];
