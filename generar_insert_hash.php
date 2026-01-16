<?php
$usuarios = [
    ['user'=>'admin','pass'=>'admin123']
];

foreach ($usuarios as $u) {
    echo "INSERT INTO usuarios (idusuario,password) VALUES ('{$u['user']}','"
    . password_hash($u['pass'], PASSWORD_DEFAULT) . "');<br>";
}