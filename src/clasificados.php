<!doctype html>
<html lang="es_LA">
<head>
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
<style type="text/css">
  .vjs-default-skin .vjs-play-progress,
  .vjs-default-skin .vjs-volume-level { background-color: #4764cf }
  .vjs-default-skin .vjs-control-bar,
  .vjs-default-skin .vjs-big-play-button { background: rgba(204,199,199,0.7) }
  .vjs-default-skin .vjs-slider { background: rgba(204,199,199,0.2333333333333333) }
  .vjs-default-skin .vjs-control-bar { font-size: 64% }		 			 			 		
</style>

	<meta charset="UTF-8">
	<meta name="description" content="">
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
    	  
        <?php include ('header.php');  ?>


          <!--Seccion principal / 2 columnas-->
          <div class="container">
            <div class="row">
              <div class="col-md-3 mb-4 order-2">
      			
      			<h2 class="mt-4 mb-4">Rubros 
					<small>| Clasificados</small>
				</h2>
                <div class="list-group">
 
					<?php
					include_once 'resources/controller.php';
					$controlador= new controller('','');
					$rubroClasificados=$controlador->getRubrosClasificados(null);
						foreach ($rubroClasificados as $rubroClasificado)
						{
						?>	
							<a class="list-group-item" href="clasificados_rubros.php?rubro=<?php echo $rubroClasificado['id_rubro_clasificado'];?>"><?php echo $rubroClasificado['descripcion']; ?></a>
						<?php
						}
						?>	
                </div>
				<hr>
				<center>
				<div class="btn-group" role="group" aria-label="...">
					<a href="alta_clasificado_gratis.php">
						<button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false"><strong>¡Publicá tu aviso gratis! </strong></button>
					</a>
				</div>
				</center>
                
              </div>
              <!-- Content Column -->
           
              <div class="col-md-9 mb-4 order-1">
				
				<hr>
				<!--//////// CAROUSEL ///////-->
				<?php
				include_once 'resources/controller.php';
				$controlador= new controller('','');

				$rubroClasificados=$controlador->getRubrosClasificados(null);
				foreach ($rubroClasificados as $rubroClasificado)
				{					
				?>	
					<a href="clasificados_rubros.php?rubro=<?php echo $rubroClasificado['id_rubro_clasificado']; ?>" class="btn btn-success btn-lg btn-block" role="button"><?php echo $rubroClasificado['descripcion']; ?></a>
						

					<div class="card md-4 mb-4">
					  <div class="card-body">
						<?php
						include_once 'resources/controller.php';
						$controlador= new controller('','');
						$clasificado=$controlador->getClasificadoReducido($rubroClasificado['id_rubro_clasificado'],0,3,1);
						
						if (count($clasificado)>0){
						
						?>	
													<?php
							foreach ($clasificado as $row)
							{
							$foto=(is_null($row['foto']) ? 'elindependiente/1.0/img/clasificados/gratis/thumb/avisogratis.jpg' : 'elindependiente/1.0/img/clasificados/gratis/thumb/'.$row['foto']);
							?>	
							<div class="row">						

								<div class="col-md">
									<!--<a href="pagina.php?id=<php echo $row['id_noticia'];?>">-->
										<img class="card-img-top9" src="https://www.elindependiente.com.ar/<?php echo $foto;?>" alt="Foto">
									<!--</a>-->
								</div>
								
								<div class="col-md">
									<h2 class="card-title"><?php echo $row['titulo'];?></h2>
									<p class="card-text"><?php echo $row['copete'];?></p>
									<!--<strong><p><php echo $rubroClasificado['descripcion']; ?></p></strong>-->
									<p><?php echo $row['clasificado']; ?></p>
									<!--a href="pagina.php?id=<php echo $row['id_noticia'];?>" class="btn btn-info"> Leer más</a>-->
									 
									<!---------------------------------------->
									<button type="button" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $row['id_clasificado']; ?>">
									Ver detalle
									</button>
									<hr>
									<!-- Modal -->
									<div class="modal fade" id="myModal<?php echo $row['id_clasificado']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">
										  <div class="modal-body">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 id="myModalLabel">Clasificados GRATIS!</h4>
										  </div>
										  <div class="modal-body">
											<h3 class="card-title"><?php echo $row['titulo'];?></h3>
											<!--<strong><p><php echo $rubroClasificado['descripcion']; ?></p></strong>-->
											<p><?php echo $row['clasificado']; ?></p><hr>
											<img src="https://www.elindependiente.com.ar/<?php echo $foto;?>" style="max-height: 300px; max-width: 300px;"><hr>
											<p><strong>Teléfono: </strong><?php echo $row['telefono']; ?></p>
											<p><strong>E-mail: </strong><?php echo $row['mail']; ?></p>
											<p><strong>Ubicación: </strong><?php echo $row['domicilio']; ?></p>
											<p><strong>Fecha: </strong><?php echo $row['fecha']; ?></p>
										  </div>
										  <div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
										  </div>
										</div>
									  </div>
									</div>
									<!--
									<hr>
									<p><strong>Teléfono: </strong><php echo $row['telefono']; ?></p>
									<p><strong>E-mail: </strong><php echo $row['mail']; ?></p>
									<p><strong>Ubicación: </strong><php echo $row['domicilio']; ?></p>
									<p><strong>Fecha: </strong><php echo $row['fecha']; ?></p>-->
								</div>							

							</div>
							<div class="card-footer text-muted">
								<hr>
							</div>

							<?php
							}
							?>

						<?php
						}
						?>	
					</div>
				</div>


				<?php
				}
				?>
					<!--//////// CAROUSEL ///////-->        
											      

              </div>
            </div>

          </div>
                 
        <?php include('footer.php');?>
  </body>
</html>
