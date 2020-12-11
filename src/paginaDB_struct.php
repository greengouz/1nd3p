<!DOCTYPE html>
<html lang="es_LA">

  <head>
		<?php 
			//$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
			//$fecha_entrada = strtotime("30-03-2020 21:00:00");			
			//if(($fecha_actual > $fecha_entrada) && is_numeric($_GET['id']){				
			echo '	
			<?php 	
			
			$id_noticia = $_GET["id"];
			include_once "resources/controller.php";	
			$controlador= new controller("","");				
			if(($_GET["id"]>=239890) && is_numeric($_GET["id"])){					
				include "noticias_html/header_".$_GET["id"].".php";
			}else{
				include "paginaDB_header.php";
			}
			?> 
			';
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


    <?php include 'header.php';?>       
    
    <!-- Page Content -->
    <div class="container">
      <div class="row">

<!--- CONTENEDOR PRINCIPAL DE LA NOTICIA -->
        <div class="col-md-8">
			<?php 
			//$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
			//$fecha_entrada = strtotime("30-03-2020 21:00:00");			
			//if(($fecha_actual > $fecha_entrada) && is_numeric($_GET['id']){							
			echo '	
			<?php 						
			if(($_GET["id"]>=239890) && is_numeric($_GET["id"]) && ($_GET["id"]<>246222)){								
				include "noticias_html/noticia_".$_GET["id"].".php";
				include_once "resources/controller.php";
				$controlador->setClick("noticias",$id_noticia);
			}else{
				if(is_numeric($_GET["id"]) && ($_GET["id"]<>246222)){
					include "paginaDB_notice.php";
					include_once "resources/controller.php";
					$controlador->setClick("noticias",$id_noticia);
				}
			}
			?> 
			';
			?> 
        </div>
        
	<!--CONTENEDOR SIDEBAR-->
        <div class="col-md-4">
	
          <!-- POPUP DE TAPA DEL DÍA -->
          <?php
          $fecha= date('Y-m-d');
          //$fecha= date('Y-m-d',strtotime($fecha2."- 1 days")); 
          include_once 'resources/controller.php';
          //$controlador= new controller('','');
          $resultados1=$controlador->getTapa($fecha);
          ?>

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
                  <h6 class="modal-title" id="exampleModalLabel">Edición Nº: <?php echo $resultados1[0]['numero'].' - '.$fecha;?></h6>
                </div>
                <div class="modal-body">
                  <img src="../elindependiente/1.0/tapas/<?php echo $resultados1[0]['pdf_tapa'];?>" alt="Tapa del Día" width="100%">
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
              <a href="" data-toggle="modal" data-target="#exampleModal"><img class="card-img" src="../elindependiente/1.0/tapas/<?php echo $resultados1[0]['pdf_tapa'];?>" /></a>             

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
                <?php
                //$controlador= new controller('',''); 
                $masleidas=$controlador->getNoticiasMasLeidas(null,1,null,null,null,3);
                ?>
    		        <a href="pagina.php?id=<?php echo $masleidas[0]['id_noticia'];?>"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/<?php echo $masleidas[0]['ruta'];?>" alt=""></a>

		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-2">
		        			<span class="badge badge-primary">1.</span>
		        		</div>
		        		<div class="col-md-10">
		        			<a href="pagina.php?id=<?php echo $masleidas[0]['id_noticia'];?>"><p class="card-text"><?php echo $masleidas[0]['titulo'];?></p></a>
		        			<hr>
		        		</div>		        								        
					        
                <?php
				        //$controlador= new controller('',''); 
				        $masleidas2=$controlador->getNoticiasMasLeidas(null,5,null,null,null,3);
				        $numero=1;
				          if(count($masleidas>0))
					        	{
					        	foreach ($masleidas2 as $ml2) 
					        	{
                          $num=$num + 1;
                        if ($num!=1) 
                        {
                        $numero=$numero + 1;
			              	  ?>
			              	<div class="col-md-2">
			              		<span class="badge badge-primary"><?php echo $numero;?>.</span>
			              	</div>
			              	<div class="col-md-10">				          
			                <a href="pagina.php?id=<?php echo $ml2['id_noticia'];?>"><p class="card-text"> <?php echo $ml2['titulo'];?></p></a>
			                <hr>
			                </div>	
			                <?php
                      } 
			              }
			             }?>                 	
			             </div> 	
              </div>
            </div>
          </div>
          
          <div class="card my-4">
            <h5 class="card-header" style="background-color: #016CA2; color: #F7F7F7">Últimas Noticias</h5>
            <div class="card-body">
              <?php
            //$controlador= new controller('',''); 
            
            $un=$controlador->getNoticiaReducida(null,5,null,null,null,3);
            foreach ($un as $ultimas) 
            {
              $numero1=$numero1 + 1;
              ?>
                <div class="row">    
                  <div class="col-md-12"> 
                    <a href="pagina.php?id=<?php echo $ultimas['id_noticia'];?>">
                      <h5><?php echo $ultimas['titulo'];?></h5>
                    </a>   
                  </div>
                </div>
                <hr>
                <?php }?>                         
            </div>
          </div>
        </div>
        
<!-- FIN DE CONTENEDOR SIDEBAR -->
			
		<div class="col-md-12">
		<div class="card mb-4">
				<h5 class="card-header"><strong>Te puede Interesar</strong></h5>
			</div>
	          <div class="row">
	            <?php
	            //include_once 'resources/controller.php';
	            //$controlador= new controller('','');
	            $rs=$controlador->getNoticiasMasLeidas(null,6,null,null,null,3);
	            
	            if(count($rs) > 0){
	            foreach ($rs as $row)
	              {
	            ?> 
	              	
	            <div class="col-md-3 mb-3">
	          		<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
	            		<img class="img-chica" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" alt="">
	          		</a>
	        	  </div>
	        	  <div class="col-md-3 mb-3">
	          		  <a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><p><?php echo $row['titulo'];?></p></a>
	          		</div>

	            <?php }
	              }
	            ?>
		                 
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
                <?php
                //$controlador= new controller('',''); 
                $policiales=$controlador->getNoticiaReducida(2,5,null,null,null,3);
                ?>
                <a href="pagina.php?id=<?php echo $policiales[0]['id_noticia'];?>"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/<?php echo $policiales[0]['ruta'];?>" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=<?php echo $policiales[0]['id_noticia'];?>"><p class="card-text"><?php echo $policiales[0]['titulo'];?></p></a>
                  <hr>
                </div>                                    
                  
                <?php
                //$controlador= new controller('',''); 
                //$policiales2=$controlador->getNoticiaReducida(2,5,null,null,null,3);
                $num=0;
                  if(count($policiales>0))
                    {
                    foreach ($policiales as $pol2) 
                    {
                        $num=$num + 1;
                        if ($num!=1) 
                        {
                        ?>
                      <div class="col-md-10">                 
                      <a href="pagina.php?id=<?php echo $pol2['id_noticia'];?>"><p class="card-text"> <?php echo $pol2['titulo'];?></p></a>
                      <hr>
                      </div>  
                      <?php
                      } 
                    }
                   }?>                  
                   </div>   
              </div>
            </div>
          </div>

          <div class="col-md mb-3">
            <div class="card border-info">
              
            <h4 class="card-header">Arte y Cultura</h4>
                <?php
                //$controlador= new controller('',''); 
                $cultura=$controlador->getNoticiaReducida(8,5,null,null,null,3);
                ?>
                <a href="pagina.php?id=<?php echo $cultura[0]['id_noticia'];?>"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/<?php echo $cultura[0]['ruta'];?>" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=<?php echo $cultura[0]['id_noticia'];?>"><p class="card-text"><?php echo $cultura[0]['titulo'];?></p></a>
                  <hr>
                </div>                                    
                  
                <?php
                //$controlador= new controller('',''); 
                //$cultura2=$controlador->getNoticiaReducida(8,5,null,null,null,3);
                $num=0;
                  if(count($cultura>0))
                    {
                    foreach ($cultura as $cul2) 
                    {
                        $num=$num + 1;
                        if ($num!=1) 
                        {
                        ?>
                      <div class="col-md-10">                 
                      <a href="pagina.php?id=<?php echo $cul2['id_noticia'];?>"><p class="card-text"> <?php echo $cul2['titulo'];?></p></a>
                      <hr>
                      </div>  
                      <?php
                      } 
                    }
                   }?>                  
                   </div>   
              </div>
            </div>
          </div>

        <div class="col-md mb-3">
            <div class="card border-info">
              
            <h4 class="card-header">Deportes</h4>
                <?php
                //$controlador= new controller('',''); 
                $desportes=$controlador->getNoticiaReducida(4,5,null,null,null,3);
                ?>
                <a href="pagina.php?id=<?php echo $desportes[0]['id_noticia'];?>"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/<?php echo $desportes[0]['ruta'];?>" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=<?php echo $desportes[0]['id_noticia'];?>"><p class="card-text"><?php echo $desportes[0]['titulo'];?></p></a>
                  <hr>
                </div>                                    
                  
                <?php
                //$controlador= new controller('',''); 
                //$desportes2=$controlador->getNoticiaReducida(4,5,null,null,null,3);
                $num=0;
                  if(count($desportes>0))
                    {
                    foreach ($desportes as $dep2) 
                    {
                        $num=$num + 1;
                        if ($num!=1) 
                        {
                        ?>
                      <div class="col-md-10">                 
                      <a href="pagina.php?id=<?php echo $dep2['id_noticia'];?>"><p class="card-text"> <?php echo $dep2['titulo'];?></p></a>
                      <hr>
                      </div>  
                      <?php
                      } 
                    }
                   }?>                  
                   </div>   
              </div>
            </div>
          </div>

                 <div class="col-md mb-3">
            <div class="card border-info">
              
            <h4 class="card-header">Nacionales</h4>
                <?php
                //$controlador= new controller('',''); 
                $nacionales=$controlador->getNoticiaReducida(5,5,null,null,null,3);
                ?>
                <a href="pagina.php?id=<?php echo $nacionales[0]['id_noticia'];?>"><img class="card-img-top4" src="../elindependiente/1.0/img/thumb/<?php echo $nacionales[0]['ruta'];?>" alt="Card image cap"></a>

            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <a href="pagina.php?id=<?php echo $nacionales[0]['id_noticia'];?>"><p class="card-text"><?php echo $nacionales[0]['titulo'];?></p></a>
                  <hr>
                </div>                                    
                   
                <?php
                //$controlador= new controller('',''); 
                //$nacionales2=$controlador->getNoticiaReducida(5,5,null,null,null,3);
                $num=0;
                  if(count($nacionales>0))
                    {
                    foreach ($nacionales as $nac2) 
                    {
                        $num=$num + 1;
                        if ($num!=1) 
                        {
                        ?>
                      <div class="col-md-10">                 
                      <a href="pagina.php?id=<?php echo $nac2['id_noticia'];?>"><p class="card-text"> <?php echo $nac2['titulo'];?></p></a>
                      <hr>
                      </div>  
                      <?php
                      } 
                    }
                   }?>                  
                   </div>   
              </div>
            </div>
          </div>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include('footer.php');?>
  </body>

</html>
