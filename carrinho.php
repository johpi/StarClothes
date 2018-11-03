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
        <link rel="stylesheet" type="text/css" href="css/base_carrinho.css">
        <link rel="stylesheet" type="text/css" href="css/tema_carrinho.css">
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
                    
                        <div id="autenticacao" class="fright w25">
                            <?php
                                if (isset($usuario)) {
                                    if ($usuario == "admin") {
                                        ?>
                                        <?php
                                    } else {
                                        echo '<ul class="drop tleft"><li><a class="tcenter">'.$usuario.'</a><ul>'
                                        .'<li style="border-bottom:0px;"><a href="dados.php"><i class="fas fa-user"></i>Meus Dados</a></li>' .'<li style="border-bottom:0px;border-top:0px;"><a href="medidas.php"><i class="fas fa-child"></i>Minhas Medidas</a></li>'
                                        .'<li style="border-bottom:0px;border-top:0px;"><a href="endereco.php"><i class="fas fa-truck" style="margin-right:3px;"></i>Endereço</a></li>' . '<li style="border-top:0px;"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li></ul></li>';
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
            <div style="background:#f5f5f5;">
            <main class="container1" style="padding: 20px 0;">
                <h5 id="sacolaa" class="tcenter">minha sacola</h5>
                <table style="width: 100%;">
                    <tr>
                        <th>PRODUTO</th>
                        <th></th>
                        <th>PREÇO</th> 
                        <th>QUANTIDADE</th>
                        <th>TOTAL</th>
                    </tr>
                
                    <tr style="background: #fff;">
                        <td>
                            <a target="_blank" href="../produtos/1.php">
                                <img class="" src="https://mariafilo.vteximg.com.br/arquivos/ids/211083-500-650/04013166_064_1-BLUSA-ALCA-DECOTE-PREGAS.jpg?v=636693195065330000" width="auto" height="130"/>
                            </a>
                        </td>
                        
                        <td></td>
                        <td>asdas</td>
                        <td>asdsadsa</td>
                        <td>50</td>
                    </tr>
                    
                </table>

                
            </main>
            </div>
            <footer style="">
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
