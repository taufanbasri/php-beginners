<?php

return [
  'database' => [
    'name' => 'php_beginner',
    'username' => 'homestead',
    'password' => 'secret',
    'connection' => 'mysql:host=localhost;port=33060',
    'options' =>  [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
