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
        <link rel="stylesheet" type="text/css" href="css/base-medidas.css">
        <link rel="stylesheet" type="text/css" href="css/tema-medidas.css">
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
                                <?php
                                    $result = usuarios();
                                    while ($registro = mysqli_fetch_array($result)) {
                                        $nome = $registro['nome'];
                                ?>
                                <a style="color:rgba(0,0,0,.87); " href=""><?php echo $nome?></a>
                                <?php }?>
                            </div>
                        </div>
                        <br>
                        <div style="">
                            <nav>
                                <ul class="drop1">
                                    <li><a href="dados.php">Meus Dados<i class="fas fa-user "></i></a></li>
                                    <li style="background:rgba(0,0,0,.30)!important; "><a href="">Minhas Medidas<i class="fas fa-child "></i></a></li>
                                    <li><a href="">Carrinho<i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="endereco.php">Endereço<i class="fas fa-truck "></i></a></li>
                                </ul>
                            </nav>
                            
                        </div>

                    </div>
                    <div id="medidaa" class="w70 fleft" style="font-size: 12px;">
                        <h6>Medidas</h6>
                        <?php
                        $result = usuarios();
                        while ($registro = mysqli_fetch_array($result)) {
                           $id=$registro['cod_cliente'] 
                        ?>
                        
                        
                        <?php
                        $result = medidas($id);
                        while ($registro = mysqli_fetch_array($result)) {
                            $altura_seio = $registro['altura_seio'];
                            $comp_braco = $registro['comp_braco'];
                            $circun_busto = $registro['circun_busto']; 
                            $comp_costas = $registro['comp_costas']; 
                            $comp_seio_cintura = $registro['comp_seio_cintura']; 
                            $circun_cintura = $registro['circun_cintura']; 
                            $dist_cintura_quadril = $registro['dist_cintura_quadril']; 
                            $dist_quadril_joelho = $registro['dist_quadril_joelho']; 
                            $altura_busto = $registro['altura_busto']; 
                            $altura_quadril = $registro['altura_quadril']; 
                            $abertura_boca_calca = $registro['abertura_boca_calca']; 
                            $busto = $registro['busto']; 
                            $comp_corpo = $registro['comp_corpo']; 
                            $cintura = $registro['cintura']; 
                            $comp_pernas = $registro['comp_pernas']; 
                            $costas = $registro['costas']; 
                            $circun_joelho= $registro['circun_joelho']; 
                            $ombro= $registro['ombro']; 
                            $pescoco= $registro['pescoco']; 
                            $comp_manga_longa= $registro['comp_manga_longa']; 
                            $cod_cliente= $registro['cod_cliente']; 
                            $altura_joelho= $registro['altura_joelho']; 
                            
                            
                        ?>
                        <form method="post" action="alterarmedidas.php" >
                            <div style="padding: 0 10px;">    
                                <div>
                                    <div class="w30 fleft "><b>Altura do seio</b> <br><input class="input w80 ww" type="number" name="altura_seio" value="<?php echo $altura_seio?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft minput"><b>Comprimento braço</b> <br><input class="input w80 ww" type="number" name="comp_braco" value="<?php echo $comp_braco?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft "><b>Circunferência do busto</b> <br><input class="input w80 ww" type="number" name="circun_busto" value="<?php echo $circun_busto?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <br><br><br><br>
                                </div>
                                <div>
                                    <div class="w30 fleft "><b>Compr. costas</b> <br><input class="input w80 ww" type="number" name="comp_costas" value="<?php echo $comp_costas?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft minput"><b>Comprimento do seio até a cintura</b> <br><input class="input w80 ww" type="number" name="comp_seio_cintura" value="<?php echo $comp_seio_cintura?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft "><b>Circunferência da cintura</b> <br><input class="input w80 ww" type="number" name="circun_cintura" value="<?php echo $circun_cintura?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <br><br><br><br>
                                </div>
                                <div>
                                    <div class="w30 fleft "><b>Distância da cintura até o quadril</b> <br><input class="input w80 ww" type="number" name="dist_cintura_quadril" value="<?php echo $dist_cintura_quadril?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft minput"><b>Dist. do quadril até a dobra do joelho</b> <br><input class="input w80 ww" type="number" name="dist_quadril_joelho" value="<?php echo $dist_quadril_joelho?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft "><b>Altura do busto</b> <br><input class="input w80 ww" type="number" name="altura_busto" value="<?php echo $altura_busto?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <br><br><br><br>
                                </div>
                                <div>
                                    <div class="w30 fleft "><b>Altura do joelho</b> <br><input class="input w80 ww" type="number" name="altura_joelho" value="<?php echo $altura_joelho?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft minput"><b>Altura do quadril</b> <br><input class="input w80 ww" type="number" name="altura_quadril" value="<?php echo $altura_quadril?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft "><b>Abertura da boca da calça</b> <br><input class="input w80 ww" type="number" name="abertura_boca_calca" value="<?php echo $abertura_boca_calca?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <br><br><br><br>
                                </div>
                                <div>
                                    <div class="w30 fleft "><b>Busto</b> <br><input class="input w80 ww" type="number" name="busto" value="<?php echo $busto?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft minput"><b>Comprimento do corpo</b> <br><input class="input w80 ww" type="number" name="comp_corpo" value="<?php echo $comp_corpo?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft "><b>Cintura</b> <br><input class="input w80 ww" type="number" name="cintura" value="<?php echo $cintura?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <br><br><br><br>
                                </div>
                                <div>
                                    <div class="w30 fleft "><b>Comprimento pernas</b> <br><input class="input w80 ww" type="number" name="comp_pernas" value="<?php echo $comp_pernas?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft minput"><b>Costas</b> <br><input class="input w80 ww" type="number" name="costas" value="<?php echo $costas?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft "><b>Circunferência do joelho</b> <br><input class="input w80 ww" type="number" name="circun_joelho" value="<?php echo $circun_joelho?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <br><br><br><br>
                                </div>
                                <div>
                                    <div class="w30 fleft "><b>Comprimento manga longa</b> <br><input class="input w80 ww" type="number" name="comp_manga_longa" value="<?php echo $comp_manga_longa?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft minput"><b>Ombro</b> <br><input class="input w80 ww" type="number" name="ombro" value="<?php echo $ombro?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <div class="w30 fleft "><b>Pescoço</b> <br><input class="input w80 ww" type="number" name="pescoco" value="<?php echo $pescoco?>" onkeyup="if(this.value.length>3){this.value=this.value.substring(0,3);alert('tamanho maximo encontrado ');}"/></div>
                                    <input style="display:none;" name="id" value="<?php echo $id?>"/>
                                    <br><br><br><br>
                                    <div class="fleft"><br><input class="b1" type="submit" value="SALVAR"/></div> 
                                </div>
                                <div class="clearb"></div>
                            </div>
                        </form>
                        <?php } ?> 
                        <?php }?>
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
