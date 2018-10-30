<?php 
include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$sql = "INSERT INTO cliente (nome,email,cpf,senha) VALUES ('$nome','$email','$cpf','$senha')";

$sql2 = "INSERT INTO `medidas` (`cod_cliente`) VALUES (LAST_INSERT_ID());";

$sql3 = "INSERT INTO `endereco` (`cod_cliente`) VALUES (LAST_INSERT_ID());";

$conn = conectar();
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
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




