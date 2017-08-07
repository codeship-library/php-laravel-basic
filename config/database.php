<?php

return [
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
      'pgsql' => [
          'driver' => 'pgsql',
          'host' => env('DB_HOST', 'postgres'),
          'database' => env('DB_DATABASE', 'codeship_development'),
          'username' => env('DB_USERNAME', 'codeship'),
          'password' => env('DB_PASSWORD', ''),
          'charset' => 'utf8',
          'prefix' => '',
          'schema' => 'public',
      ],
    ],
    'migrations' => 'migrations'
];
