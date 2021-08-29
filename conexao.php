<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "desafiogama";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if(!$conexao){
        print "Falha na conexão!";
    }

?>