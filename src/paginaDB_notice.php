<!DOCTYPE html>
  
			<?php
			include_once 'resources/controller.php';
			$controlador= new controller('','');
			if(isset($_GET['id'])){
				$id_noticia=$_GET['id'];
				if(is_numeric($id_noticia)){
					$imagenes=$controlador->getImagenes($id_noticia,3);
				}
			}else{?>
			<br><h2><?php die('Seleccione una Noticia!!');?></h2>
			<?php 
					}
			$noticia=$controlador->getNoticiaCompleta($id_noticia,3);

          if(isset($_GET['id'])){
            $id_noticia=$_GET['id'];               
            }else
              {?>
                <br><h2><?php die('Seleccione una Noticia!!');?></h2>
                <?php 
                    }
                //$noticia=$controlador->getNoticiaCompleta($id_noticia,3);
                $controlador->setClick('noticias',$id_noticia);
                $tags=array();
                $relacionadas=array();
                //$imagenes=$controlador->getImagenes($id_noticia,3);
                //$tags=$controlador->getTags($id_noticia,3); DESCOMENTAR PARA USAR
                $videos=$controlador->getVideos($id_noticia);
                $relacionadas=$controlador->getNoticiaReducida(null,4,null,null,$id_noticia,3);
                $masleidas=$controlador->getNoticiasMasLeidas(NULL,5,null,null,$id_noticia,3);
              ?>

			<div class="card mb-4">
				<h5 class="card-header"><a href="seccion.php?seccion=<?php echo $noticia[0]['id_seccion'];?>&pagina=1" class="<?php echo $noticia[0]['id_seccion'];?>"><strong><?php echo $noticia[0]['descripcion'];?></strong></a></h5>
			</div>
          <!--<a href="seccion.php?seccion=<php echo $noticia[0]['id_seccion'];?>">&nbsp;<i><php echo $noticia[0]['descripcion'];?></i></a>-->
          <p class="right"><?php echo $noticia[0]['fecha'];?></p>
  
          <h4 class="font-weight-bold" ><?php echo $noticia[0]['titulo'];?></h4>
          <p class="text-justify"><?php echo $noticia[0]['copete'];?>.</p>

          <!--Redes Sociales compartir nota-->
	          	<div class="col-md">
		          	<div class="social">
	  					<ul>
	  						<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $id_noticia?>" class="fab fa-facebook face" target="_blank"></a>
	  						<a href="https://twitter.com/intent/tweet?url=https://www.elindependiente.com.ar/pagina.php?id=<?php echo $id_noticia?>" class="fab fa-twitter tweet" data-lang="es" target="_blank"></a>
	  						<a href="https://api.whatsapp.com/send?text=https://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $id_noticia?>%20" class="fab fa-whatsapp whats" target="_blank"></a>
	  					<ul>
				    </div>
	            </div>
          	<!--FIN Redes Sociales-->
            <?php
              if (count($imagenes)==1){ 
            ?>
          <img class="card-img-top22" src="https://www.elindependiente.com.ar/elindependiente/1.0/img/<?php echo $imagenes[0]['ruta'];?>" />     
            <?php }else{?>
          <div class="row">
            <img class="card-img-top22" src="https://www.elindependiente.com.ar/elindependiente/1.0/img/<?php echo $imagenes[0]['ruta'];?>" data-toggle="modal" data-target=".bd-example-modal-lg"/>  
              <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target=".bd-example-modal-lg" style="position: absolute; margin: 5px 6px;">
              <p><img src="https://www.elindependiente.com.ar/img/icons/ico-camara.png"> <?php echo count($imagenes);?></p>
              </button>
          </div>  

          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <!--Carrusel de fotos -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                      <?php
                      $numero=0;
                      if(count($imagenes)>0){
                        foreach ($imagenes as $imagen){             
                          if ($numero==0){
                            $numero=1;
                      ?>    
                      <div class="carousel-item active" style="height: auto;">
                        <img class="card-img-top22" src="https://www.elindependiente.com.ar/elindependiente/1.0/img/<?php echo $imagen['ruta'];?>" alt="First slide">
                      </div>
                        <?php }else{ ?>
                      <div class="carousel-item" style="height: auto;"">
                        <img class="card-img-top22" src="https://www.elindependiente.com.ar/elindependiente/1.0/img/<?php echo $imagen['ruta'];?>" alt="Second slide">
                      </div>
                        <?php } 
                        }
                      }?>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:  #016CA2;"></span>
                      <span class="sr-only">Previa</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"  style="background-color:  #016CA2;"></span>
                      <span class="sr-only">Siguiente</span>
                      </a>
                    </div>
                    <!-- Fin de carrusel-->
                  </div>
                  </div>
                </div>
                 <?php }?>
                 <hr>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- El Independiente Adaptable PAGINA --GOOGLE ADSENSE-->
				<ins class="adsbygoogle"
					 style="display:block"
					 data-ad-client="ca-pub-8485196261787595"
					 data-ad-slot="8542221862"
					 data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
                <hr>
          <p class="text-justify"><?php echo $noticia[0]['cuerpo'];?></p>
          <hr>
			
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- El Independiente - Left Section -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-8485196261787595"
				 data-ad-slot="1103024667"
				 data-ad-format="auto"
				 data-full-width-responsive="true"></ins>
			<script>
				 (adsbygoogle = window.adsbygoogle || []).push({});
			</script>

            <?php if(count($videos)>0)
            {?>             
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $videos[0]['ruta'];?>?rel=0" allowfullscreen></iframe>
          </div>
           <?php }?>
           <hr>

     <div class="fb-comments" data-href="www.elindependiente.com.ar/pagina.php?id=<?php echo $id_noticia?>#una" data-numposts="5" data-width="100%" data-mobile="Auto-detected"></div>       	
                     

<!-- FIN DE CONTENEDOR PRINCIAPL DE LA NOTICIA -->


</html>
