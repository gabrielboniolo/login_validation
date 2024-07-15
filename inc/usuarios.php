<?php
return [
    [
        "usuario" => "user@example.com",
        "senha"   => password_hash("123456", PASSWORD_DEFAULT)
    ],
    [
        "usuario" => "system@example.com",
        "senha"   => password_hash("456123", PASSWORD_DEFAULT)
    ],
    [
        "usuario" => "client@example.com",
        "senha"   => password_hash("112233", PASSWORD_DEFAULT)
    ]
];