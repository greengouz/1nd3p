<!------------------------------------------------------------------------------------------------------>
<!--DESTACADA-->
<!------------------------------------------------------------------------------------------------------>
 
		<div class="container-fluid card-body-disd">
			
		  <div class="container">

			  <div class="float_box">
			  	<!--<h1 class="mt-4 mb-4">Día del Folklore <small>| Cultura y Tradición</small></h1>-->
			  	 
			  	<h1 class="mt-4 mb-4">Coronavirus <small>| Nueva Normalidad</small>
				</h1>
					 	
				<div class="alert-success">
					<hr>
				</div>
					
				
				<div class="row"> <!--div row inicial-->
					<?php
  					//include_once 'resources/controller.php';
					//controlador= new controller('','');
  					$resultados1=$controlador->getNoticiaReducidaSlider(16,0,4,null,null,null,3);
  					/*$resultados1=$controlador->getNoticiaSeccion(16,4,null,null,null,0,3);*/
					?> 
					<div class="col-md-7 mb-4">
						<div class="card1">
						  <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><img class="card-img-top" src="../elindependiente/1.0/img/<?php echo $resultados1[0]['ruta'];?>" alt=""></a>
								<div class="card-body-mundialtop">
								  <h3 class="card-title">
								    <a href="pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><?php echo $resultados1[0]['titulo'];?></a>
								  </h3>
								  <p class="card-title"><?php echo $resultados1[0]['copete'];?></p>
								 <hr> 
								<ul class="list-inline">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
									<a target="_blank" href="https://twitter.com/intent/tweet?url=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[0]['id_noticia'];?>&amp;text=<?php echo $resultados1[0]['titulo'];?>"><i class="fab fa-twitter"></i></a>
								  <a href="https://api.whatsapp.com/send?text=http://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[0]['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
								</ul>
								</div>
						</div>
					</div> 
					  
					<div class="col-md-5 mb-4">

												
						<div class="row">
	
							<div class="col-md-7 card-body-mundial">
								<a href="pagina.php?id=<?php echo $resultados1[1]['id_noticia'];?>"><h5 class="card-title"><?php echo $resultados1[1]['titulo'];?></h5></a>
                <hr>
								<ul class="list-inline">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[1]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
									<a target="_blank" href="https://twitter.com/intent/tweet?url=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[1]['id_noticia'];?>&amp;text=<?php echo $resultados1[1]['titulo'];?>"><i class="fab fa-twitter"></i></a>
								  <a href="https://api.whatsapp.com/send?text=http://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[1]['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
								</ul>
							</div>
							<div class="col-md-5">
								<img class="card-img-top5" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[1]['ruta'];?>">    
							</div>              
						</div>
						<hr>
							   
						<div class="row">
						  <div class="col-md-7 card-body-mundial">
								<a href="pagina.php?id=<?php echo $resultados1[2]['id_noticia'];?>"><h5 class="card-title"><?php echo $resultados1[2]['titulo'];?></h5></a>
                <hr>
								<ul class="list-inline">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[2]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
									<a target="_blank" href="https://twitter.com/intent/tweet?url=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[2]['id_noticia'];?>&amp;text=<?php echo $resultados1[2]['titulo'];?>"><i class="fab fa-twitter"></i></a>
								  <a href="https://api.whatsapp.com/send?text=http://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[2]['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
								</ul>
						  </div>
						  <div class="col-md-5">
								<img class="card-img-top5" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[2]['ruta'];?>">    
						  </div>

						</div>
						<hr>
						
						<div class="row">
						  <div class="col-md-7 card-body-mundial">
								<a href="pagina.php?id=<?php echo $resultados1[3]['id_noticia'];?>"><h5 class="card-title"><?php echo $resultados1[3]['titulo'];?></h5></a>
								<hr>
								<ul class="list-inline">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[3]['id_noticia'];?>"><i class="fab fa-facebook"></i></a>
									<a target="_blank" href="https://twitter.com/intent/tweet?url=http://www.elindependiente.com.ar/pagina.php?id=<?php echo $resultados1[3]['id_noticia'];?>&amp;text=<?php echo $resultados1[3]['titulo'];?>"><i class="fab fa-twitter"></i></a>
								  <a href="https://api.whatsapp.com/send?text=http://www.elindependiente.com.ar/pagina.php?id%3d<?php echo $resultados1[3]['id_noticia'];?>%20" target="_blank"><i class="fab fa-whatsapp"></i></a>
								</ul>
						  </div>
						  <div class="col-md-5">
								<img class="card-img-top5" src="../elindependiente/1.0/img/thumb/<?php echo $resultados1[3]['ruta'];?>">    
						  </div>              
						</div>
						<hr>
						<div class="row">
							<center><img class="img-fluid" src="img/publicidad/telecom-banner.jpg"></center>
						</div>
							
					</div><!--div col-md-5 mb-4-->
					
				</div><!--/row inicial-->
		
			</div><!--/div float-box-->
      		
      		<div class="leaderboard img-fluid">
      			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- El Independiente - Left Section --GOOGLE ADSENSE-->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:728px;height:90px"
					 data-ad-client="ca-pub-8485196261787595"
					 data-ad-slot="1103024667"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
				
      </div><!--/div "container alert-info"-->
		
    </div><!--/div "container-fluid"-->


<!--FIN SECCION destacada ----------------------------------------------------------------------------------------------->
