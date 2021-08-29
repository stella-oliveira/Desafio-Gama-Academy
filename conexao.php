<?php

    // Conexão local
//    $servidor = "localhost";
//    $usuario = "root";
//    $senha = "";
//    $database = "desafiogama";
//    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    // Conexão remota
    $servidor = 'remotemysql.com';
    $usuario = 'VeBMhNuNpU';
    $senha = 'A4azChwX0M';
    $database = 'VeBMhNuNpU';
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if(!$conexao){
        print "Falha na conexão!";
    }

?>