<?php

function autenticar($email, $senha) {
    $sql = "select * from cliente "
            . "where email='" . $email . "'"
            . " and senha = '" .$senha . "'";

    $conn = conectar();

    $result = mysqli_query($conn, $sql);

    desconectar($conn);

    return mysqli_num_rows($result) ;
}


function usuarios() {
    
    $sql = "select * from cliente where email = '". $_SESSION["usuario"] ."'";
       
    $conn = conectar();
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    desconectar($conn);

    return $result;
}

function medidas($id) {
    
    
    $sql = "select * from medidas where cod_cliente = '$id'";
       
    $conn = conectar();
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    desconectar($conn);

    return $result;
}
function endereco($id) {
    
    
    $sql = "select * from endereco where cod_cliente = '$id'";
       
    $conn = conectar();
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    desconectar($conn);

    return $result;
}
function carrinho($id) {
    
    
    $sql = "select * from carrinho where cod_cliente = '$id'";
       
    $conn = conectar();
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    desconectar($conn);

    return $result;
}


















