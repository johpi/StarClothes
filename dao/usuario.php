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

/*
function usuarios() {
    
    $sql = "select * from exame where cod_paciente in (select cod_paciente from paciente where login = '". $_SESSION["usuario"] ."')";
       
    $conn = conectar();
    
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    desconectar($conn);

    return $result;
}




*/













