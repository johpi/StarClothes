<?php 
include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$tell = $_POST['tell'];
$nasc = $_POST['nasc'];



$sql = "UPDATE cliente SET nome ='$nome', cpf ='$cpf', tell ='$tell', nasc ='$nasc' where email = '$email'";
$conn = conectar();
$result = mysqli_query($conn, $sql);
desconectar($conn);
?>
<html>
    <head></head>
    <body>
<script language="JavaScript"> 
window.location="dados.php"; 
</script> 
    </body>
</html>




