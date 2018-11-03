<?php
include_once './dao/_conexao.php';
include_once './dao/usuario.php';

session_start();
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : null;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content=""> 
        <meta name="keywords" content=""> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>StarClothes - loja</title>
        <link rel="stylesheet" type="text/css" href="css/base-loja.css">
        <link rel="stylesheet" type="text/css" href="css/tema-loja.css">
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
            <main style="padding: 0 0;">
                <div id="filtro">
                    <nav class="container">
                        <ul class="menu" style="width: 100%;">
                            <li class="w30 tcenter"><a href="">PREÇO</a>
                                <ul>
                                    
                                </ul>
                            </li>
                            <li class="w30 tcenter"><a href="">CATEGORIA</a>
                                <ul>
                                    
                                </ul>
                            </li>
                            <li class="w30 tcenter"><a href="">COR</a>
                                <ul>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav> 
                </div>
                <nav class="container" id="hist">
                    <ul>
                        <li><a href="index.php">StarClothes</a></li> -
                        <li><a href="loja.php"><b>Loja</b></a></li>
                    </ul>
                </nav>
                <div id="section1" class="container">
                    <div class="w30 fleft box">
                        <a href="produtos/1.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/211083-500-650/04013166_064_1-BLUSA-ALCA-DECOTE-PREGAS.jpg?v=636693195065330000"  /></a>
                        <div>
                            <a href="">Blusa Alça Decote Pregas <span class="fright span">R$ 249,00</span></a>
                            <a href="" class="fright" style="font-size: 80%; clear: both;">2x de R$ 124,50</a>
                        </div>
                    </div>
                    <div class="w30 fleft box mm" >
                        <a href="produtos/2.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/213129-500-650/04040815_019_1-SHORT-FLORAL-PLUMA.jpg?v=636734733157470000" height="" width=""/></a>
                        <div>
                            <a href="produtos/2.php">Short Floral Pluma <span class="fright span">R$ 299,00</span></a>
                            <a href="" class="fright" style="font-size: 80%; clear: both;">2x de R$ 149,50</a>
                        </div>
                    </div>
                    <div class="w30 fleft box">
                        <a href="produtos/3.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/211879-500-650/04061822_019_2-VESTIDO-MIDI-JATOBA.jpg?v=636715629161170000"/></a>
                        <div>
                            <a href="produtos/3.php">Vestido Midi Jatobá <span class="fright span">R$ 499,00</span></a>
                            <a href="produtos/3.php" class="fright" style="font-size: 80%; clear: both;">4x de R$ 124,75</a>
                        </div>
                    </div>
                    <div class="clearb"></div>
                    
                    
                    <br><br>
                    
                    
                    <div class="w30 fleft box">
                        <a href="produtos/4.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/212209-500-650/04013048_019_2-BLUSA-MANGA-TRIGUEIRO.jpg?v=636718539106730000"  /></a>
                        <div>
                            <a href="produtos/4.php">Blusa Manga Trigueiro <span class="fright span">R$ 299,00</span></a>
                            <a href="produtos/4.php" class="fright" style="font-size: 80%; clear: both;">2x de R$ 149,50</a>
                        </div>
                    </div>
                    <div class="w30 fleft box mm" >
                        <a href="produtos/5.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/209897-500-650/01030898_038_2-VESTIDO-RENDA-FIVELA-CROCHE.jpg?v=636683067046200000" /></a>
                        <div>
                            <a href="produtos/5.php">Vestido Renda Fivela Crochê <span class="fright span">R$ 599,00</span></a>
                            <a href="produtos/5.php" class="fright" style="font-size: 80%; clear: both;">5x de R$ 119,90</a>
                        </div>
                    </div>
                    <div class="w30 fleft box">
                        <a href="produtos/6.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/212139-500-650/04013071_010_2-BLUSA-BORDADO-FLORAL-NEBLINA.jpg?v=636716760110930000"/></a>
                        <div>
                            <a href="produtos/6.php">Blusa Bordado Floral Neblina <span class="fright span">R$ 379,00</span></a>
                            <a href="produtos/6.php" class="fright" style="font-size: 80%; clear: both;">3x de R$ 126,33</a>
                        </div>
                    </div>
                    <div class="clearb"></div>
                    
                    
                    <br><br>
                    
                    
                    <div class="w30 fleft box">
                        <a href="produtos/7.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/210409-500-650/02060891_038_1-VESTIDO-CURTO-DECOTE-FESTONE.jpg?v=636691500041030000"  /></a>
                        <div>
                            <a href="produtos/7.php">Vestido Curto Decote Festonê<span class="fright span">R$ 279,00</span></a>
                            <a href="produtos/7.php" class="fright" style="font-size: 80%; clear: both;">2x de R$ 139,50</a>
                        </div>
                    </div>
                    <div class="w30 fleft box mm">
                        <a href="produtos/8.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/193634-500-650/04040798_019_2-SHORT-BOCAS.jpg?v=636548123643500000" /></a>
                        <div>
                            <a href="produtos/8.php">Short Bocas <span class="fright span">R$ 140,00</span></a>
                            <a href="produtos/8.php" class="fright" style="font-size: 80%; clear: both;">2x de R$ 70,00</a>
                            
                        </div>
                    </div>
                    <div class="w30 fleft box">
                        <a href="produtos/9.php"><img class="img" src="https://mariafilo.vteximg.com.br/arquivos/ids/209476-500-650/04040833_064_1-SHORT-FAIXA-AMARRACAO.jpg?v=636682126231330000"/></a>
                        <div>
                            <a href="produtos/9.php">Short Faixa Amarração <span class="fright span">R$ 279,00</span></a>
                            <a href="produtos/9.php" class="fright" style="font-size: 80%; clear: both;">2x de R$ 139,50</a>
                        </div>
                    </div>
                    <div class="clearb"></div>
                </div>
                
            </main>
            
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
