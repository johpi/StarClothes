<?php 
include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$sql = "INSERT INTO cliente (nome,email,cpf,senha) VALUES ('$nome','$email','$cpf','$senha')";
$conn = conectar();
$result = mysqli_query($conn, $sql);
desconectar($conn);
?>
<html>
    <head></head>
    <body>
<script language="JavaScript"> 
window.location="login.html"; 
</script> 
    </body>
</html>




