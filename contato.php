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
        <title>StarClothes - Contato</title>
        <link rel="stylesheet" type="text/css" href="css/base-cont.css">
        <link rel="stylesheet" type="text/css" href="css/tema-cont.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script type="text/javascript" src="js/modernizr-custom.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.arbitrary-anchor.js"></script> 
    </head>
    <body style="">
        <div id="tudo" class="">
            <header style="margin-top: 20px;margin-bottom: 20px;" class="container">
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
            <main style="background:#f5f5f5; padding: 20px;">
                <section id="section1">
            	<div class="container">
                    <article class="tcenter">
                        <h2>Fale Conosco </h2>
                        <p>Preencha o formulário com os seus dados e informe o seu assunto.
                        </p>
                    </article>       
                    <div>
                        <div class="fleft w60">
                            <form class="tcenter" method="post" action="php/contato.php" enctype="application/x-www-form-urlencoded"> 
                                <div>
                                    <label>Nome:</label>
                                    <input type="text" required placeholder="Digite seu nome" maxlength="30" name="nome" style="margin-left:20px;">
                                </div>
                                <div>
                                    <label>E-mail:</label>
                                    <input type="email" required placeholder="Digite seu e-mail" maxlength="50" name="email" style="margin-left:19px;">
                                </div>
                                <div>
                                    <label>Telefone:</label>
                                    <input type="number" required placeholder="Digite seu telefone" min="8" max="15" name="tell">
                                </div>
                                <div>
                                    <label>Assunto:</label>
                                    <input type="text" required placeholder="Digite o assunto" maxlength="20" name="assunto">
                                </div>
                                <div>           	
                                	<textarea class="tcenter" required placeholder="Digite aqui seu texto" name="comentario" rows="13" cols="28"></textarea>
                                </div>
                                <div class="tcenter"><br>
                                    <input type="submit" class="btn backcolor-2 btncell" value="Enviar" style="cursor: pointer;transition:background 0.6s linear;">
                                </div>
                            </form>                 
                        </div>  
                        <div class="w35 fright" style="background: ">
                        	<h3 class="tcenter">informações</h3>
                            <p>
                            	Tel: (11) xxxx-xxxx<br>
                                Email: contato@roupas.com.br<br>
                                Endereço: R. Amador Bueno, 389/491 - Santo Amaro, São Paulo - SP
                            </p><br>
                            <h3 class="tcenter">Mapa</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.638224186395!2d-46.71383048502041!3d-23.653123784637355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce51aaf11432ad%3A0x4578b756c7a1a2e7!2sUniversidade+Nove+de+Julho%2C+Unidade+Santo+Amaro!5e0!3m2!1spt-BR!2sbr!4v1491669924959" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>           
                     </div>
                 </div>
                 <div class="clearb"></div>        	
            </section>
                
            </main>
            
            <footer style="">
                <div class="tcenter" style="color:#7F7F7F; padding:10px;">
                    <nav>
                        <ul class="menu" style="width: 100%;font-size: 13px;">
                            © 2018 Uninove
                            |<li><a href="#">Contato</a></li>|
                            <li><a href="loja.php">Loja</a></li>|
                            <li><a href="##section1">Mídia</a></li>
                        </ul>
                </div>
            </footer>
        </div>
        
    </body>
</html>
