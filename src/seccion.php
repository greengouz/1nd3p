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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

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
              <div class="col-md-3 mb-4">
                <div class="list-group">
                  <a href="#" class="list-group-item active">Secciones</a>
                  <?php
                  include_once 'resources/controller.php';
                  $controlador=new controller('','');
                  $resultados1=$controlador->getSecciones(null,12,3);
                    foreach ($resultados1 as $row)
                      {
                      ?>
                      <a href="seccion.php?seccion=<?php echo $row['id_seccion'];?>&pagina=0" class="list-group-item"><?php echo $row['descripcion'];?></a>
                      <?php
                      }
                      ?>
                </div>
				<hr>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-format="fluid"
					 data-ad-layout-key="-ho-1b+83-cr-5"
					 data-ad-client="ca-pub-8485196261787595"
					 data-ad-slot="7918321965"></ins>
				<script>
					 (adsbygoogle = window.adsbygoogle || []).push({});
				</script>

              </div>
              <!-- Content Column -->
              			
           
              <div class="col-md-9 mb-4">

              	<?php
				//include_once 'resources/controller.php';
					//	$controlador= new controller('','');
						if(isset($_GET['seccion'])){
							$seccion=$_GET['seccion'];
							if(isset($_GET['pagina'])){
								$pagina=$_GET['pagina'];
								$pagina_actual=$pagina;
								$inicio=$pagina * 10;
								if($inicio > 0){
								}else{
									$inicio = 0;
									}
								if($seccion > 0){
									
									}else{
										$seccion = 0;
										} 
								$resultados1=$controlador->getNoticia($seccion,10,null,null,null,$inicio,3);
								$cantidades=$controlador->getNoticiaCantidad($seccion,10,null,null,null,$inicio,3);
							}else{
								$inicio=0;
								$pagina_actual=0;
								$resultados1=$controlador->getNoticia($seccion,10,null,null,null,$inicio,3);
								$cantidades=$controlador->getNoticiaCantidad($seccion,10,null,null,null,$inicio,3);

							}
							$seccion_desc=$controlador->getSecciones($seccion,1,3);
						}else{
							$pagina_actual=0;
							$cantidades=0;
							$inicio=0;
							if(isset($_GET['buscar'])){
							$buscar=$_GET['buscar'];
							$resultados1=$controlador->getNoticia(null,10,null,$buscar,null,0,3);
							$seccion_desc[0]['descripcion']="Resultados Encontrados con: <strong>".$buscar."</strong>";
							}else{
							?>						
								<br><h2><?php die('Sin Resultados!!');?></h2>
						<?php 
							}
						}		
					?>
               <h2>
                  <small><?php echo $seccion_desc[0]['descripcion'];?></small>
               </h2>
               <hr>
               				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-format="fluid"
					 data-ad-layout-key="-ho-1b+83-cr-5"
					 data-ad-client="ca-pub-8485196261787595"
					 data-ad-slot="7918321965"></ins>
				<script>
					 (adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<hr>
                <?php
				foreach ($resultados1 as $row)
				{
				?>            
                <div class="card mb-4">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md">
                            <a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
                              <img class="card-img-top2" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" alt="Foto">
                            </a>
                          </div>
                          <div class="col-md">
                            <h2 class="card-title"><a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><?php echo $row['titulo'];?></a></h2>
                            <p class="card-text"><?php echo $row['copete'];?></p>
                            <a href="pagina.php?id=<?php echo $row['id_noticia'];?>" class="btn btn-primary"> Leer más &rarr;</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-muted">
                        <?php echo $row['fecha'];?>
                        <a href="#">El Independiente :: Edición Digital</a>
                      </div>
                    </div>
                    <?php
					}
					?>	

                    <!-- Pagination-->
                    <ul class="pagination justify-content-center mb-4">
                      <li class="page-item">
                      	<?php
						
						
						if ($pagina_actual==1) 
						{
							$previus=1;

						}else{$previus=$pagina_actual-1;}

						//$previus=($pagina_actual==1 or $pagina_actual==0 ? 1 : $pagina_actual-1);
											
						
						?>
                        <a class="page-link" href="seccion.php?seccion=<?php echo $seccion."&pagina=".$previus;?>">&larr; Previo</a>
                      </li>
                      <?php						
							$array=$cantidades[0];
							$paginas=$array['cantidad']/10;
							$pagina=1;
							$next=$pagina_actual+1;
							
							while($paginas >= $pagina){
								$style_actual=($pagina_actual==$pagina ? 'style=color:red;' : '');
						?>
						
								<li class="page-link"><a <?php echo $style_actual; ?> href="seccion.php?seccion=<?php echo $seccion."&pagina=".$pagina;?>"></><?php echo $pagina;?></a></li>
						<?php
								$pagina=$pagina + 1;
								if ($pagina==6){
									$paginas=$pagina;	
								}								
							}
						?>
                      <li class="page-item">
                        <a class="page-link" href="seccion.php?seccion=<?php echo $seccion."&pagina=".$next;?>">Siguiente &rarr;</a>
                      </li>
                    </ul>

              </div>
            </div>

          </div>
                 
        <?php include('footer.php');?>
  </body>
</html>
