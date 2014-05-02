<?php 
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM usuarios WHERE id='$id'";
	
	$resultado=$conexion->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Autor</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Autor Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Autor</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>