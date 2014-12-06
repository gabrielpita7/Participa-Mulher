<?php
error_reporting(E_ALL);
if(getenv('REQUEST_METHOD') != 'POST')
    //exit('Opss! Only POST requests are accepted');
	header("Location: http://participamulher.org/");

if(isset($_POST["pesquisa"])&&($_POST["pesquisa"]!=null)){   
	$conteudo = $_POST['pesquisa'];
	$url = "http://www2.camara.leg.br/busca/?o=relevance&v=legislacao&camaranet=&colecao=T&conteudolegin=$conteudo&numero=&ano=&tiponormaT=Emenda+Constitucional&tiponormaT=Lei+Complementar&tiponormaT=Lei+Ordin%C3%A1ria&tiponormaT=Medida+Provis%C3%B3ria&tiponormaT=Decreto+Legislativo&tiponormaT=Decreto&tiponormaT=Decreto-Lei&tiponormaT=Resolu%C3%A7%C3%A3o+da+C%C3%A2mara+dos+Deputados&tiponormaT=Ato+da+Mesa&tiponormaT=Ato+da+Presid%C3%AAncia&tiponormaT=Ordem+de+Servi%C3%A7o&tiponormaT=Portaria&tiponormaT=Resolu%C3%A7%C3%A3o+da+Mesa" ;
	header("Location: $url"); 
}
?>