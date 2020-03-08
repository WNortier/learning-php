<?php 

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'warwick',
        'password' => 'wnortier',
        'connection' => 'mysql:host=localhost',
        'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING

        ]

    ]
];