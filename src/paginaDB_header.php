<!DOCTYPE html>
<html lang="es_LA">

  <head>
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
			?>

			<meta property="og:url"           	content="https://www.elindependiente.com.ar/pagina.php?id=<?php echo $id_noticia?>" />
			<meta property="og:type"          	content="article" />
			<meta property="og:title"         	content="<?php echo $noticia[0]['titulo'];?>" />
			<meta property="og:description"   	content="<?php echo $noticia[0]['copete'];?>" />
			<meta property="og:image"         	content="<?php echo "https://www.elindependiente.com.ar/elindependiente/1.0/img/".$imagenes[0]['ruta'];?>" />
			<meta property="og:image:width" 	content="200" />
			<meta property="og:image:height" 	content="200" />
		    
			<title><?php echo $noticia[0]['titulo'];?></title>
  </head>

</html>
