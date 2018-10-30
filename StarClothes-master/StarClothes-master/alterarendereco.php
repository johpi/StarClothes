<?php 
include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$id=$_POST['id'];   
$nome_destinatario = $_POST['nome_destinatario'];
$rua = $_POST['rua'];
$cep= $_POST['cep']; 
$numero= $_POST['numero']; 
$complemento= $_POST['complemento']; 
$bairro = $_POST['bairro']; 
$estado = $_POST['estado']; 
$cidade= $_POST['cidade']; 


$sql = "UPDATE `endereco` SET `nome_destinatario`= '$nome_destinatario',`rua`='$rua',`cep`='$cep',`numero`='$numero',`complemento`='$complemento',`bairro`='$bairro',`estado`='$estado',`cidade`='$cidade' WHERE cod_cliente = '$id'";
$conn = conectar();
$result = mysqli_query($conn, $sql);
desconectar($conn);
?>
<html>
    <head></head>
    <body>
<script language="JavaScript"> 
window.location="endereco.php"; 
</script> 
    </body>
</html>




