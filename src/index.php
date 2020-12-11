<!doctype html>
<html lang="en">
<head>
<link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<script src="http://vjs.zencdn.net/4.12/video.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-8485196261787595",
          enable_page_level_ads: true
     });
</script>

<!----desactivar popup----

<script>
   $(document).ready(function(){
      $('#myModalPopUp').modal('show');
   });
</script>   

<!--Activar modal popup inicial -->


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
    
    
	<title>Diario El Independiente :: Edición Digital </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="alternate" title="RSS" href="feed.xml" type="application/rss+xml" />

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

</head>

<body>
	  
    <?php include ('header.php');  ?> <!--Header-->


      <!--Seccion principal / 2 columnas-->
      <div class="container">
		<div class="row">
			<div class="col-md-12 mb-4 d-none d-md-block">
				<a href="https://karamsa.com/" target="_blank" onclick="foo(200)">
					<img alt="Pubicidad KARAM SA" class="img-fluid" src="img/publicidad/karam_banner_horizontal.gif">
				</a>
			</div>
			<div class="col-md-12 mb-4 d-md-none">
				<a href="https://karamsa.com/" target="_blank" onclick="foo(200)">
					<img alt="Pubicidad KARAM SA" class="cuadrado" src="img/publicidad/karam_banner_cuadrado.gif">
				</a>
			</div>
		</div> 
      </div>
      
      <div class="container">
        
        <div class="row">
		
          <div class="col-md-6 mb-4">
			<?php
			include_once '../resources/controller.php';
			$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,1,null,null,0,3);
			?>   
            <div class="fototop">
              <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top2" src="../elindependiente/1.0/img/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
              <div class="titulotop">
                <h5 class="card-header2 text-center">
                  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><?php echo $resultados1[0]['titulo'];?></a>
                </h5>
              </div>
            </div>
            <br><br><br>
          </div>  
          
          <div class="col-md-6 mb-6 ">
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,2,null,null,0,3);
			?>  
            <div class="row">  
              
              <div class="col-md mb-3 ">
                <div class="card1 h-100">
                  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top9" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
                    <div class="card-body-top">
                      <h5 class="card-title">
                        <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><?php echo $resultados1[0]['titulo'];?></a>
                      </h5>
                      
                      <ul class="list-inline">
                      	<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
                      	<a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>&amp;text=<?php echo $resultados1[0]['titulo'];?>"><i class="fab fa-twitter"></i></a>
                      	<a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[0]['id_noticia'];?>%20" target="_blank">
                		<i class="fab fa-whatsapp"></i></a>
                      </ul>
                    </div>
                </div>
              </div>
            
              <div class="col-md mb-3 ">
				<?php
				//include_once '../resources/controller.php';
				//$controlador= new controller('','');
				$resultados1=$controlador->getNoticia(null,1,3,null,null,0,3);
				?>  				  
                <div class="card1 h-100">
                  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top9" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
                    <div class="card-body-top">
                      <h5 class="card-title">
                        <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><?php echo $resultados1[0]['titulo'];?></a>
                      </h5>
                      
                      <ul class="list-inline">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
                      	<a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>&amp;text=<?php echo $resultados1[0]['titulo'];?>"><i class="fab fa-twitter"></i></a>
                      	<a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[0]['id_noticia'];?>%20" dtarget="_blank">
                		<i class="fab fa-whatsapp"></i></a>
                      </ul>
                    </div>
                </div>
              </div>
              
            </div>
            
          </div>    	 	  
			
        </div> <!-- /row -->
		
		<hr>

		<div class="row">
			<div class="col-md-8">
				<a href="https://www.larioja.gov.ar/" target="_blank" onclick="foo(17)">
					<!--<img alt="Publicidad Gobierno de LRJ" src="img/publicidad/logo-lrj-nvo.gif" class="leaderboard img-fluid">-->
					<img alt="Publicidad Gobierno de LRJ" src="img/publicidad/banner-gobierno-lrj.gif" class="leaderboard img-fluid">
				</a>
			</div>	
			<div class="col-md-4">
				<img alt="Publicidad Farmacias Arias" src="img/publicidad/farmacias-arias.gif" class="pmobile">
			</div>	
		</div>	
		<div class="row">
			<div class="col-md-4 mb-4" >
				<hr>
				<a href="https://bit.ly/3iu8ooE" target="_blank" onclick="foo(207)">
					<img alt="Telam - Nvas Medidas Aislamiento" class="rectangulomed" src="img/publicidad/Banweb_45millones_300x250.gif">
				</a>
				<!--	<img alt="publicidad" class="rectangulomed" src="img/publicidad/fangio-coleccion.jpeg"></img>-->
				<!--<a href="https://supermercadosvea.com.ar/" target="_blank" onclick="foo(203)">
					<img alt="SUPER VEA" class="rectangulomed" src="img/publicidad/Banner-VEA-300x250-Ads.gif">
				</a>-->
			</div>
			<div class="col-md-4 mb-4">
				<hr>
				<center>

				<!--<a href="https://supermercadosvea.com.ar/" target="_blank" onclick="foo(203)">
					<img alt="SUPER VEA" class="rectangulomed" src="img/publicidad/Banner-VEA-300x250-ElIndependientedeLaRioja.gif">
				</a>-->
				<ins class='dcmads' style='display:inline-block;width:300px;height:250px'
				data-dcm-placement='N1038067.3615495JG-ELINDEPENDIEN/B24515154.278743868'
				data-dcm-rendering-mode='iframe'
				data-dcm-https-only
				data-dcm-resettable-device-id=''
				data-dcm-app-id=''>
				<script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
				</ins>
				</center>
			</div>
			
			<div class="col-md-4 mb-4">
				<hr>
				<a href="http://www.frlr.utn.edu.ar/preinscripcion21e/" target="_blank" onclick="foo(105)">
					<img alt="Publicidad UTN" class="rectangulomed" src="img/publicidad/utn-ingreso2021.gif">
				</a>		
			</div>
			
			<!--<div class="col-md-4 mb-4 order-2">
				<hr>
				<a href="https://supermercadosvea.com.ar/" target="_blank" onclick="foo(203)">
					<img alt="SUPER VEA" class="rectangulomed" src="img/publicidad/Banner-VEA-300x250-Ads.gif">
				</a>
				<!--<a href="https://www.pami.org.ar/" target="_blank" onclick="foo(201)">
					<img alt="PAMI: Cuidado de adultos Mayores" class="rectangulomed" src="img/publicidad/PAMI-banner_cuidemos_jubilados-300x250.gif">
				</a>--
			</div>-->
			<!--<div class="col-md-3 mb-42">
				<hr>
				 <a href="https://bit.ly/3efRpnJ" target="_blank" onclick="foo(202)">
					  <img alt="Campaña LINEA 144" class="rectangulomed" src="img/publicidad/linea144.jpg">
				 </a>
				<!--<a href="https://bit.ly/3efRpnJ" target="_blank" onclick="foo(210)">
					<img alt="Publicidad VEA" class="rectangulomed" src="img/publicidad/publicidad-vea.gif">
				</a>-->

					<!--<video width="300" height="250" controls>
					  <source src="img/publicidad/publicidad1.mp4" type="video/mp4">
					  <source src="img/publicidad/publicidad1.ogg" type="video/ogg">
					Your browser does not support the video tag.
					</video> --
			</div>-->
		</div>
		
		<hr>
		<div class="row">
			<div class="col-md-12">
				<center><a href="https://www.bancorioja.com.ar" target="_blank" onclick="foo(113)">
					<img alt="Publicidad BCO RIOJA" class="img-fluid" src="img/publicidad/tesuperbanco_horizontal.gif">
				</a>
				</center>
			</div>
		</div>				
		<hr>
		
		<div class="row">
		
			<!--<div class="col-md mb-4">
				<a href="https://www.pami.org.ar/" target="_blank" onclick="foo(201)">
					<img alt="PAMI: Cuidado de adultos Mayores" class="rectangulomed" src="img/publicidad/PAMI-banner_cuidemos_jubilados-300x250.gif">
				</a>
			</div>-->
			
			<div class="col-md mb-4">
				<!--<script type='text/javascript' src='https://www.jgdigitalnet.com.ar/adserver/tracker.mod.php?id_espacio=51'></script>-->
				<!--<a href="https://www.bancorioja.com.ar" target="_blank" onclick="foo(113)"><img alt="Publicidad BCO RIOJA" class="img-fluid rectangulomed" src="img/publicidad/tesuperbanco_cuadrado.gif"></a>-->
				<a href="https://www.facebook.com/alto.24/" target="_blank" > 
					<img alt="A24" class="img-fluid" src="img/publicidad/a24-delivery.jpeg" >
				</a>
				<!--<a data-toggle="modal" data-target="#myModalPopUp" onclick="foo(53)">
					<img alt="Publicidad Cinemacenter" class="rectangulomed img-fluid" src="img/publicidad/cinema_nvo.jpg">
				</a>-->
			</div>
		
		<!-- The Modal -->
			  <a data-toggle="modal" data-target="#myModalPopUp">
			  <div class="modal fade" id="myModalPopUp">
				<div class="modal-dialog modal-dialog-centered">
				  <div class="modal-content">
				  
					<div class="modal-header">
						<h4>Mes Aniversario | Medios El Independiente</h4>
					   <button type="button" class="close" data-dismiss="modal">&times;</button>					   
					</div>
					
					<div class="modal-body">
						<img alt="Publicidad Aniversario" class="img-fluid" src="img/publicidad/jovita.jpg">
					<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/lT9iGWwYiqA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
					<!--<div class="embed-responsive embed-responsive-16by9">
					  <iframe width="600" height="400" src="https://www.youtube.com/embed/jT128NjqSRU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>-->
					
					  	<!--<a href="http://www.barcelo.edu.ar" target="_blank" onclick="foo(134)">-->
							<!--<img alt="Publicidad Univ. Barcelo" class="img-fluid" target="_blank" src="img/publicidad/barcelo_mayo.gif" width="100%">-->
							<!--<img alt="Banner Gobierno" class="img-fluid" target="_blank" src="img/publicidad/banner-gobierno.jpeg" width="100%">-->
						<!--</a>-->
					</div>
					
					<div class="modal-footer">
					  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					</div>
					
				  </div>
				</div>
			  </div>
		 <!-- The Modal -->			  

		 
			<div class="col-md mb-4">
					<a href="https://www.berlinmotors.com.ar/auto" target="_blank" onclick="foo(140)">
						<img alt="Publicidad BMW" class="cuadrado img-fluid" src="img/publicidad/berlin-motors-nvo.jpg">
					</a>
			</div>
		
			<div class="col-md mb-4">
			  <a href="https://ecogas.com.ar/appweb/leo/sec/ui-residenciales-fact-digital.php" target="_blank" onclick="foo(143)"> <!-- celi hasta el 24/09 foo142-->
					<img alt="Publicidad ECO Gas" class="img-fluid rectangulomed" src="img/publicidad/ecogas.gif">
				</a> 
			</div>
		
		</div>
		
	
		<!--<hr>
		

			<div class="col-md-12">
				<a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(144)">
					<img alt="Publicidad Internet Para Todos" class="leaderboard img-fluid" src="img/publicidad/ipt-horizontal-nvo.gif" >
				</a>
			</div>-->
		<hr>

		<!--<php include ('elecciones.php');  ?>
		<hr>-->

        <div class="row">
			<?php
			// '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,4,null,null,0,3);

			?>
			<div class="col-md-3 mb-4">
				<div class="card1 h-100">
				  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top3" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
				  <div class="card-body-bottomtop">
					<h5 class="card-title">
					  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
					  <?php echo $resultados1[0]['titulo'];?>
					  </a>
					</h5>
					<hr>
						<ul class="list-inline">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
                      	<a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>&amp;text=<?php echo $resultados1[0]['titulo'];?>"><i class="fab fa-twitter"></i></a>
						  <a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[0]['id_noticia'];?>%20" target="_blank">
                		<i class="fab fa-whatsapp"></i></a>
						</ul>
				  </div>
				</div>
			</div>
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,5,null,null,0,3);

			?>
			<div class="col-md-3 mb-4">
				<div class="card1 h-100">
				  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top3" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
				  <div class="card-body-bottomtop">
					<h5 class="card-title">
					  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
					  <?php echo $resultados1[0]['titulo'];?>
					  </a>
					</h5>
					<hr>
						<ul class="list-inline">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
                      	<a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>&amp;text=<?php echo $resultados1[0]['titulo'];?>"><i class="fab fa-twitter"></i></a>
						  <a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[0]['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
						</ul>
				  </div>
				</div>
			</div>
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,6,null,null,0,3);

			?>
			<div class="col-md-3 mb-4">
				<div class="card1 h-100">
				  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top3" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
				  <div class="card-body-bottomtop">
					<h5 class="card-title">
					  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
					  <?php echo $resultados1[0]['titulo'];?>
					  </a>
					</h5>
					<hr>
						<ul class="list-inline">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
                      	<a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>&amp;text=<?php echo $resultados1[0]['titulo'];?>"><i class="fab fa-twitter"></i></a>
						  <a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[0]['id_noticia'];?>%20" target="_blank">
                		<i class="fab fa-whatsapp"></i></a>
						</ul>
				  </div>
				</div>
			</div>
			
			<div class="col-md-3 mb-4">
				<!--<a href="http://www.barcelo.edu.ar" target="_blank" onclick="foo(134)"><img alt="Publicidad Univ. Barcelo" class="pmobile" src="img/publicidad/barcelo_nvo.gif"></a>-->
				<!--<a href="http://www.esteticaysaludbucal.com.ar/" target="_blank" onclick="foo(128)">
					  <img alt="Dr. Hicham Zeid" class="img-fluid rectangulomed" src="img/publicidad/drhichamzeid.gif">
					 <!--<img alt="Pubicidad BCO RIOJA" class="leaderboard img-fluid" src="img/publicidad/bancorioja_leaderboard.gif">--
				</a> <hr>-->
				<a href="https://universo-net.com.ar/#alta" target="_blank" onclick="foo(136)">
					<img alt="Publicidad UNIVERSO NET" class="rectangulomed img-fluid" src="img/publicidad/universonet.gif">
				</a>
				<hr>
				<a href="https://www.swissmedical.com.ar/smgnewsite/prepaga/solicite_un_asesor.php?utm_source=sitios-interior&utm_medium=banner&utm_campaign=Solicite-un-asesor" target="_blank" onclick="foo(88)">
					<img alt="Publicidad SwissMedical" class="cuadrado" src="img/publicidad/swissmedical-lrj.gif">
				</a>
				
			
			</div>
			         
        </div> <!-- /row -->
	
		<hr>
		<div class="row">  

			<div class="col-md-4 mb-4">            
				<a href="https://contenidos.21.edu.ar/landings/re3/programas/grado/licenciatura-en-publicidad-ed/?utm_source=mktOffline&utm_medium=bannerWeb&utm_campaign=2020_2aLaRioja&utm_term=publicidad" target="_blank" onclick="foo(206)">
					<img alt="Publicidad SIGLO XXI - Lic. en Publicidad" class="rectangulomed" src="img/publicidad/banner-sigloxxi-publicidad.jpg">
				</a>
			</div>
			<div class="col-md-4">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Adaptable HOME --GOOGLE ADSENSE-->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-8485196261787595"
					 data-ad-slot="1158555862"
					 data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>			
				<!--<img class="img-fluid rectangulomed" target="_blank" src="img/publicidad/coaching.jpeg">-->
			</div>
					  			
			<div class="col-md-4 mb-4">
				 <a href="http://www.metmedicinaprivada.com/landing-padres-noa" target="_blank" onclick="foo(148)">
					  <img alt="Pubicidad MET Medicina Privada" class="rectangulomed" src="img/publicidad/met_medicina_2020.gif">
				 </a>
			</div>

		</div>
		<hr>
		<div class="row">

			<div class="col-md-8 mb-4">
			<?php
				//include_once '../resources/controller.php';
				//$controlador= new controller('','');
				$resultados1=$controlador->getNoticia(null,1,7,null,null,0,3);
				?> 
				<h3><a href="#" class="text-info">#<?php echo $resultados1[0]['descripcion_secciones']?></a></h3>
				<a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><h1 class="text-center"><?php echo $resultados1[0]['titulo'];?></h1></a>
			
				<p class="blockquote-footer float-right"><cite title="Source Title"><?php echo $resultados1[0]['fecha']?></cite></p>			
			<br>
			
			</div>
			
			<div class="col-md-4 mb-4">
				 <a href="https://www.tesuperbanco.com.ar/" target="_blank" onclick="foo(113)">
					  <img alt="Pubicidad Te Súper Banco" class="rectangulomed" src="img/publicidad/tesuperbanco.gif">
				 </a>
			</div>

		</div>	 
        
        <hr>
        
	<div class="row">

	      <div class="col-md mb-4">            
				<a href="https://contenidos.21.edu.ar/landings/re3/programas/grado/escribania/?utm_source=mktOffline&utm_medium=bannerWeb&utm_campaign=2020_2aLaRioja&utm_term=escribania" target="_blank" onclick="foo(204)">
					<img alt="Publicidad SIGLO XXI - Escribania" class="rectangulomed" src="img/publicidad/banner-sigloxxi-escribania.jpg">
				</a>
		  </div>
	      
	      <!--<div class="col-md mb-4">            
				<!--<a href="https://www.facebook.com/elparquefutbol5lr/" target="_blank" onclick="foo(146)"><img alt="Publicidad El Parque Fútbol" class="img-fluid rectangulomed" src="img/publicidad/elparquefutbol.jpg"></a> hasta el 03/05/2020-->
				<!--<a href="https://www.bancorioja.com.ar" target="_blank" onclick="foo(113)"><img alt="Publicidad BCO RIOJA" class="img-fluid rectangulomed" src="img/publicidad/tesuperbanco_cuadrado.gif"></a>-->
				<!--<a href="http://johnsonfyf.com.ar/" target="_blank" onclick="foo(110)"><img alt="Publicidad JOHNSON" class="rectangulomed img-fluid" src="img/publicidad/banner-johnson.gif"></a>--
          </div>-->
          
          <div class="col-md mb-4">
			   	<!--<a href="http://nord.com.ar/" target="_blank" onclick="foo(70)">-->
			   	<a href="http://alambretejido.nord.com.ar/" target="_blank" onclick="foo(145)">
					<img alt="Publicidad 11" class="rectangulomed" src="img/publicidad/nordalambrados.jpg">
				</a>     	
				
          </div>
			
			<div class="col-md mb-4">
				<a href="http://www.larchilecito.com/" target="_blank" onclick="foo(147)">
					<img alt="Publicidad LAR Chilecito" class="rectangulomed" src="img/publicidad/lar-chilecito.png">
				</a>
				<!--<ins class='dcmads' style='display:inline-block;width:300px;height:250px'
					data-dcm-placement='N1038067.3615495JG-ELINDEPENDIEN/B23360652.258045637'
					data-dcm-rendering-mode='iframe'
					data-dcm-https-only
					data-dcm-resettable-device-id=''
					data-dcm-app-id=''>
					<script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
				</ins>-->
				<!--<a href="http://www.cinemacenter.com.ar/" target="_blank" onclick="foo(53)">
					<!--<img alt="Publicidad Cinemacenter" class="rectangulomed img-fluid" src="img/home/cinemacenternuevo.gif">-->
					<!--<img alt="Publicidad Cinemacenter" class="rectangulomed img-fluid" src="img/publicidad/cinemacenter-diadelnino.gif">--
					<img alt="Publicidad A24" class="rectangulomed" src="img/publicidad/a24.jpg">
					
				</a>-->
			</div>
		</div>        

		<hr>
		 
		<div class="row">

	      <div class="col-md mb-4">            
				<!--<script type='text/javascript' src='https://www.jgdigitalnet.com.ar/adserver/tracker.mod.php?id_espacio=51'></script> -->
				<center><a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(144)">
					<img alt="Pubicidad Internet Para Todos" class="img-fluid" src="img/publicidad/banner300x300-ipt.gif">
				</a></center>
		  </div>
		  	   		  
		  <div class="col-md mb-4"> 
				<center><a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(144)">
					<img alt="Pubicidad Internet Para Todos" class="img-fluid" src="img/publicidad/banner300x300_OpcionesPago.gif">
				</a></center>				
		  </div>
		  
		  <div class="col-md mb-4">
			   <center><img class="img-fluid" target="_blank" src="img/publicidad/tienda-animal.gif"></center>
		  </div>
	   
	     <div class="col-md mb-4">            
				<a href="https://contenidos.21.edu.ar/landings/re3/programas/grado/licenciatura-en-comercializacion-marketing/?utm_source=mktOffline&utm_medium=bannerWeb&utm_campaign=2020_2aLaRioja&utm_term=marketing" target="_blank" onclick="foo(205)">
					<img alt="Publicidad SIGLO XXI - Lic. en Mark. y Comerc." class="rectangulomed" src="img/publicidad/banner-sigloxxi-marketing.jpg">
				</a>
		 </div>
		  
		</div>


      </div> <!-- /container -->
      <!--FIN Seccion principal / 2 columnas-->

<!-- 1 título fila completa ---------------------------------------------------------------------     
      <!--Seccion un 1 título fila completa--
      
      <div class="container">
        <hr>
        <div class="row">
			//<php
			//***include_once '../resources/controller.php';
			//***$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,7,null,null,0,3);
			?> 
          
			<div class="col-md mb-4">			
				<h3><a href="#" class="text-info">#<php echo $resultados1[0]['descripcion_secciones']?></a></h3>
				<a href="pagina.php?id=<php echo $resultados1[0]['id_noticia'];?>"><h1 class="text-center"><php echo $resultados1[0]['titulo'];?></h1></a>
				<hr>
				<p class="blockquote-footer float-right"><cite title="Source Title"><php echo $resultados1[0]['fecha']?></cite></p>			
			</div>
			
        </div><!--/row--
        <hr>
      </div> <!--/container-->
      
      </div> <!--/container-->
      
      <!--FIN Seccion-->



<!----SECCION DESTACADA------------------------------------------------------------------->
  <?php include ('destacada.php');  ?>
<!----FIN SECCION DESTACADA----------------------------------------------------------------------------->

<!-- publicidad 3 columnas ---------------------------------------------------------------------

      <div class="container">        
        <hr>    
        <div class="row">

          <div class="col-md mb-4">
					<a data-toggle="modal" onclick="foo(135)" data-target="#myModal">
					  <img alt="Pubicidad UMAN" class="img-fluid" src="img/publicidad/uman_small.gif">
				  </a>
          </div>
          <div class="col-md mb-4">            
				<img alt="Preparo Alumnos" class="rectangulomed img-fluid" src="img/publicidad/preparo-alumnos.jpg">        
          </div>
          <div class="col-md mb-4">
				<a href="https://autocompirelli.com.ar/#!/-contacto-2/" target="_blank" onclick="foo(141)">
					<img alt="Publicidad AUTOCOM" class="rectangulomed img-fluid" src="img/publicidad/autocom_web.jpg">
				</a>
          </div>
        </div>
        
      </div>  
<!-- publicidad 3 columnas --------------------------------------------------------------------->

    <div class="container">
      <hr>
      <div class="row">
        
        
        <div class="col-md-6">

          <?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,8,null,null,0,3);
			?>
    		<h3 class="text-center"><a href="#" class="text-success">#<?php echo $resultados1[0]['descripcion_secciones']?></a></h3>
			<a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
				<h3 class="card-title text-center">
				<?php echo $resultados1[0]['titulo'];?>
				</h3>
			</a>
          <p class="blockquote-footer float-right"><cite title="Source Title"><?php echo $resultados1[0]['fecha'];?></cite></p>
          
        </div>
        
        <div class="col-md-6"> 
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticia(null,1,9,null,null,0,3);
			?>
    		<h3 class="text-center"><a href="#" class="text-success">#<?php echo $resultados1[0]['descripcion_secciones']?></a></h3>
			<a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
				<h3 class="card-title text-center">
				<?php echo $resultados1[0]['titulo'];?>
				</h3>
			</a>
          <p class="blockquote-footer float-right"><cite title="Source Title"><?php echo $resultados1[0]['fecha'];?></cite></p>
        </div>
        <hr>
        <!--<div class="col-md-3">
			<a href="https://autocompirelli.com.ar/#!/-contacto-2/" target="_blank" onclick="foo(141)">
				<img alt="Publicidad AUTOCOM" class="cuadrado" src="img/publicidad/autocom_web.jpg">
			</a>
			<!--<center>
			<a href="https://www.facebook.com/leutthe.oficial/" target="_blank" onclick="foo(137)">
				<img alt="Publicidad Le Utthe" class="img-fluid" src="img/publicidad/leutthe.jpg"> hasta el 05/07/19
			</a></center>
			<br>
			<a href="https://www.efectivosi.com.ar" target="_blank" onclick="foo(131)">
				<img alt="Efectivo SI" class="cuadrado" src="img/publicidad/efectivo_si_nvo.jpg"> hasta el 31/03/19
			</a>
        </div>-->

      </div>
      <hr>
      <div class="row">
		  <div class="col-md-8">
			<center>
				<a href="https://goo.gl/zfFtCD" target="_blank" onclick="foo(68)"><img alt="Pubicidad 4" class="leaderboard img-fluid" src="img/publicidad/osde_neo_octubre.gif" ></a>
			</center>
		  </div> 
          <div class="col-md-4">
          	<img alt="publicidad" class="img-fluid" src="img/publicidad/molino-harinero.jpg">
          </div>
      </div>
      
    </div><!--/container-->
    <!--FIN Seccion publicidad 1 columna-->

<!-------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------------------------------------------------->

		<!--Seccion 2 titulos 6x6--
    <div class="container">
      <hr>
      <div class="row">

        <!--<div class="col-md-4 mb-4 order-1">
          <!--<a href="http://karamsa.com.ar/" target="_blank" onclick="foo(111)"><img alt="Publicidad KARAM SA" class="cuadrado" src="img/publicidad/karam.gif"></a> hasta el 13/03/19--
          <a href="https://karamsa.com.ar" target="_blank" onclick="foo(133)"><img alt="Publicidad KARAM SA" class="pmobile" src="img/publicidad/karam_nvo.gif"></a> hasta el 03/10/19
        </div>--
                
      </div><!--/row--
      
    </div> <!--/container-->
    <!--FIN Seccion 2 titulos 6x6-->


<!------------------------------------------------------------------------------------------------------------------------------------>

<!------ SECCION: Radio 99.1------------------------------------------------------------------------------------------------------------------------------>

      <div class="container">
		  
		<!--<img class="img-fluid centrar2" src="img/home/radio-logo.jpg">-->
		<hr>	  
        <div class="row">
			
          <div class="col-md-5 mb-4"> 
			<!---modal-dialog-centered img class="pmobile" src="img/home/radio-logo.jpg">-->
				<!--<h1 class="mt-4 mb-4">-->
					<!--<small>Programación</small>-->
					<img class="img-fluid centrar2" src="img/home/radio-logo.jpg">
					<hr>
				<!--</h1>-->
				
			  <ul class="nav nav-tabs" id="myTab" role="tablist">
				<!--li class="nav-item">
				  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Domingo" role="tab" aria-controls="home" aria-selected="true">DOM</a>
				</li-->
				<li class="nav-item">
				  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Lunes" role="tab" aria-controls="home" aria-selected="true">LUN</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Martes" role="tab" aria-controls="contact" aria-selected="false">MAR</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Miercoles" role="tab" aria-controls="contact" aria-selected="false">MIE</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Jueves" role="tab" aria-controls="contact" aria-selected="false">JUE</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Viernes" role="tab" aria-controls="contact" aria-selected="false">VIE</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Sabado" role="tab" aria-controls="contact" aria-selected="false">SAB</a>
				</li>
			  </ul>
			   
			  <div class="tab-content float_box_radio" id="myTabContent">
						 
				<div class="tab-pane fade fade show active" id="Lunes" role="tabpanel" aria-labelledby="Lunes-tab">
					<h4 class="mt-4 mb-4"><small>07:00 a 09:00 | <b>Radio Noticias</b></small></h4>
					<h4 class="mt-4 mb-4"><small>09:00 a 13:00 | <b>Show de la Radio</b></small></h4>
					<h4 class="mt-4 mb-4"><small>14:00 a 16:00 | <b>Homero a la tarde</b></small></h4>
					<h4 class="mt-4 mb-4"><small>16:00 a 18:00 | <b>Sección Deportes</b></small></h4>
					<h4 class="mt-4 mb-4"><small>18:00 a 20:00 | <b>La Vuelta</b></small></h4>
					<h4 class="mt-4 mb-4"><small>20:00 a 22:00 | <b>Línea Privada</b></small></h4>
					<h4 class="mt-4 mb-4"><small>22:00 a 23:00 | <b>Equipo Diario</b></small></h4>							
				</div>

				<div class="tab-pane fade" id="Martes" role="tabpanel" aria-labelledby="Martes-tab">
					<h4 class="mt-4 mb-4"><small>07:00 a 09:00 | <b>Radio Noticias</b></small></h4>
					<h4 class="mt-4 mb-4"><small>09:00 a 13:00 | <b>Show de la Radio</b></small></h4>
					<h4 class="mt-4 mb-4"><small>14:00 a 16:00 | <b>Homero a la tarde</b></small></h4>
					<h4 class="mt-4 mb-4"><small>16:00 a 18:00 | <b>Sección Deportes</b></small></h4>
					<h4 class="mt-4 mb-4"><small>18:00 a 20:00 | <b>La Vuelta</b></small></h4>
					<h4 class="mt-4 mb-4"><small>20:00 a 22:00 | <b>Línea Privada</b></small></h4>
					<h4 class="mt-4 mb-4"><small>22:00 a 23:00 | <b>Equipo Diario</b></small></h4>
				</div>

				<div class="tab-pane fade" id="Miercoles" role="tabpanel" aria-labelledby="Miercoles-tab">
					<h4 class="mt-4 mb-4"><small>07:00 a 09:00 | <b>Radio Noticias</b></small></h4>
					<h4 class="mt-4 mb-4"><small>09:00 a 13:00 | <b>Show de la Radio</b></small></h4>
					<h4 class="mt-4 mb-4"><small>14:00 a 16:00 | <b>Homero a la tarde</b></small></h4>
					<h4 class="mt-4 mb-4"><small>16:00 a 18:00 | <b>Sección Deportes</b></small></h4>
					<h4 class="mt-4 mb-4"><small>18:00 a 20:00 | <b>La Vuelta</b></small></h4>
					<h4 class="mt-4 mb-4"><small>20:00 a 22:00 | <b>Línea Privada</b></small></h4>
					<h4 class="mt-4 mb-4"><small>22:00 a 23:00 | <b>Equipo Diario</b></small></h4>
				</div>

				<div class="tab-pane fade" id="Jueves" role="tabpanel" aria-labelledby="Jueves-tab">
					<h4 class="mt-4 mb-4"><small>07:00 a 09:00 | <b>Radio Noticias</b></small></h4>
					<h4 class="mt-4 mb-4"><small>09:00 a 13:00 | <b>Show de la Radio</b></small></h4>
					<h4 class="mt-4 mb-4"><small>14:00 a 16:00 | <b>Homero a la tarde</b></small></h4>
					<h4 class="mt-4 mb-4"><small>16:00 a 18:00 | <b>Sección Deportes</b></small></h4>
					<h4 class="mt-4 mb-4"><small>18:00 a 20:00 | <b>La Vuelta</b></small></h4>
					<h4 class="mt-4 mb-4"><small>20:00 a 22:00 | <b>Línea Privada</b></small></h4>
					<h4 class="mt-4 mb-4"><small>22:00 a 23:00 | <b>Equipo Diario</b></small></h4>
				</div>			

				<div class="tab-pane fade" id="Viernes" role="tabpanel" aria-labelledby="Viernes-tab">
					<h4 class="mt-4 mb-4"><small>07:00 a 09:00 | <b>Radio Noticias</b></small></h4>
					<h4 class="mt-4 mb-4"><small>09:00 a 13:00 | <b>Show de la Radio</b></small></h4>
					<h4 class="mt-4 mb-4"><small>14:00 a 16:00 | <b>Homero a la tarde</b></small></h4>
					<h4 class="mt-4 mb-4"><small>16:00 a 18:00 | <b>Sección Deportes</b></small></h4>
					<h4 class="mt-4 mb-4"><small>18:00 a 20:00 | <b>La Vuelta</b></small></h4>
					<h4 class="mt-4 mb-4"><small>20:00 a 22:00 | <b>Línea Privada</b></small></h4>
					<h4 class="mt-4 mb-4"><small>22:00 a 23:00 | <b>Equipo Diario</b></small></h4>

				</div>	

				<div class="tab-pane fade" id="Sabado" role="tabpanel" aria-labelledby="Sabado-tab">
					<h4 class="mt-4 mb-4"><small>09:00 a 12:00 | <b>Inolvidable</b></small></h4>
					<h4 class="mt-4 mb-4"><small>12:00 a 13:00 | <b>Economía Social</b></small></h4>
					<h4 class="mt-4 mb-4"><small>13:00 a 15:00 | <b>Música - Folklore Clásicos</b></small></h4>
					<h4 class="mt-4 mb-4"><small>18:30 a 20:00 | <b>4 Generaciones</b></small></h4>
					<h4 class="mt-4 mb-4"><small>20:00 a 24:00 | <b>Pedazo de Bestia</b></small></h4>								
				</div>																	
				
			 </div>
		  </div>

          <div class="col-md-7 mb-4 alert-danger">
	
			<h1 class="mt-4 mb-4">
				<small>Independiente TV | EN VIVO</small>
				<hr>
			</h1>
			
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaReducidaSliderUM(15,0,1,null,null,null,3);
			if(count($resultados1) > 0){
			?>
				<!-- RADIO 99.1 ONLINE Paste the following into the <head>  -->
				<?php echo $resultados1[0]['cuerpo'];?>
			<?php
			}else{
				echo('<div class="embed-responsive embed-responsive-16by9"><iframe style="border:solid #fff 5px;" width="620" height="380" src="https://www.youtube.com/embed/vK8eLEqWWag" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>');
				/*echo('<div><img src="img/home/enmienda27e.jpeg" class="mediapag img-fluid"></div>');*/
			}?>	
			<hr>

			
		  </div>
	
        </div>

        </div><!--row-->

        
      </div><!--/container-->

<!------ FIN SECCION: Radio 99.1 ------------------------------------------------------------------------------------------------------------------>


<!-- publicidad 3 columnas ---------------------------------------------------------------------

      <div class="container">        
        <hr>    
        <div class="row">

          <div class="col-md mb-4">
				<a href="https://autocompirelli.com.ar/#!/-contacto-2/" target="_blank" onclick="foo(141)">
					<img alt="Publicidad AUTOCOM" class="rectangulomed img-fluid" src="img/publicidad/autocom_web.jpg">
				</a>
          </div>
          <div class="col-md mb-4">            
				<a href="http://johnsonfyf.com.ar/" target="_blank" onclick="foo(110)"><img alt="Publicidad JOHNSON" class="rectangulomed img-fluid" src="img/publicidad/banner-johnson.gif"></a>
          </div>
          <div class="col-md mb-4">
			   	<a href="https://www.berlinmotors.com.ar/auto" target="_blank" onclick="foo(140)">
					<img alt="Publicidad BMW" class="rectangulomed img-fluid" src="img/publicidad/bmw_300x250.png">
			   	</a>
          </div>
        </div>
        <hr>
      </div>  
<!-- publicidad 3 columnas --------------------------------------------------------------------->
      
      
<!---------------INDEPENDIENTE TV PRODUCTORA Y CARTELERA ------------------------------------------------------------------------------------------>
<?php include('productora.php');?>
<!-------------------------INDEPENDIENTE TV PRODUCTORA Y CARTELERA 395------------------------------------------------------------------>
 
<!-----------------------POLICIALES---------------------------------------------------------------------------------------------------->
<?php include('policiales.php');?>
<!-----------------------POLICIALES--------------------------------------------------------------------------->

<!-- ----------SECCION POLÍTICA ----------------------------------------------------------->
      <!--Seccion 5 noticias con fototop-->
    <div class="container">
		
		<!--
		<hr>
		<div class="row">
			<div class="col-md-12 mb-4">
				<center><a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(144)">
					<img alt="Pubicidad Internet Para Todos" class="img-fluid" src="img/publicidad/ipt-horizontal-dia-mama.gif">
				</a></center>
			</div>
			<!--<div class="col-md-6 mb-4">
				<center><a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(144)">
					<img alt="Pubicidad Internet Para Todos" class="img-fluid" src="img/publicidad/ipt-servicios-interior.gif">
				</a></center>
			</div>--
		</div>
			<!--<center><a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(139)">
			  <img alt="Pubicidad Internet Para Todos" class="leaderboard img-fluid" src="img/publicidad/ipt-sorteo-horizontal.gif">
			</a></center>
			-->
		<hr>
		
		<a href="https://www.elindependiente.com.ar/seccion.php?seccion=1">
			<h1 class="mt-4 mb-4">Política
				<small>| Economía</small>
			</h1>
		</a>
		
      <div class="alert-danger">
        <hr>
      </div>
      <div class="row">

        <div class="col-md-6 mb-4 order-1">
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaSeccion(1,1,null,null,null,0,3);
			?> 
			<div class="card1 h-100">
            <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top2 " src="../elindependiente/1.0/img/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
            <div class="card-body">
				<h3 class="card-title">
					<a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
						<?php echo $resultados1[0]['titulo'];?>
					</a>
				</h3>
				<p class="card-title"><?php echo $resultados1[0]['copete'];?></p>
            </div>
          </div>
        </div>    
            
        <div class="col-md-6 mb-4 order-2">
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaReducidaSlider(1,1,4,null,null,null,3);
			foreach ($resultados1 as $row)
			{
			?>
          <div class="row">
            <div class="col-4 order-2"> 
              <img src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" class="img-chica img-fluid">    
            </div>
            <div class="col-8 order-1"> 
				<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
				  <h5 class="card-title">
					  <?php echo $row['titulo'];?>
				  </h5>
				</a>
              <p class="blockquote-footer text-center"><cite title="Source Title"><?php echo $row['fecha'];?></cite></p>
            </div>              
          </div><!--/row-->
          <hr>
          <?php
			}
          ?>
          
        </div>
      
      </div> <!-- /.row -->
      <hr>
    </div> <!-- /.container -->
      
<!--FIN Seccion 5 noticias con fototop-->

<!--------FIN SECCION POLITICA------------------------------------------------------------------------------------------>

<!--------PUBLICIDAD 3 cuadrado-----------------------------------------------------------------------------------------

      <div class="container">
       
        <div class="row">     
          <div class="col-md mb-4">
          	<a href="https://www.facebook.com/alto.24" target="_blank" onclick="foo(8)">
				<img alt="Publicidad 9" class="rectangulomed" src="img/publicidad/a24.jpg">
			</a>
          </div>
          
          <div class="col-md mb-4">
          	<!--<a href="http://fogaplar.com.ar" target="_blank" onclick="foo(34)">
				<img alt="Publicidad 10" class="rectangulomed" src="img/publicidad/fogaplar.gif">
			</a>-->
			<!--<a href="http://universo-net.com.ar/" target="_blank" onclick="foo(136)">
				<img alt="Publicidad UNIVERSO NET" class="rectangulomed img-fluid" src="img/publicidad/universo-net.jpg">
			</a> hasta 09/08/19--
          </div>
		  
		  <div class="col-md mb-4">
            <a href="http://nord.com.ar" target="_blank" onclick="foo(70)">
				<img alt="Publicidad 11" class="rectangulomed" src="img/publicidad/nordalambrados.jpg">
			</a>
          </div> 
        </div>
        <hr></hr>
      </div><!--/container-->

<!-----------------------------------------------------------------------------------------------------------------------> 

<!-----------------------DEPORTES---------------------------------------------------------------------------------------->
<?php include('deportes.php');?>
<!----------------FIN SECCION DEPORTES---------------------------------------------------------------------------------->

<!----------------SECCION SOCIEDAD-------------------------------------------------------------------------------------->

    <div class="container alert-warning">
    	<div class="card-header-sociedad">
    		<a href="https://www.elindependiente.com.ar/seccion.php?seccion=3">
    		<h1 class="text-center">Sociedad</h1>
    		</a>
	     </div>
	     <br>
      <div class="row">

        <div class="col-md-6 mb-4 order-2">
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaSeccion(3,1,null,null,null,0,3);
			?> 
			<div class="card1 h-100">
            <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top2 " src="../elindependiente/1.0/img/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
            <div class="card-body">
				<a href="#" class="text-secondary">#<?php echo $resultados1[0]['volanta']?></a>
				<h3 class="card-title">
					<a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
						<?php echo $resultados1[0]['titulo'];?>
					</a>
				</h3>
				<p class="card-title"><?php echo $resultados1[0]['copete'];?></p>
				<hr>
				<ul class="list-inline">
				  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
				  <a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>&amp;text=<?php echo $resultados1[0]['titulo'];?>"><i class="fab fa-twitter"></i></a>
				  <a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[0]['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
				</ul>
            </div>
          </div>
        </div>    
            
        <div class="col-md-6 mb-4 order-1">
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaReducidaSlider(3,1,4,null,null,null,3);
			foreach ($resultados1 as $row)
			{
			?>
          <div class="row">
            <div class="col-4 order-2">
              <img src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" class="img-chica-sociedad img-fluid">    
            </div>
            <div class="col-8 order-1"> 
				<a href="#" class="text-secondary">#<?php echo $row['volanta']?></a>
				<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
				  <h5 class="card-title">
					  <?php echo $row['titulo'];?>
				  </h5>
				</a>
              	<p class="blockquote-footer"><cite title="Source Title"><?php echo $row['fecha'];?></cite></p>
            </div>              
          </div><!--/row-->
          <hr>
          <?php
			}
          ?>
          
        </div>
      
      </div> <!-- /.row -->

  		<div class="alert-warning-fin">
			<hr>
		</div>
		
    </div> <!-- /.container -->
      
<!--FIN Seccion 5 noticias con fototop-->

<!-------------------------------------------------------------------------------------------------->



<!-- publicidad 3 columnas --------------------------------------------------------------------->

      <div class="container">
        <div class="row">		
   
          <!--<div class="col-md mb-4">
              <a href="http://confina.net/" target="_blank" onclick="foo(48)"><img alt="Publicidad Confina crédito" class="pmobile" src="img/home/confina.gif"></a>
          </div>-->
          <div class="col-md mb-4">
			<!--<a href="https://iparatodos.com.ar/" target="_blank" onclick="foo(130)"><img alt="Pubicidad ViewTV" class="mediapag img-fluid" src="img/publicidad/viewtv_promomarzo19.gif"></a>-->
			<!--<a href="https://iparatodos.com.ar/" target="_blank" onclick="foo(139)"><img alt="Publicidad Internet Para Todos" class="mediapag img-fluid" src="img/publicidad/ipt-horizontal.gif"></a>-->
			<!--<a href="https://www.larioja.gov.ar/" target="_blank" onclick="foo(17)">
				<img alt="Publicidad Gobierno de LRJ" src="img/publicidad/logo-lrj.png" class="img-fluid pmobile">
			</a>-->
          </div>
          
          <!--<div class="col-md-3 mb-4">            
            <a href="http://www.ajalar.com.ar/" target="_blank" onclick="foo(89)"><img alt="Publicidad Ajalar" class="pmobile img-fluid" src="img/home/ajalar.gif"></a> <!--hasta el 25/03, de nvo 18/04--
          </div>-->
          <!--<div class="col-md mb-4">
            <!--<a href="mailto:comunicacion@colcarcordoba.com.ar" target="_blank" onclick="foo(75)"><img alt="Publicidad Colcar" class="pmobile" src="img/home/colcar.gif"></a> hasta el 02/08/2018--
			<a href="http://www.economiariojana.com.ar" target="_blank" onclick="foo(22)"><img alt="Publicidad Economia Riojana" class="pmobile img-fluid" src="img/publicidad/economia1.png"></a>
          </div>-->
          
          <div class="col-md mb-4">
     		<a href="http://www.ajalar.com.ar/" target="_blank" onclick="foo(89)">
				<img alt="Publicidad Ajalar" class="pmobile" src="img/home/ajalar.gif">
			</a> <!--hasta el 25/03, de nvo 18/04-->
		  </div>
		  
		  <div class="col-md mb-4">
			<a href="http://www.cpcelr.org.ar/" target="_blank" onclick="foo(112)">
				<img alt="Publicidad CPCE" class="pmobile" src="img/publicidad/cpce.png">
			</a>
		  </div>
        
        </div>
        <hr>
      </div> 
<!-- publicidad 3 columnas --------------------------------------------------------------------------------------------------->


<!----------------- SECCIÓN CULTURA-------------------------------------------------------------------------------------------> 
<div class="container">
  <div class="alert-success">
    <hr>
    <a href="https://www.elindependiente.com.ar/seccion.php?seccion=8">
		<h1 class="left"> Arte
			<small>| Cultura </small>
		</h1>
	</a>
  </div>

  <div class="row">
	  	<?php
		//include_once '../resources/controller.php';
		//$controlador= new controller('','');
		$resultados1=$controlador->getNoticiaSeccion(8,2,null,null,null,0,3);
		?> 
		<?php
		foreach ($resultados1 as $row)
		{
		?> 
    <div class="col-md-6 mb-4">
		<div class="card1 h-100">
	    <a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><img class="card-img-top2 " src="../elindependiente/1.0/img/<?php echo $row['ruta'];?>" alt=""></a>
	    <div class="card-body">
			<h3 class="card-title">
				<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
					<?php echo $row['titulo'];?>
				</a>
			</h3>
			<p class="card-title"><?php echo $row['copete'];?></p>
			<hr>
	        <ul class="list-inline">
	          <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
	          <a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>&amp;text=<?php echo $row['titulo'];?>"><i class="fab fa-twitter"></i></a>
	          <a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $row['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>

	        </ul>
	    </div>
	  </div>
    </div>
    <?php
	}
	?>
 
		<!--<div class="col-md-12 mb-4">
			<a href="https://iparatodos.com.ar/" target="_blank" onclick="foo(130)"><img alt="Pubicidad ViewTV" class="mediapag img-fluid" src="img/publicidad/viewtv_promomarzo19.gif"></a> <!--promoenero hasta el 08-03-19 foo(125)--
		</div>--> 
  </div><!--/row1-->

  <hr>
    
  <div class="row">
	<?php
	//include_once '../resources/controller.php';
	//$controlador= new controller('','');
	$resultados1=$controlador->getNoticiaReducidaSlider(8,2,3,null,null,null,3);
	?>
	<?php
	foreach ($resultados1 as $row)
	{
	?> 
    <div class="col-md mb-4">

      <div class="card1 h-100">
        <div class="card-header card-body-bottomshow">
          <a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><h5 class="card-title"><?php echo $row['titulo'];?></h5></a>
        </div>
        <div class="card-body">
          <a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><img class="card-img-top3" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" alt="Foto" ></a>
        </div>
      </div>
	
    </div>  
    	<?php
	}
	?>

  </div><!--/row2-->

</div><!--/container-->
<!----------------- FIN SECCIÓN CULTURA---------------------------------------------------------------------------------------------->


<!-------------SECCION NACIONALES------------------------------------------------------------------------------------------------------------------>

		<div class="container alert-info">
		      <a href="https://www.elindependiente.com.ar/seccion.php?seccion=5">
		      <h1 class="mt-2 mb-4 left">Nacionales</h1>
		      </a>
			<div class="row float_box_nacionales">
				
				<?php
				//include_once '../resources/controller.php';
				//$controlador= new controller('','');
				$resultados1=$controlador->getNoticiaReducidaSlider(5,0,3,null,null,null,3);
				?>
				<div class="col-md-6 mb-6">
				<?php
				foreach ($resultados1 as $row)
				{
				?>
					<div class="row">
						<div class="col-md-7 card-body-mundial">
							<a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><h5 class="card-title"><?php echo $row['titulo'];?></h5></a>
							<hr>
							<ul class="list-inline">
							  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
							  <a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>&amp;text=<?php echo $row['titulo'];?>"><i class="fab fa-twitter"></i></a>
							  <a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $row['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
							</ul>
						</div>
						<div class="col-md-5">
							<img class="card-img-top5" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>">    
						</div>              
					</div>
					<hr>
					
				<?php
				}
				?>
				</div>
				
				<?php
				//include_once '../resources/controller.php';
				//$controlador= new controller('','');
				$resultados1=$controlador->getNoticiaReducidaSlider(5,3,3,null,null,null,3);
				?>
				<div class="col-md-6 mb-6">
				<?php
				foreach ($resultados1 as $row)
				{
				?>
					<div class="row">
						<div class="col-md-7 card-body-mundial order-2">
							<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
								<h5 class="card-title"><?php echo $row['titulo'];?></h5>
							</a>
							<hr>
							<ul class="list-inline">
							  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
							  <a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>&amp;text=<?php echo $row['titulo'];?>"><i class="fab fa-twitter"></i></a>
							  <a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $row['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
							</ul>
						</div>
						<div class="col-md-5 order-1">
							<img class="card-img-top5" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>">    
						</div>              
					</div>
					<hr>
					
				<?php
				}
				?>
				</div>

				
			</div>
			
		</div>

<!------------------------------------------------------------------------------------------------------------------------------->



<!-- --------------------------------------------------------------------->
      <!--Seccion 5 noticias con fototop-->
    <div class="container">
      <a href="https://www.elindependiente.com.ar/seccion.php?seccion=11">
	      <h1 class="mt-4 mb-4">Mundo
	        <small>| Internacionales</small>
	      </h1>
      </a>
      <div class="alert-danger">
        <hr>
      </div>
      <div class="row">

        <div class="col-md-6 mb-4 order-2">
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaSeccion(11,1,null,null,null,0,3);
			?> 
			<div class="card1 h-100">
            <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top2 " src="../elindependiente/1.0/img/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
            <div class="card-body">
				<h3 class="card-title">
					<a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>">
						<?php echo $resultados1[0]['titulo'];?>
					</a>
				</h3>
				<p class="card-title"><?php echo $resultados1[0]['copete'];?></p>
            </div>
          </div>
        </div>    
            
        <div class="col-md-6 mb-4 order-1">
			<?php
			//include_once '../resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaReducidaSlider(11,1,4,null,null,null,3);
			foreach ($resultados1 as $row)
			{  
			?>
          <div class="row">
            <div class="col-4 order-1"> 
              <img src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" class="img-chica img-fluid">    
            </div>
            <div class="col-8 order-2"> 
				<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
				  <h5 class="card-title-responsive">
					<?php echo $row['titulo'];?>
				  </h5>
				</a>
              <p class="blockquote-footer"><cite title="Source Title"><?php echo $row['fecha'];?></cite></p>
            </div>              
          </div><!--/row-->
          <hr>
          <?php
			}
          ?>
          
        </div>
      
      </div> <!-- /.row -->
      <hr>
    </div> <!-- /.container -->
      
<!--FIN Seccion 5 noticias con fototop-->

<!-------------------------------------------------------------------------------------------------->


<!---------SECCIÓN SHOW---------------------------------------------------------------------------------------------------------------------->

<div class="container">
  <div class="alert-info">
    <hr>
    <a href="https://www.elindependiente.com.ar/seccion.php?seccion=13">
		<h1 class="left">Show <small>| Espectáculos</small></h1>
    </a>
  </div>

  <div class="row">
    <?php
	//include_once '../resources/controller.php';
	//$controlador= new controller('','');
	$resultados1=$controlador->getNoticiaReducidaSlider(13,0,4,null,null,null,3);
	?>
	<?php
	foreach ($resultados1 as $row)
	{
	?> 
    <div class="col-md mb-4 text-center">

      <div class="card1 h-100">
        <div class="card-header-show card-body-bottomtop">
          <a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><h5 class="card-title"><?php echo $row['titulo'];?></h5></a>
          <!--<a href="#"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4></a>-->
        </div>
        <div class="card-body">
          <a href="#"><img class="card-img-top3" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" alt="" ></a>
        </div>
      </div>
	
    </div>  
    	<?php
	}
	?>
 
  </div><!--/row1--> 
</div><!--/container-->

<!------------------------------------------------------------------------------------------------------------------------------->

 
<!------------------------------------------------------------------------------------------------------------------------------->

    <div class="container">
		<hr>
		<div class="row col-md-12">
			
			<!--<div class="col-md-9 mb-4">	-->
				<div class="row">		
					<div class="col-md-6 mb-4">
						<h5 class="card-header">Más Leídas</h5>
						<br>
					
					<hr>
							<?php
							//$controlador= new controller('',''); 
							$masleidas=$controlador->getNoticiasMasLeidas(null,3,null,null,null,3);
							if(count($masleidas>0))
							{
							foreach ($masleidas as $ml) 
								{
								$numero=$numero + 1;
							?>
							<div class="row">    
							  <div class="col col-sm col-md">
								<span class="badge badge-primary">
								  <?php echo $numero;?></span>
							  </div>
							  <div class="col-5 col-sm-5 col-md-5">
							  	<a href="pagina.php?id=<?php echo $ml['id_noticia'];?>">
								  <h6><?php echo $ml['titulo'];?></h6>
								</a>	   
							  </div>
							  <div class="col-5 col-sm-5 col-md-5"> 
								<img src="../elindependiente/1.0/img/thumb/<?php echo $ml['ruta'];?>" class="img-chica img-fluid">   
							  </div>
							</div>
							<hr>
							<?php 
								}
							}?>

					</div>
					
					<div class="col-md-6 mb-4">
					  <h5 class="card-header">Últimas Noticias</h5>
					  <div class="card-body">
						<?php
						//$controlador= new controller('',''); 
						$un=$controlador->getNoticiaReducida(null,5,null,null,null,3);
						foreach ($un as $ultimas) 
						{
						?>
						<div class="row">    
						  <div class="col-md">
						  <a href="pagina.php?id=<?php echo $ultimas['id_noticia'];?>">
							<h5><?php echo $ultimas['titulo'];?></h5>
						  </a>
							<!--<p class="blockquote-footer">fecha</cite></p>-->
						  </div>
						</div>
						<hr>
						<?php 
						  }
						?>          
								
					  </div>
					</div>
					
				<!--</div>-->
			</div>
				
			<!--<div class="col-md-3 mb-4">        
				
				<!--<center><a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(139)">
				  <img alt="Pubicidad Internet Para Todos" class="img-fluid" src="img/publicidad/ipt-sorteo-vertical.gif">
				</a></center>-->
				
				<!--<a href="https://www.iparatodos.com.ar/" target="_blank" onclick="foo(139)">
				  <img alt="Pubicidad Internet Para Todos" class="rectangulomed" src="img/publicidad/ipt-vertical.gif">
				</a>
				<hr>
				<a href="http://www.ajalar.com.ar/" target="_blank" onclick="foo(89)">
					<img alt="Publicidad Ajalar" class="pmobile" src="img/home/ajalar.gif">
				</a>
				<hr>
				<a href="http://www.cpcelr.org.ar/" target="_blank" onclick="foo(112)"><img alt="Publicidad CPCE" class="pmobile" src="img/publicidad/cpce.png"></a>--
			</div>-->
			
		</div>

    </div><!--/container-->

<!-------------------------------------------------------------------------------------------------------------------------------		
	<div class="container">
      	<div class="row">
			<div class="col-md-12">
				<center><img alt="Pubicidad Gimnasia Artística" class="img-fluid" src="img/publicidad/gimnasia_artistica.jpg">
			</center>
			</div>
		</div>
	</div>

<!--------PUBLICIDAD 3 cuadrado-----------------------------------------------------------------------------------------------------------------------

      <div class="container">
       <hr>
        <div class="row">     
          <div class="col-md mb-4">
          	<a href="https://www.changomas.com.ar/" target="_blank" onclick="foo(64)"><img alt="Publicidad Changomas" class="rectangulomed" src="img/publicidad/changomas.jpg"></a>
          </div>
          
          <div class="col-md mb-4">
          	<a href="http://fogaplar.com.ar/site/" target="_blank" onclick="foo(132)">
				<img alt="Fogaplar Institucional" class="rectangulomed" src="img/publicidad/fogaplar_bco_rioja.gif"> <!--desde el 13/03/19---<br>
			</a>
          	<!--<a href="#" target="_blank" onclick="foo(11)"><img alt="Publicidad Zonas Aridas Alimento" class="rectangulomed" src="img/publicidad/zonas_aridas.gif"></a> hasta el 25/03/19--
          </div>
		  
		  <div class="col-md mb-4">
            <a href="http://www.expresodiemar.com/" target="_blank" onclick="foo(91)"><img  alt="Publicidad Expreso Diemar" class="rectangulomed" src="img/publicidad/diemar.jpg"></a>
          </div> 
        </div>
        <hr>
      </div><!--/container-->

<!-- ------------------------------------------------------------------ --> 



<!-- ----------SECCION OPINIÓN-------------------------------------------------------- --> 

<div class="container">
	  <a href="https://www.elindependiente.com.ar/seccion.php?seccion=12">
	  <h1 class="mt-4 mb-4">Opinión
		<small>| artículos de opinión</small>
	  </h1>
	  </a>
	  <div class="alert-success">
		<hr>
	  </div>	
      
      <div class="row">     
		
		<?php
		//include_once '../resources/controller.php';
		//$controlador= new controller('','');
		$resultados1=$controlador->getOpinologos();
		?>
		<?php
		foreach ($resultados1 as $row)
		{
		?>
		<div class="col-md mb-3">
			<div class="card1 h-100">
				<div class="card-img-top4 opinion1">
					<img src="../elindependiente/1.0/img/<?php echo $row['ruta'];?>" alt="..." class="rounded-circle rightopinion">
				</div>
				<div class="card-body">
					<h5 class="card-title text-center">
					<a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><?php echo $row['titulo'];?></a>
					</h5>
					<p class="blockquote-footer float-right"><cite title="Source Title"><?php echo $row['razon_social'];?></cite></p>
				</div>
				<div class="card-footer text-muted">
					<ul class="list-inline">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
						<a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $row['id_noticia'];?>&amp;text=<?php echo $row['titulo'];?>"><i class="fab fa-twitter"></i></a>
						<a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $row['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
					</ul>
				</div>
			</div>
		</div>
		<?php
		}
		?>	
          
      </div><!--/row-->


    </div><!--/container-->

<!-- ------------------------------------------------------------------ --> 

 
   <!-- </div>  /.container-fluid GRAL -->
    
    <?php include('footer.php');?>
<script src="//rum-static.pingdom.net/pa-5ca28f731872b50016000ac7.js" async></script>
</body>
