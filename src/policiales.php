
<div class="container-fluid card-body-police">

	<div class="container">
			  		   
		  <div class="box-police">
			  <a href="https://www.elindependiente.com.ar/seccion.php?seccion=2">
				  <h1>Policiales</h1></a>
		  </div>
		   
		  <div class="float_box">
				<?php
				//include_once 'resources/controller.php';
				//$controlador= new controller('','');
				$resultados1=$controlador->getNoticiaReducidaSlider(2,0,3,null,null,null,3);
				?>			

				  <div class="row">
					  <?php
					  foreach ($resultados1 as $row)
						{?>
						  <div class="col-md mb-3">

							<div class="card1 h-100">
								  <a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><img class="card-img-top9" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" alt=""></a>
									<div class="card-body-top">
										<h5 class="card-title">
											<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
											<?php echo $row['titulo'];?></a>
										</h5>
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
						}?>
							
				  </div>	  
				<?php
				//include_once 'resources/controller.php';
				//$controlador= new controller('','');
				$resultados1=$controlador->getNoticiaReducidaSlider(2,3,3,null,null,null,3);
				?>			

				  <div class="row">
					  <?php
					  foreach ($resultados1 as $row)
						{?>
						  <div class="col-md mb-3">

							<div class="card1 h-100">
								  <a href="pagina.php?id=<?php echo $row['id_noticia'];?>"><img class="card-img-top9" src="../elindependiente/1.0/img/thumb/<?php echo $row['ruta'];?>" alt=""></a>
									<div class="card-body-top">
										<h5 class="card-title">
											<a href="pagina.php?id=<?php echo $row['id_noticia'];?>">
											<?php echo $row['titulo'];?></a>
										</h5>
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
						}?>
							
				  </div>	  
							  
		  </div><!--</float_box>-->
		  
	</div>

</div>
