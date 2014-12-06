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
    <?php require_once('assets/php/lib/functions.php'); ?>

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
            <div class="subMenu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 pull-left"><div class="logo"><img src="assets/images/logo.png" alt="" style="height:65px"></div></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 pull-right">
                            <div class="inner">
                                <div id="dl-menu" class="dl-menuwrapper"><button class="dl-trigger">Abrir Menu</button>
                                    <ul class="dl-menu">
                                        <li><a href="index.php" id="home" class="subNavBtn"><img src="assets/images/icone-home.png" alt="Pagina Inicial">Retornar para o Início</a></li>
                                        <?php /*
                                        <li class="politica"><a href="#" id="politica" class="subNavBtn"><img src="assets/images/icone-orcamento.png" alt="Politicas Públicas">Políticas Públicas</a></li>
                                        <li><a href="#" id="legislacao" class="subNavBtn"><img src="assets/images/icone-legislacao.png" alt="Legislação">Legislação</a></li>
                                        <li><a href="#" id="forum" class="subNavBtn"><img src="assets/images/icone-forum.png" alt="Forum de Discurssão">Fórum</a></li>
                                        <li><a href="#" id="atendimento" class="subNavBtn"><img src="assets/images/icone-atendimento.png" alt="Canais de Atendimento">Atendimento</a></li>
                                        <li><a href="#" id="contato" class="subNavBtn"><img src="assets/images/icone-contato.png" alt="Colabore">Colabore</a></li>
                                        */ ?>
                                </div>                                 
                            </div> 
                        </div> 
                    </div>
                </div>        
            </div>
            <div id="subMenuJs"></div>
            <?php
				$orgao = $_POST['orgao'];
				$dotacao = $_POST['dotacao'];
				$pago = $_POST['pago'];
				$autorizado = $_POST['autorizado'];
				$acao = $_POST['acao'];
				$objetivo = $_POST['objetivo'];
				$iniciativa = $_POST['iniciativa'];

				//echo $vetor;
			?>

           <div class="parallax-participa contato" id="6">
                <div class="parallax-over-participa">
                    <div class="container">
                        <div class="row marg75">
                            <div class="col-lg-12">
                                <div class="promo-white">Fale com o <?php echo $orgao;?></div>
                                <div class="promo-p bg-white promo-participa">Envie sua mensagem, através do formulário abaixo, agora para órgão responsável por esse programa de governo. Sua manifestação - com sugestões, reclamações ou denúncias - será encaminhada para Ouvidoria e será respondida em breve. 
                                Abaixo segue os dados do programa escolhido para serem utilizados no e-mail, caso seja necessário.</div>
                            </div>
                        </div> 
                        <?php /*
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 marg50">
                                <div class="contact-info">
                                    <div class="contact-icon"><i class="fa fa-money"></i></div>
                                    <div class="contact-bg">
                                        <div class="contact-name">Valores:</div>
                                        <h3 class="h3-center h3-negrito">Dotação Inicial:</h3>
					                    <h4 class="h4-center"><?php echo "R$ ".$dotacao; ?></h4>

					                    <h3 class="h3-center h3-negrito">Autorizado:</h3>
					                    <h4 class="h4-center"><?php echo "R$ ".$autorizado; ?></h4>

					                    <h3 class="h3-center h3-negrito">Pago:</h3>
					                    <h4 class="h4-center"><?php echo "R$ ".$pago; ?></h4>

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
                        </div> */ ?>
                    </div>
                </div>
            </div>
            <div class="bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12 marg75">
        	 	         	
        	 	         	<div class="col-lg-4 col-md-4 col-sm-4">
        	 	         		<h4 class=" h3-negrito">Dotação Inicial:</h4><h5><?php echo "R$ ".$dotacao ?></h5>
        	 	         	</div>

        	 	         	<div class="col-lg-4 col-md-4 col-sm-4">
		                    	<h4 class="h3-negrito">Autorizado:</h4>
		                    	<h5><?php echo "R$ ".$autorizado ?></h5>
		                    </div>

		                    <div class="col-lg-4 col-md-4 col-sm-4">
		                    	<h4 class="h3-negrito">Pago</h4>
		                    	<h5><?php echo "R$ ".$pago ?></h5>
		                    </div>

		                    <h4 class="h3-center h3-negrito">AÇÃO</h4>
		                    <p><?php echo $acao ?></p>

		                    <h4 class="h3-center h3-negrito">OBJETIVO</h4>
		                    <p><?php echo $objetivo; ?></p>

		                    <h4 class="h3-center h3-negrito">INICIATIVA</h4>
		                    <p><?php echo $iniciativa; ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12 marg75">
                            <div class="row">
                                <form action="assets/php/send.php" method="post" id="contactForm4">
                                    <div class="col-lg-12">
                                        <p class="text_cont"><input type="text" name="name" placeholder="Nome" class="input-cont"></p>
                                        <div class="alert alert-danger error" id="nameError"><i class="icon-ban"></i> Preencha o campo Nome.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="text_cont"><input type="text" name="email" placeholder="E-mail" class="input-cont"></p>
                                        <div class="alert alert-danger error" id="emailError"><i class="icon-ban"></i> Preencha o campo E-mail.</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="text_cont"><textarea name="message" placeholder="Mensagem: Manifeste-se" id="message" class="input-cont-textarea" cols="30" rows="8"></textarea></p>
                                        <div class="alert alert-danger error" id="messageError"><i class="icon-ban"></i> Preencha o campo de Mensagem.</div>
                                        <div class="alert alert-success success" id="success"><i class="icon-check"></i> Tudo Certo! Sua Mensagem foi enviada com Sucesso.</div>
                                    </div>
                                    <div class="col-lg-12"><p><input type="submit" id="send" class="btn btn-send" value="Manifeste-se!" /></p></div>
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