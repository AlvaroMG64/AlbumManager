<?php
$usuarios = [
    [
        'idusuario' => 'Alvaro_MG64',
        'password'  => 'Uruguasho3*',
        'nombre'    => 'ALVARO',
        'apellidos' => 'MOZO GASPAR'
    ],
    [
        'idusuario' => 'Zazza_I5',
        'password'  => 'Abduzcan7#',
        'nombre'    => 'FEDERICO',
        'apellidos' => 'ZOMPICCHIATTI'
    ]
];

foreach ($usuarios as $u) {
    echo "INSERT INTO usuarios (idusuario,password,nombre,apellidos,admitido) VALUES (";
    echo "'{$u['idusuario']}',";
    echo "'" . password_hash($u['password'], PASSWORD_DEFAULT) . "',";
    echo "'{$u['nombre']}','{$u['apellidos']}',1";
    echo ");<br>";
}