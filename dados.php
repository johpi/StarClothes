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
        <title>StarClothes - loja</title>
        <link rel="stylesheet" type="text/css" href="css/base-dados.css">
        <link rel="stylesheet" type="text/css" href="css/tema-dados.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script type="text/javascript" src="js/modernizr-custom.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.arbitrary-anchor.js"></script> 
    </head>
    <body>
        <div id="tudo" class="">
            <header style="margin-top: 20px;margin-bottom: 10px;" class="container">
                <div id="menu">
                    <h1 id="logotipo" class="fleft">
    			<a href="index.php">
        			<span>	
            			logotipo
           			</span>    
    			</a>
                    </h1>
                    <nav>
                        <ul class="menu fleft w30" >
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
            <main class="container">
                <div class="tcenter">
                    <h1 style="color: #333;">Meus Dados</h1>
                    <hr style="border:none;width: 9.75rem;height:3px;background-color:#333;margin-top:1px;">
                </div>
                <div style="padding: 20px 0;">
                    <div class="fleft w16">
                        <div style="border: 2px solid rgba(34,36,38,.30); border-radius: 2%;">
                            <div style="border-bottom: 2px solid rgba(34,36,38,.30);margin: 0;">
                                <img src="imagens/female.png" height="185" width="100%" style="display: block;border-radius: inherit;"/>
                            </div>
                            <div class="tcenter" style="padding: 8px 0 ;">
                                <a style="color:rgba(0,0,0,.87); " href="">NOME</a>
                            </div>
                        </div>
                        <br>
                        <div style="">
                            <nav>
                                <ul class="drop1">
                                    <li style="background:rgba(0,0,0,.30)!important; "><a href="">Meus Dados<i class="fas fa-user "></i></a></li>
                                    <li><a href="medidas.php">Minhas Medidas<i class="fas fa-child "></i></a></li>
                                    <li><a href="">Carrinho<i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="pedido.php">Pedidos<i class="fas fa-truck "></i></a></li>
                                </ul>
                            </nav>
                            
                        </div>

                    </div>
                    <div id="dados" class="w70 fleft">
                        <h5>Perfil</h5>
                        <?php
                        $result = usuarios();
                        while ($registro = mysqli_fetch_array($result)) {
                            $nome = $registro['nome'];
                            $email = $registro['email'];
                            $cpf= $registro['cpf']; 
                        ?>
                        <form action="alterar.php">
                            Nome: <input type="text" name="nome" value="<?php echo $nome?>"/>
                            E-mail: <input type="hiden" name="email" value="<?php echo $email?>"/><br>
                            CPF: <input type="number" name="cpf" value="<?php echo $cpf?>"/>
                            Data de Nascimento: <input type="date" name="data" value=""/>
                            Telefone: <input type="number" name="tell" value="?>"/>
                            <input type="submit" value="SALVAR"/>  
                        </form>
                        <?php } ?>  
                    </div>
                </div>
                <div class="clearb"></div>  
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
