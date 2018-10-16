
<?php
include_once './dao/_conexao.php';
include_once './dao/usuario.php';

session_start();
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : null;
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content=""> 
        <meta name="keywords" content=""> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>StarClothes</title>
        <link rel="stylesheet" type="text/css" href="css/base-ind.css">
        <link rel="stylesheet" type="text/css" href="css/tema-ind.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script type="text/javascript" src="js/modernizr-custom.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.arbitrary-anchor.js"></script> 
        <script>
            alert("Esse site foi realizado com fins acadêmico e não comercial!!");
        </script>
    </head>
    <body>
        <div id="tudo" class="container">
            <header style="margin-top: 20px;margin-bottom: 10px;">
                <div id="menu">
                    <h1 id="logotipo" class="fleft">
    			<a href="index.php">
        			<span>	
            			logotipo
           			</span>    
    			</a>
                    </h1>
                    <nav>
                        <ul class="menu fleft w30 ">
                            <li><a href="loja.php">Loja</a></li>
                            <li><a href="##section1">Mídia</a></li>
                            <li><a href="contato.php">Contato</a></li>
                        </ul>
                        <div id="autenticacao" class="fright w25">
                            <?php
                                if (isset($usuario)) {
                                    if ($usuario == "admin") {
                                        ?>
                                        <?php
                                    } else {
                                        echo '<ul class="drop tleft"><li><a class="tcenter">'.$usuario.'</a><ul>'
                                        .'<li style="border-bottom:0px;"><a href="dados.php"><i class="fas fa-user"></i>Meus Dados</a></li>' .'<li style="border-bottom:0px;border-top:0px;"><a href="medidas.php"><i class="fas fa-child"></i>Minhas Medidas</a></li>'
                                        .'<li style="border-bottom:0px;border-top:0px;"><a href="pedido.php"><i class="fas fa-truck" style="margin-right:3px;"></i>Pedidos</a></li>' . '<li style="border-top:0px;"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li></ul></li>';
                                    }
                                } else {
                                    echo '<a id="b1" class="" href="login.html">Entrar</a>';
                                    echo '<a id="b2" class="" href="register.html">Cadastrar</a>';      
                                }
                            ?>
                        </div>
                    </nav> 
                </div>
                <div class="clearb"></div>
            </header>
            <main style="padding: 60px 0;">
                <div id="section1">
                    <div class="w50 fleft">
                        <h1 style="font-size: 2 rem;">Roupas<br> sob medida para você</h1>
                        <hr style="border:none;width: 10.75rem;height:3px;background-color:#ff851b;margin-top:1.375rem;">
                        <h2 style="color: #354858; line-height: 1.5;font-weight: initial">Nós acreditamos que você não tem que se encaixar nas roupas, você merece roupas que sirvam perfeitamente em você.</h2>
                    </div>
                    <div class="w50 fright">
                        <img src="imagens/home.jpg" height="100%" width="100%" >
                    </div>
                    <div class="clearb"></div>
                </div>
                
            </main>
            
            <footer style="position: absolute; left: 41%; bottom: 0%;" class="rodapem">
                <div class="tcenter" style="color:#7F7F7F; padding:10px;">
                    <nav>
                        <ul class="menu" style="width: 100%;font-size: 13px;">
                            © 2018 Uninove
                            |<li><a href="contato.php">Contato</a></li>|
                            <li><a href="loja.php">Loja</a></li>|
                            <li><a href="##section1">Mídia</a></li>
                        </ul>
                </div>
            </footer>
        </div>
        
    </body>
</html>
