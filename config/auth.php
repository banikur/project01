<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
    // Guard
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'admin',
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admin',
        ],
        'kab_kota' => [
            'driver' => 'session',
            'provider' => 'admin',
        ],
        'provinsi' => [
            'driver' => 'session',
            'provider' => 'admin',
        ],
        
    ],
    //  Providers
    'providers' => [
        'admin' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
    ],
    // Password
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],
];
