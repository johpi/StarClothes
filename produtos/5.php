<?php
include_once '../dao/_conexao.php';
include_once '../dao/usuario.php';

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
        <link rel="stylesheet" type="text/css" href="../css/base-loja.css">
        <link rel="stylesheet" type="text/css" href="../css/tema-loja.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script type="text/javascript" src="js/modernizr-custom.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.arbitrary-anchor.js"></script> 
        
        <!-- carrousel -->
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </head>
    <body style="color:#333;">
        <div id="tudo" class="">
            <header style="margin-top: 20px;margin-bottom: 10px;" class="container">
                <div id="menu">
                    <h1 id="logotipo" class="fleft">
    			<a href="../index.php">
        			<span>	
            			logotipo
           			</span>    
    			</a>
                    </h1>
                    <nav>
                        <ul class="menu fleft w30 " style="font-size: 16px;">
                            <li><a href="../loja.php">Loja</a></li>
                            <li><a href="##section1">Mídia</a></li>
                            <li><a href="../contato.php">Contato</a></li>
                        </ul>
                        <div id="autenticacao" class="fright w25">
                            <?php
                                if (isset($usuario)) {
                                    if ($usuario == "admin") {
                                        ?>
                                        <?php
                                    } else {
                                        echo '<ul class="drop tleft"><li><a class="tcenter">'.$usuario.'</a><ul>'
                                        .'<li style="border-bottom:0px;"><a href="../dados.php"><i class="fas fa-user"></i>Meus Dados</a></li>' .'<li style="border-bottom:0px;border-top:0px;"><a href="../medidas.php"><i class="fas fa-child"></i>Minhas Medidas</a></li>'
                                        .'<li style="border-bottom:0px;border-top:0px;"><a href="../pedido.php"><i class="fas fa-truck" style="margin-right:3px;"></i>Pedidos</a></li>' . '<li style="border-top:0px;"><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a></li></ul></li>';
                                    }
                                } else {
                                    echo '<a id="b1" class="" href="../login.html">Entrar</a>';
                                    echo '<a id="b2" class="" href="../register.html">Cadastrar</a>';      
                                }
                            ?>
                        </div>
                    </nav> 
                </div>
                <div class="clearb"></div>
            </header>
            <hr>
            <main style="padding: 5px 0;">
                <nav class="container" id="hist">
                    <ul>
                        <li><a href="../index.php">StarClothes</a></li> -
                        <li><a href="../loja.php">Loja</a></li> -
                        <li><a href=""><b>Roupas</b></a></li>
                    </ul>
                </nav>
                <div id="section1" class="container">
                        <div class="fleft w30">
                            <h2>Vestido Evasê Curto<br> Estampado - Off White</h2> 
                            <p>Cod: 0095-205-02</p>
                            <p style="margin: 20px 0;">No mood floral, o Vestido Evasê Curto Estampado dá estilo e movimento aos looks de meia estação. Confeccionado em poliéster, possui modelagem justa ao corpo e detalhe em botão ... <a href="">Ver mais.</a></p>
                            <p><b>PERMANEÇA CONECTADO</b></p>
                            <div id="sociais">   
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div id="animg" class="fleft w30" >
                            <a href="https://mariafilo.vteximg.com.br/arquivos/ids/209897-500-650/01030898_038_2-VESTIDO-RENDA-FIVELA-CROCHE.jpg?v=636683067046200000" target="_blank"><img class="" src="https://mariafilo.vteximg.com.br/arquivos/ids/209897-500-650/01030898_038_2-VESTIDO-RENDA-FIVELA-CROCHE.jpg?v=636683067046200000" width="auto" height="500"/></a>
                        </div>
                        <div class="fleft w30">
                            <h3>R$ 249,00</h3> 
                            <p>até 2x de R$ 124,50</p>
                            <p>Vendido e Enviado por StarClothes</p>
                            <br>
                            <p><b>Cor:</b>  Off White</p>
                            <br>
                            <p>
                                <form>
                                    <input type="radio" name="gender" value="preto">Preto
                                    <input type="radio" name="gender" value="azul">Azul
                                    <input type="radio" name="gender" value="vermelho">Vermelho
                                    <input type="radio" name="gender" value="cinza">Cinza
                                </form>
                            </p>
                            <br><br>
                            <form>
                                <input style="cursor: pointer; width: 100%; background: #333; color: #fff;" class="btn hover" type="button" name="" value="COMPRAR"/>
                            </form>
                        </div>
                </div>
                <div class="clearb"></div>
                <div class="container">
                    <hr>
                    <br>
                    <h2>Descrição</h2>
                    <p>No mood floral, o Vestido Evasê Curto Estampado dá estilo e movimento aos looks de meia estação. Confeccionado em poliéster, possui modelagem justa ao corpo e detalhe em botão metalizado no colo.</p>
                    <br>
                    <div class="fleft" style="margin: 0 12%;">
                        <b>Nome:</b> Vestido Evasê Curto Estampado<br>
                        <b>Gênero:</b> Feminino<br>
                        <b>Indicado para:</b> Dia a Dia<br>
                        <b>Ocasião:</b> Dia a Dia
                    </div>
                    <div style="margin: 0 12%;" class="fleft ">
                        <b>Estilo da Peça:</b> Estampada<br>
                        <b>Modelagem:</b> Evasê<br>
                        <b>Material:</b> Poliéster<br>
                        <b>Tipo:</b> Vestido Curto
                    </div>
                    <div class="clearb"></div><br>
                    <hr>
                </div>                                                             
                    <div class="clearb"></div>
                    
                    <div class="container">
                        <h2>Sugerimos Também</h2>
                        <br>
                        <div class="row">
                            <div class="span12">
                                <div class="well" style="border:none!important;background:#fff!important; box-shadow: none!important;">
                                    <div id="myCarousel" class="carousel slide">

                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                        </ol>

                                            <!-- Carousel items -->
                                        <div class="carousel-inner">

                                        <div class="item active">
                                                <div class="row-fluid">
                                                   <div class="span3"><a href="../produtos/2.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/213129-500-650/04040815_019_1-SHORT-FLORAL-PLUMA.jpg?v=636734733157470000" alt="Image" style="max-width:100%;" /></a></div>
                                                  <div class="span3"><a href="../produtos/3.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/211879-500-650/04061822_019_2-VESTIDO-MIDI-JATOBA.jpg?v=636715629161170000" alt="Image" style="max-width:100%;" /></a></div>
                                                  <div class="span3"><a href="../produtos/4.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/212209-500-650/04013048_019_2-BLUSA-MANGA-TRIGUEIRO.jpg?v=636718539106730000" alt="Image" style="max-width:100%;" /></a></div>
                                                  <div class="span3"><a href="../produtos/1.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/211083-500-650/04013166_064_1-BLUSA-ALCA-DECOTE-PREGAS.jpg?v=636693195065330000" alt="Image" style="max-width:100%;" /></a></div>
                                                </div><!--/row-fluid-->
                                        </div><!--/item-->

                                        <div class="item">
                                                <div class="row-fluid">
                                                        <div class="span3"><a href="../produtos/6.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/212139-500-650/04013071_010_2-BLUSA-BORDADO-FLORAL-NEBLINA.jpg?v=636716760110930000" alt="Image" style="max-width:100%;" /></a></div>
                                                        <div class="span3"><a href="../produtos/7.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/210409-500-650/02060891_038_1-VESTIDO-CURTO-DECOTE-FESTONE.jpg?v=636691500041030000" alt="Image" style="max-width:100%;" /></a></div>
                                                        <div class="span3"><a href="../produtos/8.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/193634-500-650/04040798_019_2-SHORT-BOCAS.jpg?v=636548123643500000" alt="Image" style="max-width:100%;" /></a></div>
                                                        <div class="span3"><a href="../produtos/9.php" class="thumbnail"><img src="https://mariafilo.vteximg.com.br/arquivos/ids/209476-500-650/04040833_064_1-SHORT-FAIXA-AMARRACAO.jpg?v=636682126231330000" alt="Image" style="max-width:100%;" /></a></div>
                                                </div><!--/row-fluid-->
                                        </div><!--/item-->

                                        </div><!--/carousel-inner-->

                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                                    </div><!--/myCarousel-->

                                </div><!--/well-->   
                            </div>
                       </div>
                    </div>         
      
                
            </main>
            
            <footer style="">
                <div class="tcenter" style="color:#7F7F7F; padding:10px;">
                    <nav>
                        <ul class="menu" style="width: 100%;font-size: 13px;">
                            © 2018 Uninove
                            |<li><a href="../contato.php">Contato</a></li>|
                            <li><a href="../banner">Loja</a></li>|
                            <li><a href="##section1">Mídia</a></li>
                        </ul>
                </div>
            </footer>
        </div>
        
    </body>
</html>
