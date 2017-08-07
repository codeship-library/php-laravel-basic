<?php

return [
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
      'pgsql' => [
          'driver' => 'pgsql',
          'host' => env('DB_HOST', 'localhost'),
          'database' => env('DB_DATABASE', 'forge'),
          'username' => env('DB_USERNAME', 'forge'),
          'password' => env('DB_PASSWORD', ''),
          'charset' => 'utf8',
          'prefix' => '',
          'schema' => 'public',
      ],
    ],
    'migrations' => 'migrations'
];
