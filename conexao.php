<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $basededados = "conexao";

    try {
        $conexao = mysqli_connect($servidor, $usuario, $senha, $basededados);
    }

    catch(mysqli_sql_exception) {
        echo "Ocorreu um erro ao tentar conectar a base de dados";
    }

    
?>