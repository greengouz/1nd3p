<!DOCTYPE html>
<html lang="es_LA">

  <head>
			
			<?php 	
			
			$id_noticia = $_GET["id"];
			include_once "resources/controller.php";	
			$controlador= new controller("","");				
			if(($_GET["id"]>239921) && is_numeric($_GET["id"])){					
				include "noticias_html/header_".$_GET["id"].".php";
			}else{
				include "paginaDB_header.php";
			}
			?> 
			 	  	
		
		<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
		<script src="http://vjs.zencdn.net/4.12/video.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-8485196261787595",
		    enable_page_level_ads: true
		  });
		</script>
		  
		<script>
		 function foo (bid) {
		      $.ajax({
		        url:"contador.php", //the page containing php script
		        type: "POST", //request type
		        data: {field1:bid},
		        success:function(result){}
		     });
		 }
		</script>

		<script type="text/javascript">
		$(document).ready(function(){
		  $('#open').click(function(){
		        $('#popup').fadeIn('slow');
		        $('.popup-overlay').fadeIn('slow');
		        $('.popup-overlay').height($(window).height());
		        return false;
		    });
		    
		    $('#close').click(function(){
		        $('#popup').fadeOut('slow');
		        $('.popup-overlay').fadeOut('slow');
		        return false;
		    });
		});
		</script>

    <!--TWITTER-->
      <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
      </script>

		<style type="text/css">
		  .vjs-default-skin .vjs-play-progress,
		  .vjs-default-skin .vjs-volume-level { background-color: #4764cf }
		  .vjs-default-skin .vjs-control-bar,
		  .vjs-default-skin .vjs-big-play-button { background: rgba(204,199,199,0.7) }
		  .vjs-default-skin .vjs-slider { background: rgba(204,199,199,0.2333333333333333) }
		  .vjs-default-skin .vjs-control-bar { font-size: 64% }		 			 			 		
		</style>
		
			<meta charset="UTF-8">
			<meta name="description" content="" >
			<meta name="author" content="">
			<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
		    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		    <!-- Bootstrap core CSS -->
		    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
		    <link href="vendor/bootstrap/css/bootstrap-min.css" rel="stylesheet">
		    <!-- Custom styles for this template -->
		    <link href="css/modern-business.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<link rel="alternate" title="RSS" href="feed.xml" type="application/rss+xml" />

		  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
			<!--[if lt IE 9]>
				<script src="js/html5shiv.js"></script>
			<![endif]-->

			<!--//////////GoogleAnalyticsObject///////////// -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-71365759-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<!--/////////GoogleAnalyticsObject///////////// -->

		<!-- Links para galeria de imagenes -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.0/ekko-lightbox.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.0/ekko-lightbox.js">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.0/ekko-lightbox.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/4.0.0/ekko-lightbox.min.js">
		
		<!-- Librerías para carrusel-->        
		<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

			$('#myModal').on('shown.bs.modal', function () {
		('#myInput').trigger('focus')
		});
		$('.carousel').carousel()
		</script>

		<!-- Style Redes sociales Nota-->
		<style type="text/css">
				.social {
				/*position: fixed;  Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
				text-align: right;  /*Establecemos la barra en la izquierda */
				}
				 
				.social ul {
				list-style: none;
				}
				 
				.social ul a {
				display: inline-block;
				font-size: auto%;
				color:#fff;
				background: #000;
				border-radius: 50%; 
				text-decoration: none;
				}

				.social ul .face {background: #3b5998; padding:10px 11px;} /* Establecemos los colores de cada red social, aprovechando su class **/
				.social ul .tweet {background: #00abf0; padding:10px 11px;}
				.social ul .whats {background: #00E676; padding:10px 11px;}
				
				.social ul a:hover {
					background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
				}
		</style>
		<!--end Style-->

  </head>

  <body>


    
    <!--<meta charset="utf-8">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="google-site-verification" content="lZImUGIcugeDLfAGxfzKqxr5fU2STXr_BXIfjfA7f7k" />
	
    <title>Diario El Independiente :: Edici�n Digital</title>

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	(adsbygoogle=window.adsbygoogle||[]).requestNonPersonalizedAds=1;
	(adsbygoogle=window.adsbygoogle||[]).push({google_ad_client: "ca-pub-8485196261787595", enable_page_level_ads: true});
	</script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap-min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script>
	 function foo (bid) {
		  $.ajax({
			url:"contador.php", //the page containing php script
			type: "POST", //request type
			data: {field1:bid},
			success:function(result){}
		 });
	 }
	</script>

	<script type="text/javascript">
	$(document).ready(function(){
	  $('#open').click(function(){
			$('#popup').fadeIn('slow');
			$('.popup-overlay').fadeIn('slow');
			$('.popup-overlay').height($(window).height());
			return false;
		});
		
		$('#close').click(function(){
			$('#popup').fadeOut('slow');
			$('.popup-overlay').fadeOut('slow');
			return false;
		});
	});
	</script>			
			<!-- POPUP DE TAPA DEL D�A -->
          	
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAPA DEL D&Iacute;A</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-header">   
                  <h6 class="modal-title" id="exampleModalLabel">Edici&oacute;n Nro: <b>22622</b> - 2020-03-31</h6>
                </div>
                <div class="modal-body">
                  <img src="../elindependiente/1.0/tapas/MARTES.jpg" alt="Tapa del D�a" width="100%">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- FIN POPUP DE TAPA DEL D�A -->

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logomin2.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secciones</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                    <a class="dropdown-item" href="seccion.php?seccion=8&pagina=0">Arte | Cultura</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=4&pagina=0">Deportes</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=16&pagina=0">Destacada</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=11&pagina=0">Mundo | Internacionales</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=5&pagina=0">Nacionales</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=12&pagina=0">Opinión</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=2&pagina=0">Policiales</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=1&pagina=0">Política | Locales</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=13&pagina=0">Show | Espectáculos</a>
                                        <a class="dropdown-item" href="seccion.php?seccion=3&pagina=0">Sociedad</a>
                                  </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medios</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="http://www.streaminglocucionar.com.ar/portal/?p=8241">Radio Independiente 99.1</a>
                <a class="dropdown-item" href="http://streaminglocucionar.com/video/?p=8098_1">Independiente TV</a>
                <a class="dropdown-item" href="site-old/suplementos.php" target="_blank">Suplementos</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/edicionpapel">Edici&oacute;n Papel</a>
            </li>  
            <li class="nav-item active">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Tapa del d&iacute;a</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clasificados.php">Clasificados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/nuevo/guiaonline.php">Gu&iacute;a Online</a>
            </li>
            <li class="nav-item">			
				<form action="seccion.php">
				<div class="input-group">
					<div class="form-group">
						<input type="search" name="buscar" class="form-control" placeholder="Buscar..." required />
					</div>
					<span class="input-group-btn">
					  <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
					</span>
				</div>
				</form>	
			</li>

          </ul>
        </div>
      </div>

    </nav>
    <!-- Page Heading/Breadcrumbs -->
    <!-- Cabecera con logo y publicidad-->
<!------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <br>
    <div class="container">
      <div class="row"> 
        
        <div class="col-md-3 mb-4 d-none d-lg-block">
          <!--<a href="https://www.padron.gob.ar/" target="_blank" onclick="foo(143)"><img src="img/home/consulta_padron_izq.jpg" alt="Consulta D�nde Votar" class="rectangulotopleft" /></a>-->
          <!--<a href="http://www.andinalr.com.ar" target="_blank" onclick="foo(41)"><img src="img/home/andina-ch.gif" alt="Publicidad 1" class="rectangulotopleft" /></a>-->
          <!--<img src="img/home/aniversario.jpg" alt="Aniversario 60 A" class="logo-aniversario-topleft"/>-->
        </div> 
         
        <div class="col-md-6 mb-4">
			<a href="index.php">
				<img src="img/logo.png" alt="El Independiente Digital" class="logo-top" />
			</a>
          <div class="row">
            <left>
              <div class="col-md">
                <ul>
                  <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado");
                    var f=new Date();
                    document.write(' ' + diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear() + ' ');
                  </script>
                </ul>
              </div>
            </left>

            <right>
              <div class="col-md d-none d-lg-block">
                <ul class="list-inline2">
                  <a href="https://www.facebook.com/elindependientedigital" target="_blank"><img src="img/icons/redes-sociales/facebook.png" class="redes-sociales"></a>
                  <a href="https://www.instagram.com/elindependientedigital" target="_blank"><img src="img/icons/redes-sociales/instagram.png" class="redes-sociales"></a>
                  <a href="https://twitter.com/independientelr" target="_blank"><img src="img/icons/redes-sociales/twitter.png" class="redes-sociales"></a>
                  <a href="https://api.whatsapp.com/send?phone=3804942723" target="_blank"><img src="img/icons/redes-sociales/whatsapp.png" class="redes-sociales"></a>
                  <a href="https://www.youtube.com/user/elindepdigital/videos" target="_blank"><img src="img/icons/redes-sociales/youtube.png" class="redes-sociales"></a>  
                </ul>
              </div>
            </right>
          </div>
        </div> 

        <div class="col-md-3 mb-4 d-none d-lg-block ">
          <!--<a href="https://www.padron.gob.ar/" target="_blank" onclick="foo(143)"><img src="img/home/consulta_padron_der.jpg" alt="Consulta D�nde Votar" class="rectangulotopright" /></a>-->
          <!--<a href="http://www.andinalr.com.ar" target="_blank" onclick="foo(42)"><img src="img/home/andina-vw.gif" alt="Publicidad 2" class="rectangulotopright" /></a>-->
		  <!--<img src="img/home/aniversario.jpg" alt="Aniversario 60 A" class="logo-aniversario-topright"/>-->
        </div>

   		<div class="container">

          <div class="breadcrumb2">

						<a href="https://www.elindependiente.com.ar/elindependiente/1.0/aplicacion.php?ah=st5e77f2d375b4a&ai=elindependiente||3827" target="_blank" class="btn btn-warning" ><strong>SUSCRIBITE</strong></a>
						<a href="https://www.elindependiente.com.ar/elindependiente/1.0" target="_blank" class="btn btn-outline-dark" >INGRESAR</a>

          
            <!--<div class="collapse" id="collapseExample">
              <div class="card mb-4">
                <h6 class="card-header">Buscar</h6>
                <div class="card-body">
                  <form method="get" action="seccion.php">
                    <div class="input-group">
                      <input type="search" class="form-control" placeholder="Buscar...">
                      <span class="input-group-btn">    
                        <button type="submit" name="buscar" class="btn btn-secondary">Ir</button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>-->
          </div>
        </div>

      </div><!-- /row-->
    </div><!-- /container-->
       
    
    <!-- Page Content -->
    <div class="container">
      <div class="row">

<!--- CONTENEDOR PRINCIPAL DE LA NOTICIA -->
        <div class="col-md-8">
				
			<?php 						
			if(($_GET["id"]>239921) && is_numeric($_GET["id"])){								
				include "noticias_html/noticia_".$_GET["id"].".php";
				include_once "resources/controller.php";
				$controlador->setClick("noticias",$id_noticia);
			}else{
				if(is_numeric($_GET["id"])){
					include "paginaDB_notice.php";
					include_once "resources/controller.php";
					$controlador->setClick("noticias",$id_noticia);
				}
			}
			?> 
			 
        </div>
        
	<!--CONTENEDOR SIDEBAR-->
        <div class="col-md-4">
	
          <!-- POPUP DE TAPA DEL DÍA -->
          
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAPA DEL DÍA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-header">   
                  <h6 class="modal-title" id="exampleModalLabel">Edición Nº: 22622 - 2020-03-31</h6>
                </div>
                <div class="modal-body">
                  <img src="../elindependiente/1.0/tapas/MARTES.jpg" alt="Tapa del Día" width="100%">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
				
          <!-- FIN POPUP DE TAPA DEL DÍA -->

          <div class="card mb-4">
            <h5 class="card-header" style="background-color:#016CA2; color: #F7F7F7">Tapa del día</h5>
            <div class="card-body">
              <a href="" data-toggle="modal" data-target="#exampleModal"><img class="card-img" src="../elindependiente/1.0/tapas/MARTES.jpg" /></a>             

            </div>
          </div>
          <!-- Fin Tapa del día -->
			<hr>
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- El Independiente -  Right Section -->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-8485196261787595"
					 data-ad-slot="4056491067"
					 data-ad-format="auto"
					 data-full-width-responsive="true"></ins>
				<script>
					 (adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<hr>
          <div class="col-md mb-3">
            
            <div class="card border-info">
              
            <h4 class="card-header">Más Leídas ...</h4>
                    		        <a href="pagina.php?id="><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/" alt=""></a>

		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-2">
		        			<span class="badge badge-primary">1.</span>
		        		</div>
		        		<div class="col-md-10">
		        			<a href="pagina.php?id="><p class="card-text"></p></a>
		        			<hr>
		        		</div>		        								        
					        
                                 	
			             </div> 	
              </div>
            </div>
          </div>
          
          <div class="card my-4">
            <h5 class="card-header" style="background-color: #016CA2; color: #F7F7F7">Últimas Noticias</h5>
            <div class="card-body">
                              <div class="row">    
                  <div class="col-md-12"> 
                    <a href="pagina.php?id=239924">
                      <h5>El streaming bajo la lupa de los productores de teatro comercial</h5>
                    </a>   
                  </div>
                </div>
                <hr>
                                <div class="row">    
                  <div class="col-md-12"> 
                    <a href="pagina.php?id=239924">
                      <h5>El streaming bajo la lupa de los productores de teatro comercial</h5>
                    </a>   
                  </div>
                </div>
                <hr>
                                <div class="row">    
                  <div class="col-md-12"> 
                    <a href="pagina.php?id=239923">
                      <h5>Son 24 las víctimas fatales y 966 los casos positivos de coronavirus</h5>
                    </a>   
                  </div>
                </div>
                <hr>
                                <div class="row">    
                  <div class="col-md-12"> 
                    <a href="pagina.php?id=239922">
                      <h5>El  24 de Marzo</h5>
                    </a>   
                  </div>
                </div>
                <hr>
                                <div class="row">    
                  <div class="col-md-12"> 
                    <a href="pagina.php?id=239921">
                      <h5>Cuba: cuatro muertos y 170 casos Confirmados</h5>
                    </a>   
                  </div>
                </div>
                <hr>
                                         
            </div>
          </div>
        </div>
        
<!-- FIN DE CONTENEDOR SIDEBAR -->
			
		<div class="col-md-12">
		<div class="card mb-4">
				<h5 class="card-header"><strong>Te puede Interesar</strong></h5>
			</div>
	          <div class="row">
	            		                 
	          </div>
          	<hr> 
          		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		style="display:block"
		data-ad-format="autorelaxed"
		data-ad-client="ca-pub-8485196261787595"
		data-ad-slot="5345665466">
		</ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
          <hr> 
		
		</div>
        
          <div class="col-md mb-3">
            
            <div class="card border-info">
              
            <h4 class="card-header">Policiales</h4>
                                <a href="pagina.php?id=239877"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/395709230.jpg" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=239877"><p class="card-text">Asisten a hombre que se habría accidentado en Juan Caro</p></a>
                  <hr>
                </div>                                    
                  
                                      <div class="col-md-10">                 
                      <a href="pagina.php?id=239867"><p class="card-text"> Choque entre dos motos dejó a sus conductores con lesiones</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239834"><p class="card-text"> Aclaran sobre el paso de seis colectivos por rutas riojanas</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239791"><p class="card-text"> Tras espectacular persecución detuvieron a un joven que se escondió en distintas casas</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239788"><p class="card-text"> Se demoraron a 51 personas por infringir el aislamiento social obligatorio</p></a>
                      <hr>
                      </div>  
                                        
                   </div>   
              </div>
            </div>
          </div>

          <div class="col-md mb-3">
            <div class="card border-info">
              
            <h4 class="card-header">Arte y Cultura</h4>
                                <a href="pagina.php?id=239803"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/791565587.jpg" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=239803"><p class="card-text">Tamara Tenembaum recomienda diez libros para leer "no tan concentrados"</p></a>
                  <hr>
                </div>                                    
                  
                                      <div class="col-md-10">                 
                      <a href="pagina.php?id=239649"><p class="card-text"> Gestionan acompañamiento financiero para artistas</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239644"><p class="card-text"> Lanzan un plan para la preservación del teatro independiente argentino</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239619"><p class="card-text"> Codo con codo, la poesía que leen alumnos durante el aislamiento</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239546"><p class="card-text"> Las pantallas pueden convertirse en un escenario teatral</p></a>
                      <hr>
                      </div>  
                                        
                   </div>   
              </div>
            </div>
          </div>

        <div class="col-md mb-3">
            <div class="card border-info">
              
            <h4 class="card-header">Deportes</h4>
                                <a href="pagina.php?id=239892"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/458904485.jpg" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=239892"><p class="card-text">Los Juegos Olímpicos de Tokio se disputarán del 23 de julio al 8 de agosto de 2021</p></a>
                  <hr>
                </div>                                    
                  
                                      <div class="col-md-10">                 
                      <a href="pagina.php?id=239859"><p class="card-text"> El gesto solidario de Carlos Zambrano en medio de la cuarentena</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239857"><p class="card-text"> Flor Meléndez dio positivo de coronavirus</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239855"><p class="card-text"> Lucía Fresco vivió una odisea para regresar al país desde Corea</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239798"><p class="card-text"> La llama olímpica estará un mes en exhibición en Fukushima</p></a>
                      <hr>
                      </div>  
                                        
                   </div>   
              </div>
            </div>
          </div>

                 <div class="col-md mb-3">
            <div class="card border-info">
              
            <h4 class="card-header">Nacionales</h4>
                                <a href="pagina.php?id=239923"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/233075036.jpg" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=239923"><p class="card-text">Son 24 las víctimas fatales y 966 los casos positivos de coronavirus</p></a>
                  <hr>
                </div>                                    
                   
                                      <div class="col-md-10">                 
                      <a href="pagina.php?id=239919"><p class="card-text"> Alberto Fernández recibió a representantes de la organización #SeamosUno</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239908"><p class="card-text"> Más de 7,9 millones de personas ya se inscribieron para percibir los $10.000</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239898"><p class="card-text"> Anses estima que el 15 de abril abonarán los 10 mil pesos del Ingreso Familiar</p></a>
                      <hr>
                      </div>  
                                            <div class="col-md-10">                 
                      <a href="pagina.php?id=239863"><p class="card-text"> Convocan a un "ruidazo" contra la violencia de género</p></a>
                      <hr>
                      </div>  
                                        
                   </div>   
              </div>
            </div>
          </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!--footer-->
<!--<div class="row footer1"> row --> 
<div class="container-fluid">
	<div class="footer1">
		<div class="container">
			<div class="row">

				<div class="col-lg col-md text-center"><!-- widgets column left -->
					<ul class="list-unstyled clear-margins"><!-- widgets -->
                    	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                            <a href="contacto.php" target="_blank">
								<h5><i class="far fa-address-card"></i> Lineas de Contacto</h5>
                            </a>
						</li>
                    </ul>
				</div>
				
				<div class="col-lg col-md text-center"><!-- widgets column center -->
					<ul class="list-unstyled clear-margins"><!-- widgets -->
						<li class="widget-container widget_recent_news"><!-- widgets list -->
							<a href="clasificados_rubros.php?rubro=3">
								<h5> <img src="img/icons/ico-house.png"> Inmuebles</h5>
							</a>
						</li>
					</ul>
				</div>
					
				<!-- columna 2 -->
				<div class="col-lg col-md text-center"><!-- widgets column left -->
					<ul class="list-unstyled clear-margins"><!-- widgets -->
						<li class="widget-container widget_nav_menu"><!-- widgets list -->
							<a href="clasificados_rubros.php?rubro=3">
								<h5><img src="img/icons/ico-car.png"> Automotor</h5>
							</a>
						</li>
                    </ul>
				</div><!-- widgets column left end -->
            
				<!-- columna 3 -->
				<div class="col-lg col-md text-center"><!-- widgets column left -->
					<ul class="list-unstyled clear-margins"><!-- widgets -->
                    	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                            <a href="http://www.streaminglocucionar.com.ar/portal/?p=8241" target="_blank">
								<h5> <img src="img/icons/ico-radio.png"> Radio 99.1</h5>
                            </a>
						</li>
                    </ul>
				</div><!-- widgets column left end -->

				<!-- columna 4 -->
				<div class="col-lg col-md text-center"><!-- widgets column left -->
					<ul class="list-unstyled clear-margins"><!-- widgets -->
                       	<li class="widget-container widget_nav_menu"><!-- widgets list -->
							<a href="https://www.google.com.ar/search?q=clima+en+la+rioja&ie=utf-8&oe=utf-8&client=firefox-b-ab&gfe_rd=cr&ei=VTcXWPTFGqTX8geC94DgAg">
								<h5> <img src="img/icons/ico-clima.png"> Clima</h5>
							</a>
						</li>
                    </ul>
				</div><!-- widgets column left end -->

				<!-- widgets column left end -->

			</div>
		</div><!--/row -->
	</div> <!--/div footer1 -->

 	<div class="row" style="background-color: #016CA2;">
 		<div class="col-md">
			<div class="copyright">
				© 2020, COPEGRAF LTDA. Todos los derechos reservados.
				<!--<ul class="list-inline">
				<li>Teléfono | (0380) 4-469666</li>
				<li>Domicilio | 9 de Julio 395</li>
				<li>Email | redacciondigital@elindependiente.com.ar</li>
				<li>© 2018, COPEGRAF LTDA. Todos los derechos reservados.</li>
				</ul>-->
			</div>
		</div>
		<div class="col-md">
			<div class="design">
				 <a href="#">El Independiente</a> |  <a target="_blank" href="http://www.woka.com.ar">Diseño y desarrollo WOKA</a>
			</div>
		</div>
	</div>
	
	
</div>	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
  </body>

</html>
