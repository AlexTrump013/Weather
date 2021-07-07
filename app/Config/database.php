<?php

return [
    'fetch' => PDO::FETCH_CLASS,
    'default' => 'mysql',
    'connection' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'laravel2',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'pretix' => ','
        ]
    ]
];
