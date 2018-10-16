<?php
include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

if (autenticar($email, $senha) == TRUE) {
    session_start();
    $_SESSION["usuario"] = $_POST['email'];
    
    header('Location: index.php');
} else {

    echo "<script>" .
    "alert('Usuário / Senha inválido !');" .
    "window.location = 'login.html'" .
    "</script>";
}