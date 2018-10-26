<?php 
include_once './dao/_conexao.php';
include_once './dao/usuario.php';


$id=$_POST['id'];                                  
$altura_seio = $_POST['altura_seio'];
$comp_braco = $_POST['comp_braco'];
$circun_busto = $_POST['circun_busto']; 
$comp_costas = $_POST['comp_costas']; 
$comp_seio_cintura = $_POST['comp_seio_cintura']; 
$circun_cintura = $_POST['circun_cintura']; 
$dist_cintura_quadril = $_POST['dist_cintura_quadril']; 
$dist_quadril_joelho = $_POST['dist_quadril_joelho']; 
$altura_busto = $_POST['altura_busto']; 
$altura_quadril = $_POST['altura_quadril']; 
$abertura_boca_calca = $_POST['abertura_boca_calca']; 
$busto = $_POST['busto']; 
$comp_corpo = $_POST['comp_corpo']; 
$cintura = $_POST['cintura']; 
$comp_pernas = $_POST['comp_pernas']; 
$costas = $_POST['costas']; 
$circun_joelho= $_POST['circun_joelho']; 
$ombro= $_POST['ombro']; 
$pescoco= $_POST['pescoco']; 
$comp_manga_longa= $_POST['comp_manga_longa']; 
$altura_joelho= $_POST['altura_joelho']; 


$sql = "UPDATE `medidas` SET `altura_seio`='$altura_seio',`comp_braco`='$comp_braco',`circun_busto`='$circun_busto',`comp_costas`='$comp_costas',`comp_seio_cintura`='$comp_seio_cintura',`circun_cintura`='$circun_cintura',"
        . "`dist_cintura_quadril`='$dist_cintura_quadril',`dist_quadril_joelho`=$dist_quadril_joelho,`altura_busto`='$altura_busto',`altura_joelho`='$altura_joelho',`altura_quadril`='$altura_quadril',`abertura_boca_calca`='$abertura_boca_calca',"
        . "`busto`='$busto',`comp_corpo`='$comp_corpo',`cintura`='$cintura',`comp_pernas`='$comp_pernas',`costas`='$costas',`circun_joelho`='$circun_joelho',`ombro`='$ombro',`pescoco`=$pescoco,`comp_manga_longa`='$comp_manga_longa' WHERE cod_cliente = '$id'";

$conn = conectar();
$result = mysqli_query($conn, $sql);
desconectar($conn);
?>
<html>
    <head></head>
    <body>
<script language="JavaScript"> 
window.location="medidas.php"; 
</script> 
    </body>
</html>




