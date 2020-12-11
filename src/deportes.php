
<!-----------------------DEPORTES---------------------------------------------------------------------------------------->

      <!--Seccion 4 columnas card c/u-->
    <div class="container">
      <a href="https://www.elindependiente.com.ar/seccion.php?seccion=4">
      <h1 class="mt-4 mb-4">Deportes
      </h1>
      </a>
      <div class="alert-success">
        <hr>
      </div> 
       
      <div class="row">
		
		<div class="col-md-6 mb-4 order-1">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-format="fluid"
				 data-ad-layout-key="-ho-1b+83-cr-5"
				 data-ad-client="ca-pub-8485196261787595"
				 data-ad-slot="7918321965"></ins>
			<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script> <!--GOOGLE ADSENSE-->
			<hr>
			<?php
			//include_once 'resources/controller.php';
			//$controlador= new controller('','');
			$resultados1=$controlador->getNoticiaReducidaSlider(4,0,4,null,null,null,3);
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
        
        <div class="col-md-6 mb-4 text-center order-2">
			<script src="//player.performgroup.com/eplayer.js#788804792327c5fd4a61b22604.n7mv32wfqlpj19jzx4h4geexq" async class="img-fluid"></script>
			
			<!--
			<hr>
			<a href="https://www.larioja.gov.ar/" target="_blank" onclick="foo(17)"><img alt="Publicidad Gobierno de LRJ" src="img/publicidad/logo-lrj.png" class="img-fluid pmobile"></a>-->
			<!--<a href="https://iparatodos.com.ar/" target="_blank" onclick="foo(139)"><img alt="Publicidad Internet Para Todos" class="mediapag img-fluid" src="img/publicidad/ipt-horizontal.gif"></a>-->
        </div>
        
      </div><!--/row-->

    </div> <!--/container-->
    <!--FIN Seccion 4 columnas card c/u-->

<!----------------FIN SECCION DEPORTES---------------------------------------------------------------------------------->
