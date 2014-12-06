<!DOCTYPE html>
<!-- Copyright 2014 de Participa Mulher / Autores: Gabriel Pita, Luciano Quintão e Ludmille Diniz Este arquivo é parte do programa Participa Mulher. 
O Participa Mulher é um software livre; você pode redistribuí-lo e/ou modificá-lo dentro dos termos da 
[GNU General Public License OU GNU Affero General Public License] como publicada pela Fundação do Software Livre (FSF); 
na versão 3 da Licença. Este programa é distribuído na esperança que possa ser útil, mas SEM NENHUMA GARANTIA; 
sem uma garantia implícita de ADEQUAÇÃO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a licença para maiores detalhes. 
Você deve ter recebido uma cópia da [GNU General Public License OU GNU Affero General Public License], sob o título "LICENCA.txt",
junto com este programa, se não, acesse: http://participamulher.org/LICENCA.txt -->

<html lang="pt-br" class="no-js">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Participa Mulher</title>
    <meta content="Site de integração entre as politicas púvblicas e orçamento da união" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <link href="assets/images/favicon.ico" rel="shortcut icon"/> 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png" />    
    <!-- JS FILES -->
    <script type="text/javascript" src="assets/js/jquery-1.20.2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mobile.custom.min.js"></script>
    <script type="text/javascript" src="assets/js/geo.js"></script>

    <!-- CSS FILES -->
    <link href="assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css" >
    <link href="assets/css/navstylechange.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/flexslider.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/cubeportfolio.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery.bxslider.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css">
    
    <!-- LIB FILES -->
    <?php require_once('assets/php/lib/parsecsv.lib.php'); ?>

    <!-- FUNCTIONS -->
    <?php require_once('assets/php/lib/functions.php'); 
        //require_once('assets/php/geo.php');
    ?>

    <!-- SCRIPTS -->
    <script type="text/javascript">
        jQuery(document).ready(function() {                                             
            $('#myCarousel').carousel({
                pause: true,
                interval: false
            });

            $("#myCarousel").swiperight(function() {  
              $("#myCarousel").carousel('prev');  
            });

           $("#myCarousel").swipeleft(function() {  
              $("#myCarousel").carousel('next');  
           });

           $("#revslider-732").swipeleft(function() {  
              $("#revslider-732").carousel('next');  
           });

           $("#revslider-732").swiperight(function() {  
              $("#revslider-732").carousel('prev');  
           });   

            
        }); //ready
    </script>

    <!-- CARROUSEL -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body class="loading">
    <div id="wrapper">
        <div class="tp-banner-container home" style="height:1000px;" id="1">
            <div class="tp-banner">
                <ul style="display:none;">
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                        <img src="assets/images/banner-homepage.jpg"   alt="Primeiro Banner Página Inicial"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <div class="tp-caption mediumbutton lft"
                            data-x="center"
                            data-y="340"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1600"
                            data-easing="Back.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            data-captionhidden="on"
                            style="z-index: 4"><a href="#" class="service-link">Comece Agora!</a>
                        </div>
                   </li>
                    <li data-transition="random" data-slotamount="5" data-masterspeed="700" >
                        <img src="assets/images/banner-homepage-2.jpg"   alt="Segundo Banner Página Inicial"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                        <div class="tp-caption bglargewhite sft"
                            data-x="center"
                            data-y="100"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="800"
                            data-easing="Back.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            data-captionhidden="on"
                            style="z-index: 4">Acesse e <span>Participe</span>
                        </div>
                        <div class="tp-caption bgmediumwhite sfb"
                            data-x="center"
                            data-y="210"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1200"
                            data-easing="Back.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            data-captionhidden="on"
                            style="z-index: 4">Conheça seus direitos e exerça sua cidadania
                        </div>
                        <div class="tp-caption mediumbutton lft"
                            data-x="center"
                            data-y="320"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="500"
                            data-start="1600"
                            data-easing="Back.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            data-captionhidden="on"
                            style="z-index: 4"><a href="#" class="service-link">PARTICIPE!</a>
                        </div>
                   </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
                <script type="text/javascript">
                var revapi;
                jQuery(document).ready(function() {
                      revapi = jQuery('.tp-banner').revolution(
                        {
                            delay:9000,
                            startwidth:1170,
                            startheight:500,
                            hideThumbs:10,
                            fullWidth:"on",
                            fullScreen:"on",
                            fullScreenOffsetContainer: ""
                        });
                }); //ready
            </script>
            <div class="subMenu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 pull-left"><div class="logo"><img src="assets/images/logo.png" alt="" style="height:65px"></div></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 pull-right">
                            <div class="inner">
                                <div id="dl-menu" class="dl-menuwrapper"><button class="dl-trigger">Abrir Menu</button>
                                    <ul class="dl-menu">
                                        <li><a href="#" id="home" class="subNavBtn"><img src="assets/images/icone-home.png" alt="Pagina Inicial">Início</a></li>
                                        <li class="politica"><a href="#" id="politica" class="subNavBtn"><img src="assets/images/icone-orcamento.png" alt="Politicas Públicas">Políticas Públicas</a></li>
                                        <li><a href="#" id="legislacao" class="subNavBtn"><img src="assets/images/icone-legislacao.png" alt="Legislação">Legislação</a></li>
                                        <li><a href="#" id="forum" class="subNavBtn"><img src="assets/images/icone-forum.png" alt="Forum de Discurssão">Fórum</a></li>
                                        <li><a href="#" id="atendimento" class="subNavBtn"><img src="assets/images/icone-atendimento.png" alt="Canais de Atendimento">Atendimento</a></li>
                                        <li><a href="#" id="contato" class="subNavBtn"><img src="assets/images/icone-contato.png" alt="Colabore">Colabore</a></li>
                                </div>                                 
                            </div> 
                        </div> 
                    </div>
                </div>        
            </div>
            <div id="subMenuJs"></div>
            <!-- Inicio Página de Politicas Puclicas-->
            <?php
            # create new parseCSV object.
            $csv = new parseCSV();

            # limit the number of returned rows.
            $csv->limit = 10;

            # Parse '_books.csv' using automatic delimiter detection.
            $csv->auto('assets/csv/LOA_2014_BRASIL.csv');

            ?>
            <div class="serv-bg politica" id="2">
                <div class="container" id="service-scroll">
                    <div class="row marg75">
                        <div class="col-lg-12">
                            <div class="promo">Políticas Públicas</div>
                            <?php /*<div id="geo" class="geolocation_data">teste</div>Voce está em <?php if (isset($UF)){echo $UF;} */ ?>
                            <div class="promo-p">Fique por Dentro do orçamento gasto em sua Região.</div>
                        </div>
                    </div>
                    <div class="row marg50">
                        <div class="col-lg-12">
                            <style>
                            /*#####################
                            STYLE FOR CARROUSEL
                            ######################*/
                            #myCarousel .thumbnail {
                                margin-bottom:0;
                            }
                            .carousel-control {
                                color:#97123a;
                                top:44%;
                                bottom:auto;
                                opacity:1;
                            }
                            .carousel-control:hover, .carousel-control:focus {
                                color:#d9534f !important;
                            }
                            .carousel-control.left, .carousel-control.right {
                                background-image:none !important;
                            }
                            .carousel-control.right {
                                left:auto;
                                /*right:-25px;*/
                            }
                            .carousel-control.left {
                                right:auto;
                                /*left:-25px; */
                            }
                            </style>


                             <div id="myCarousel" class="carousel slide">                             
                              <div class="carousel-inner">
                              <?php $flag = true; $i = 2;?>
                              <?php //var_dump($csv);
                              //exit();
                              ?>
                              <?php foreach ($csv->data as $key => $row): ?>                                       
                              <?php if($flag){?>  
                                <div class="item active">
                                    <div class="thumbnail">

                                      <?php imagem_ministerio($row['Órgão']); ?>
                                      
                                      <div class="caption">                                 
                                        <h3 class="h3-center titulo-politicas">
                                            <?php echo $row['Programa'] ?>
                                        </h3>                                            
                                                                                    
                                        <h3 class="h3-center h3-negrito">DOTAÇÃO INICIAL</h3>
                                        <h4 class="h4-center"><?php echo "R$ ".$row['Dotação Inicial']; ?></h4>

                                        <h3 class="h3-center h3-negrito">AÇÃO</h3>
                                        <h4 class="h4-center"><?php echo $row['Ação (Cod/Desc)']; ?></h4>
                                         <!-- Button trigger modal -->
                                         <p class="p-center">
                                            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" name="Saiba Mais">
                                              Saiba Mais
                                            </button>
                                         </p>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><?php echo $row['Programa']; ?></h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <h3 class="h3-center h3-negrito">DOTAÇÃO INICIAL</h3>
                                                    <h4 class="h4-center"><?php echo "R$ ".$row['Dotação Inicial']; ?></h4>

                                                    <h3 class="h3-center h3-negrito">AUTORIZADO</h3>
                                                    <h4 class="h4-center"><?php echo "R$ ".$row['Autorizado']; ?></h4>

                                                    <h3 class="h3-center h3-negrito">PAGO</h3>
                                                    <h4 class="h4-center"><?php echo "R$ ".$row['Pago']; ?></h4>

                                                    <h3 class="h3-center h3-negrito">AÇÃO</h3>
                                                    <h4 class="h4-center"><?php echo $row['Ação (Cod/Desc)']; ?></h4>

                                                    <h3 class="h3-center h3-negrito">OBJETIVO</h3>
                                                    <h4 class="text-modal"><?php echo $row['Objetivo (Cod/Desc)']; ?></h4>

                                                    <h3 class="h3-center h3-negrito">INICIATIVA</h3>
                                                    <h4 class="text-modal"><?php echo $row['Iniciativa (Cod/Desc)']; ?></h4>
                                                    
                                                  </div>
                                                  <div class="modal-footer">                                                    
                                                    <form action="participe.php" method="post" id="contactForm3">                                                        
                                                        <input type="hidden" name="orgao" value="<?php echo $row['Órgão'] ?>">
                                                        <input type="hidden" name="dotacao" value="<?php echo $row['Dotação Inicial']; ?>">
                                                        <input type="hidden" name="autorizado" value="<?php echo $row['Autorizado']; ?>">
                                                        <input type="hidden" name="pago" value="<?php echo $row['Pago'] ?>">                                                        
                                                        <input type="hidden" name="acao" value="<?php echo $row['Ação (Cod/Desc)'] ?>">                                                        
                                                        <input type="hidden" name="objetivo" value="<?php echo $row['Objetivo (Cod/Desc)'] ?>">                                                        
                                                        <input type="hidden" name="iniciativa" value="<?php echo $row['Iniciativa (Cod/Desc)'] ?>">                                                        
                                                        <div class="col-lg-12">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" name="Fechar">Fechar</button>
                                                            <input type="submit" id="send" class="btn btn-primary" value="Participe!" />
                                                        </div>
                                                    </form>
                                                    <!-- <a href="participe.php"><button type="button" class="btn btn-primary">Participe!</button></a> -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div> <!-- END MODAL -->                                          
                                      </div>
                                      
                                    </div>     
                                    <?php $flag = false; ?>   
                                </div><!-- End Item -->
                                <?php } else{ ?>
                                <div class="item">
                                    <div class="thumbnail">   
                                      <?php imagem_ministerio($row['Órgão']); ?>
                                      <div class="caption">
                                        <h3 class="h3-center titulo-politicas">
                                            <?php echo $row['Programa']; ?>
                                        </h3>

                                       <h3 class="h3-center h3-negrito">DOTAÇÃO INICIAL</h3>
                                        <h4 class="h4-center"><?php echo "R$ ".$row['Dotação Inicial']; ?></h4>

                                        <h3 class="h3-center h3-negrito">AÇÃO</h3>
                                        <h4 class="h4-center"><?php echo $row['Ação (Cod/Desc)']; ?></h4>

                                        <!-- Button trigger modal -->
                                        <p class="p-center">
                                           <?php 
                                           echo" <button type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal$i' name='Saiba Mais'>" ?>
                                              Saiba Mais
                                           </button>
                                        </p>
                                        <!-- Modal -->
                                        <?php echo "<div class='modal fade' id='myModal$i' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>"; $i = $i + 1;?>
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel"><?php echo $row['Programa']; ?></h4>
                                              </div>
                                              <div class="modal-body">
"                                               <h3 class="h3-center h3-negrito">DOTAÇÃO INICIAL</h3>
                                                <h4 class="h4-center"><?php echo "R$ ".$row['Dotação Inicial']; ?></h4>

                                                <h3 class="h3-center h3-negrito">AUTORIZADO</h3>
                                                <h4 class="h4-center"><?php echo "R$ ".$row['Autorizado']; ?></h4>

                                                <h3 class="h3-center h3-negrito">PAGO</h3>
                                                <h4 class="h4-center"><?php echo "R$ ".$row['Pago']; ?></h4>

                                                <h3 class="h3-center h3-negrito">AÇÃO</h3>
                                                <h4 class="h4-center"><?php echo $row['Ação (Cod/Desc)']; ?></h4>

                                                <h3 class="h3-center h3-negrito">OBJETIVO</h3>
                                                <h4 class="text-modal"><?php echo $row['Objetivo (Cod/Desc)']; ?></h4>

                                                <h3 class="h3-center h3-negrito">INICIATIVA</h3>
                                                <h4 class="text-modal"><?php echo $row['Iniciativa (Cod/Desc)']; ?></h4>"
                                                
                                              </div>
                                              <div class="modal-footer">
                                                <form action="participe.php" method="post" id="contactForm3">                                                        
                                                    <input type="hidden" name="orgao" value="<?php echo $row['Órgão'] ?>">
                                                    <input type="hidden" name="dotacao" value="<?php echo $row['Dotação Inicial']; ?>">
                                                    <input type="hidden" name="autorizado" value="<?php echo $row['Autorizado']; ?>">
                                                    <input type="hidden" name="pago" value="<?php echo $row['Pago'] ?>">                                                        
                                                    <input type="hidden" name="acao" value="<?php echo $row['Ação (Cod/Desc)'] ?>">                                                        
                                                    <input type="hidden" name="objetivo" value="<?php echo $row['Objetivo (Cod/Desc)'] ?>">                                                        
                                                    <input type="hidden" name="iniciativa" value="<?php echo $row['Iniciativa (Cod/Desc)'] ?>">                                                        
                                                    <div class="col-lg-12">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" name="Fechar">Fechar</button>
                                                        <input type="submit" id="send" class="btn btn-primary" value="Participe!" />
                                                    </div>
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div> <!-- END MODAL -->   
                                      </div>                                      
                                    </div>        
                                </div><!-- End Item -->

                                <?php $flag = false;  }  ?>
                                <?php endforeach; ?>                              

                              </div><!-- End Carousel Inner -->
                              <div class="carousel-controls">
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="assets/images/seta-esquerda.png" alt="Política Anterior"></a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="assets/images/seta-direita.png" alt="Próxima Política"></a>
                              </div>
                            </div><!-- /.carousel -->
                        </div>
                    </div>
                </div>
            </div><!-- Fim Página de Politicas Puclicas-->
            <!-- Inicio Página de Legislação-->
            <div class="bg legislacao" id="3">
                <div class="container">
                    <div class="row marg75">
                        <div class="col-lg-12">
                            <div class="promo">Legislação</div>
                            <div class="promo-p">Saiba mais sobre seus direitos.</div>
                        </div>
                    </div>
                    <!-- Campo de Pesquisa-->
                    <div class="search-input marg50">                        
                         <form action="assets/php/legislacao.php" method="post" id="contactForm2">
                            <div class="col-lg-12">
                                <p class="text_cont"><input type="text" name="pesquisa" placeholder="Digite o que deseja pesquisar" class="input-cont"></p>
                                <div class="alert alert-danger error" id="nameError"><i class="icon-ban"></i> Preencha o campo.</div>
                            </div> 
                            <div class="col-lg-12"><p><input type="submit" id="send" class="btn btn-send" value="Pesquisar" /></p></div>
                        </form>
                        <?php //echo $_POST['pesquisa']; ?>
                    </div>
                    <!--Palavras Mais Pesquisadas-->
                    <div class="row marg50">
                        <div class="col-lg-12">
                            <div class="promo-mini">Palavras Mais Buscadas</div>
                        </div>
                    </div>
                    <div class="row marg50">
                        <div class="col-lg-6 col-md-6 col-sm-6">                       
                            <div class="progress-per">
                                <div class="prog-name">Violência</div>
                                <div class="prog-per">50%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="progress-per">
                                <div class="prog-name">Lei Maria da Penha</div>
                                <div class="prog-per">25%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="progress-per">
                                <div class="prog-name">Previdência</div>
                                <div class="prog-per">15%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="progress-per">
                                <div class="prog-name">Assistência jurídica</div>
                                <div class="prog-per">2%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 2%"></div>
                            </div>
                        </div>
                    </div>    
                </div>


<div class="marg50" style="overflow:hidden;">
                    <div id="grid-container" class="cbp-l-grid-projects">
                        <ul>
                            <li class="cbp-item graphic">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="assets/images/maria-da-penha.jpg" alt="Imagem Lei Maria da Penha" width="100%">
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title">Lei Maria da Penha</div>
                                <a href="http://www.planalto.gov.br/ccivil_03/_ato2004-2006/2006/lei/l11340.htm" target="_blank"><div class="cbp-l-grid-projects-desc"><span class="cbp-l-grid-projects-inlineFilters">Veja Aqui</span></div></a>
                            </li>
                            <li class="cbp-item">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="assets/images/discriminacao-no-emprego.jpg" alt="Imagem Descriminação no Emprego" width="100%">
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title">Lei da Discriminação no Emprego </div>
                                <a href="http://www2.camara.leg.br/legin/fed/lei/1995/lei-9029-13-abril-1995-348798-normaatualizada-pl.html" target="_blank"><div class="cbp-l-grid-projects-desc"><span class="cbp-l-grid-projects-inlineFilters">Veja Aqui</span></div></a>
                            </li>
                            <li class="cbp-item">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="assets/images/uniao-estavel.jpg" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title">Lei da União Estável</div>
                                <a href="http://www2.camara.leg.br/legin/fed/lei/1996/lei-9278-10-maio-1996-362582-publicacaooriginal-1-pl.html" target="_blank"><div class="cbp-l-grid-projects-desc"><span class="cbp-l-grid-projects-inlineFilters">Veja Aqui</span></div></a>
                            </li>
                            <li class="cbp-item">
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap">
                                        <img src="assets/images/constituicao.jpg" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="cbp-l-grid-projects-title">Constituição Federal</div>
                                <a href="http://www.planalto.gov.br/ccivil_03/constituicao/ConstituicaoCompilado.htm" target="_blank"><div class="cbp-l-grid-projects-desc"><span class="cbp-l-grid-projects-inlineFilters">Veja Aqui</span></div></a>
                            </li>                            
                        </ul>
                    </div>
                </div>

                 <p class="p-center marg25 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <a href="assets/pdf/legislacao_mulher_6ed.pdf" target="blank" rel="Baixar Legislação Completa">
                    <button type="button" class="btn btn-primary btn-lg botao-baixar"  name="Baixar Legislação Completa">
                      Baixe a Legislação da MULHER
                    </button>
                    </a>
                 </p>

            </div><!-- FIM Página de Legislação-->
            <!-- Inicio Página Fórum de Discurssão-->
            <div class="bg forum" id="4">
                <div class="container">
                    <div class="row marg25">
                        <div class="col-lg-12">
                            <div class="promo">Fórum de Discussão</div>
                            <div class="promo-p">Debate aberto: mobilize as mulheres de sua cidade   </div>
                        </div>
                    </div>
                    <div class="row forum-imagem">
                        <div class="col-lg-6 col-md-6 marg50">
                            <?php /*
                            <section class="slider">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li><img src="assets/images/about-2.jpg" /></li>
                                        <li><img src="assets/images/about-1.jpg" /></li>
                                        <li><img src="assets/images/about-3.jpg" /></li>
                                    </ul>
                                </div>
                            </section>
                            */ 
                            ?>
                          <img src="assets/images/assuntos-discutidos.jpg">  
                        </div>
                        <div class="col-lg-6 col-md-6 marg50">
                            <?php /*
                            <div class="about-block">
                                <div class="about-name">TESTE</div>
                                <div class="about-text">
                                    Fórum livre e aberto de debate sobre as políticas públicas para as mulheres. Aqui temos uma plataforma de mensagens instantâneas entre as mulheres participativas. Vamos fortalecer o engajamento coletivo e ação política das mulheres. 
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                        <ul class="about-ul">
                                            <li><i class="icon-check"></i> We are trendy</li>
                                            <li><i class="icon-check"></i> We provide best web solutions</li>
                                            <li><i class="icon-check"></i> 24/7 Support </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                        <ul class="about-ul">
                                            <li><i class="icon-check"></i> Our clients love us</li>
                                            <li><i class="icon-check"></i> We accelerate your business</li>
                                            <li><i class="icon-check"></i> We are passionate</li>
                                        </ul>
                                    </div>
                                </div> */ ?>
                            </div>
                            <img src="assets/images/novo-assunto.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-image-1">
                <div class="bg-image-toner-1">
                    <div class="container">
                        <div class="row marg75">
                            <div class="col-lg-12">
                                <div class="promo-white">Você Sabia?</div>
                                <div class="promo-p-white bg-white">A realidade da mulher contada em números</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ms-12 marg50">
                                <div class="fact-block">
                                    <div class="fact-icon f1"><i class="fa fa-users"></i></div>
                                    <div class="fact-name">60%</div>
                                    <div class="fact-text">dos brasileiros conhecem alguma mulher que já foi violentada </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ms-12 marg50">
                                <div class="fact-block">
                                    <div class="fact-icon f2"><i class="fa fa-bullhorn"></i></div>
                                    <div class="fact-name">68%</div>
                                    <div class="fact-text">das mulheres afirmam ter medo de denunciar o agressor</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ms-12 marg50">
                                <div class="fact-block">
                                    <div class="fact-icon f3"><i class="fa fa-gavel"></i></div>
                                    <div class="fact-name">94%</div>
                                    <div class="fact-text">dos brasileiros conhecem a Lei Maria da Penha</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-ms-12 marg50">
                                <div class="fact-block">
                                    <div class="fact-icon f4"><i class="fa fa-building-o"></i></div>
                                    <div class="fact-name">20%</div>
                                    <div class="fact-text">das faltas ao trabalho é causada pela violência doméstica </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg atendimento" id="5">
                <div class="container">
                    <div class="row marg75">
                        <div class="col-lg-12">
                            <div class="promo">Atendimento</div>
                            <div class="promo-p">Procure apoio: rede de enfrentamento à violência contra a mulher</div>
                            <!-- Campo de Seleção do atendimento-->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $("#atendimento-selecao").change(function(){
                                        $( "select option:selected").each(function(){
                                            if($(this).attr("value")=="OP"){
                                                $(".box").hide();                                                
                                            }

                                            if($(this).attr("value")=="CEAM"){
                                                $(".box").hide();
                                                $(".ceam").show();
                                            }
                                            if($(this).attr("value")=="CASA"){
                                                $(".box").hide();
                                                $(".casa").show();
                                            }
                                            if($(this).attr("value")=="JUIZADOS"){
                                                $(".box").hide();
                                                $(".juizados").show();
                                            }
                                            if($(this).attr("value")=="MP"){
                                                $(".box").hide();
                                                $(".mp").show();
                                            }
                                            if($(this).attr("value")=="DEAM"){
                                                $(".box").hide();
                                                $(".deam").show();
                                            }
                                        });
                                    }).change();
                                });
                            </script>
                            <?php
                            # Cria o objeto CSV
                            $csvCEAM = new parseCSV();
                            $csvCASA = new parseCSV();
                            $csvJUIZADOS = new parseCSV();
                            $csvMP = new parseCSV();
                            $csvDEAM = new parseCSV();
                            # offset from the beginning of the file,

                            # Limita o numerdo de linhas mostradas
                            //$csvCEAM->limit = 3;
                            //$csvCASA->limit = 3;
                            //$csvJUIZADOS->limit = 3;
                            //$csvMP->limit = 3;
                            //$csvDEAM->limit = 3;

                            # Carrega os arquivos de atendimento
                            $csvCEAM->auto('assets/csv/CEAM.csv');
                            $csvCASA->auto('assets/csv/CASA.csv');                                                        
                            $csvJUIZADOS->auto('assets/csv/JUIZADOS.csv');
                            $csvMP->auto('assets/csv/MP.csv');
                            $csvDEAM->auto('assets/csv/DEAM.csv');

                            ?>
                            <div class="search-input marg25 select-atendimento col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4 class="p-center">Selecione a Categoria Desejada:
                                 <select id="atendimento-selecao"name="Opções da Categoria de Atendimento">
                                  <option label="Escolha a opção..." value="OP">Escolha a opção...</option>
                                  <option label="Atendimento em Situação de Violência" value="CEAM">Atendimento em Situação de Violência</option>
                                  <option label="Casas de Abrigo e Acolhimento" value="CASA">Casas de Abrigo e Acolhimento</option>
                                  <option label="Delegacias Especializadas" value="DEAM">Delegacias Especializadas</option>
                                  <option label="Ministério Público e Defensoria" value="MP">Ministério Público e Defensoria</option>
                                  <option label="Justiça: Juizados Especiais" value="JUIZADOS">Justiça: Juizados Especiais</option>
                                </select>
                                </h4>
                            </div>    

                                <?php //var_dump($csvDEAM); exit(); ?>
                            <div class="ceam box marg50">
                                <?php foreach ($csvCEAM->data as $key => $row): ?>
                                    <?php if($row['Column 3']=="DF"){ ?>
                                            <?php echo "<strong> Nome: ".$row['Column 8']."</strong>"; ?></br>
                                            <?php echo "Telefone: ".$row['Column 10']; ?></br>
                                            <?php echo "E-mail: ".$row['Column 11']; ?></br>
                                            <?php echo "Endereço ".$row['Column 12']; ?></br>
                                            <?php echo "Bairro: ". $row['Column 13']; ?></br>
                                            <?php echo "CEP:". $row['Column 14']; ?>
                                            </br></br>
                                    <?php } ?>        
                                <?php endforeach; ?>
                            </div>


                            <div class="casa box marg25">
                                <?php foreach ($csvCASA->data as $key => $row): ?>
                                    <?php if($row['Column 3']=="DF"){ ?>    
                                            <?php echo "<strong> Nome: ".$row['Column 8']."</strong>"; ?></br>
                                            <?php echo "Telefone: ".$row['Column 10']; ?></br>
                                            <?php echo "E-mail: ".$row['Column 11']; ?></br>
                                            <?php echo "Endereço ".$row['Column 12']; ?></br>
                                            <?php echo "Bairro: ". $row['Column 13']; ?></br>
                                            <?php echo "CEP:". $row['Column 14']; ?>
                                            </br></br>
                                    <?php } ?>
                                <?php endforeach; ?>                                
                            </div>

                            <div class="juizados box marg25">                                
                                <?php foreach ($csvJUIZADOS->data as $key => $row): ?>
                                    <?php if($row['Column 3']=="DF"){ ?>
                                        <?php echo "<strong> Nome: ".$row['Column 8']."</strong>"; ?></br>
                                        <?php echo "Telefone: ".$row['Column 10']; ?></br>
                                        <?php echo "E-mail: ".$row['Column 11']; ?></br>
                                        <?php echo "Endereço ".$row['Column 12']; ?></br>
                                        <?php echo "Bairro: ". $row['Column 13']; ?></br>
                                        <?php echo "CEP:". $row['Column 14']; ?>
                                        </br></br>
                                    <?php } ?> 
                                <?php endforeach; ?>

                            </div>

                            <div class="mp box marg25">                                
                                <?php foreach ($csvMP->data as $key => $row): ?>
                                    <?php if($row['Column 3']=="DF"){ ?>
                                        <?php echo "<strong> Nome: ".$row['Column 8']."</strong>"; ?></br>
                                        <?php echo "Telefone: ".$row['Column 9']; ?></br>
                                        <?php echo "E-mail: ".$row['Column 10']; ?></br>
                                        <?php echo "Endereço ".$row['Column 11']; ?></br>
                                        <?php echo "Bairro: ". $row['Column 12']; ?></br>
                                        <?php echo "CEP:". $row['Column 13']; ?>
                                        </br></br>                                        
                                    <?php } ?>         
                                <?php endforeach; ?>                             
                            </div>

                            <div class="deam box marg25">                                
                             <?php foreach ($csvDEAM->data as $key => $row): ?>
                                <?php if($row['Column 3']=="DF"){ ?>
                                    <?php echo "<strong> Nome: ".$row['Column 8']."</strong>"; ?></br>
                                    <?php echo "Telefone: ".$row['Column 9']; ?></br>
                                    <?php echo "E-mail: ".$row['Column 10']; ?></br>
                                    <?php echo "Endereço ".$row['Column 11']; ?></br>
                                    <?php echo "Bairro: ". $row['Column 12']; ?></br>
                                    <?php echo "CEP:". $row['Column 13']; ?>
                                    </br></br>
                                <?php } ?>                                     
                            <?php endforeach; ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-image-2">
                <div class="container">
                    <div class="row marg75">
                        <div class="col-lg-12">
                            <div class="promo-white">Mulher...</div>
                            <!-- <div class="promo-p-white bg-white-2">Pensamentos sobre as mulheres. </div> -->
                        </div>
                    </div>
                    <div class="row marg25">
                        <div class="col-lg-12">
                            <div class="testimonials">
                                <div id="carousel-testimonials" class="carousel slide">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-testimonials" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-testimonials" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <p class="testimonial-quote">"Ser feminista continua sendo defender a maioria silenciosa das mulheres, ajudá-las a libertarem-se e adquirir seus direitos."</p>
                                            <p class="testimonial-author">Isabel Allende</p>
                                        </div>
                                        <div class="item">
                                            <p class="testimonial-quote">"O amparo à mulher que sofre violência doméstica é o primeiro passo para combater todas as formas de violência."</p>
                                            <p class="testimonial-author">Maria da Penha </p>
                                        </div>
                                        <div class="item">
                                            <p class="testimonial-quote">"Uma mulher participativa contribui para a evolução dos tempos, como um ser humano atuante, que tem força e que deve ser útil à sociedade."</p>
                                            <p class="testimonial-author">Luis Sousa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="parallax-2 contato" id="6">
                <div class="parallax-over-2">
                    <div class="container">
                        <div class="row marg75">
                            <div class="col-lg-12">
                                <div class="promo-white">Fale Conosco</div>
                                <div class="promo-p bg-white ">Colabore com nosso projeto. Junte-se a nós. Vamos juntos elevar a participação da mulher na vida pública e garantir seus direitos. Envie sua sugestão ou utilize nosso código livre e aberto.</div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 marg50">
                                <div class="contact-info">
                                    <div class="contact-icon"><i class="icon-call-in"></i></div>
                                    <div class="contact-bg">
                                        <div class="contact-name">Telefone</div>
                                        <div class="contact-tel">+ 55 71 3374-5471<br><span>Atendimento: 9am ás 6pm</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 marg50">
                                <div class="contact-info">
                                    <div class="contact-icon cc2"><i class="icon-envelope"></i></div>
                                    <div class="contact-bg">
                                        <div class="contact-name">E-mail</div>
                                        <div class="contact-tel">participamulher@gmail.com<br><span>Ou apenas preencha o formulário abaixo</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 marg50">
                                <div class="contact-info">
                                    <div class="contact-icon cc3"><i class="fa fa-github"></i></div>
                                    <div class="contact-bg">
                                        <div class="contact-name">Código Aberto</div>
                                        <div class="contact-tel">https://github.com/gabrielpita7/Participa-Mulher</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12 marg75">
                            <p>Colabore com nosso projeto. Junte-se a nós. Vamos juntos elevar a participação da mulher na vida pública e garantir seus direitos.
                            “Participa, Mulher” é um projeto colaborativo que nasceu na Maratona Hacker 2014 realizado pela Câmara dos Deputados, em Brasília, 
                            e foi idealizado e desenvolvido por Lud Diniz (designer), Gabriel Pita (programador) e Luciano Quintão (pesquisador). </p>
                            
                            <p>Temos aqui uma solução web, de código livre e aberto, que integra os dados e informações sobre execução das políticas 
                            públicas para mulheres (com base nos gastos do governo federal), a legislação mulher completa e ainda a rede de atendimento e proteção contra a violência.

                            <p>A ideia central de nosso projeto é promover o livre acesso às informações públicas, de forma facilitada e interativa. 
                            As mulheres brasileiras têm agora uma ferramenta digital, inédita e gratuita, de monitoramento dos programas de governo 
                            e do orçamento público para as mulheres. </p>

                            <p>Além disso, com uma pesquisa rápida, as mulheres podem aqui consultar a legislação
                            e os contatos de toda à rede de atendimento, incluindo delegacias especializadas, casas de acolhimento, defensorias, entre outros.</p>

                             <p>Envie sua sugestão, colabore, ou utilize nosso código livre e aberto para novos projetos. </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12 marg75">
                            <div class="row">
                                <form action="assets/php/send.php" method="post" id="contactForm">
                                    <div class="col-lg-12">
                                        <p class="text_cont"><input type="text" name="name" placeholder="Nome" class="input-cont"></p>
                                        <div class="alert alert-danger error" id="nameError"><i class="icon-ban"></i> Preencha o campo Nome.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="text_cont"><input type="text" name="email" placeholder="E-mail" class="input-cont"></p>
                                        <div class="alert alert-danger error" id="emailError"><i class="icon-ban"></i> Preencha o campo E-mail.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="text_cont"><input type="text" name="subject" placeholder="Assunto" class="input-cont"></p>
                                        <div class="alert alert-danger error" id="subjectError"><i class="icon-ban"></i> Preencha o campo Assunto.</div>

                                    </div>
                                    <div class="col-lg-12">
                                        <p class="text_cont"><textarea name="message" placeholder="Mensagem" id="message" class="input-cont-textarea" cols="30" rows="8"></textarea></p>
                                        <div class="alert alert-danger error" id="messageError"><i class="icon-ban"></i> Preencha o campo de Mensagem.</div>
                                        <div class="alert alert-success success" id="success"><i class="icon-check"></i> Tudo Certo! Sua Mensagem foi enviada com Sucesso.</div>
                                    </div>
                                    <div class="col-lg-12"><p><input type="submit" id="send" class="btn btn-send" value="Enviar Mensagem" /></p></div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 marg50">
                            <div class="footer-promo">Siga-nos</div>
                            <div class="footer-soc">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <li><a class="foot-facebook" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li><a class="foot-google-plus" href="#"><i class="fa fa-google-plus"></i> Google +</a></li>
                                </ul>
                                <div class="arrow-top"><a href="#" class="scroll"><i class="icon-arrow-up"></i></a></div>
                            </div>
                            <div class="copyright">Copyright © 2014. Todos os direitos reservados. Participa Mulher! #HACKATON 2014</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.slider4').bxSlider({
        slideWidth: 200,
        minSlides: 1,
        maxSlides: 5,
        moveSlides: 1,
        slideMargin: 35,
        auto: true,
        pause: 4000,
        speed: 1000,
        controls:false,
        pager:false
      });
    });
    </script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="assets/js/portfolio.js"></script>
    <script type="text/javascript" src="assets/js/retina.js"></script>
    <script type="text/javascript" src="assets/js/contacts.js"></script>
    <script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dlmenu.js"></script>
    <script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.smint.js"></script>
    <script type="text/javascript">
    $(document).ready( function() {
        var sliderApi = jQuery('.tp-banner').revolution();
        sliderApi.bind("revolution.slide.onloaded",function (e) {
            $('.subMenu').smint({
                'scrollSpeed' : 1000
            });
        });
    });
    </script>
  </body>
</html>