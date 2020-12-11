
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
          <?php
          $fecha= date('Y-m-d');
          
           // $fecha= date('Y-m-d',strtotime($fecha2."- 1 days")); 
          
          include_once '../resources/controller.php';
          $controlador= new controller('','');
          $resultados1=$controlador->getTapa($fecha);
          ?>

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
                  <h6 class="modal-title" id="exampleModalLabel">Edici&oacute;n Nro: <b><?php echo $resultados1[0]['numero'].'</b> - '.$fecha;?></h6>
                </div>
                <div class="modal-body">
                  <img src="../elindependiente/1.0/tapas/<?php echo $resultados1[0]['pdf_tapa'];?>" alt="Tapa del D�a" width="100%">
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
        <a class="navbar-brand version-2" href="index.php"><img src="img/logomin2.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secciones</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <?php 
                include_once '../resources/controller.php';
                  $controlador=new controller('','');
                  $resultados1=$controlador->getSecciones(null,12,3);
                    foreach ($resultados1 as $row)
                    {
                    ?>
                    <a class="dropdown-item" href="seccion.php?seccion=<?php echo $row['id_seccion'];?>&pagina=0"><?php echo $row['descripcion'];?></a>
                    <?php
                    }
                    ;?>
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
					<!--Jueves, 13 de Agosto de 2020-->
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
