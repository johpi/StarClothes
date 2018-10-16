<?php

function conectar() {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "roupas";
    $conn = mysqli_connect($servidor, $usuario, $senha, $db);
    if (!$conn) {
        die("Falha ao conectar com o servidor: "
                . mysqli_connect_error()
        );
    }
    return $conn;
}

function desconectar($link) {
    mysqli_close($link);
}
