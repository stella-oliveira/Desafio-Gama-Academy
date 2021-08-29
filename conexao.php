<?php

    $servidor = env('DB_HOST', 'remotemysql.com');
    $usuario = env('DB_USERNAME', 'VeBMhNuNpU'),
    $senha = env('DB_PASSWORD', 'A4azChwX0M'),
    $database = env('DB_DATABASE', 'VeBMhNuNpU');
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if(!$conexao){
        print "Falha na conexão!";
    }

?>