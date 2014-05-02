<?php 
require('Conexion.php');

$id=$_POST['id'];
$autor= $_POST['autor'];
$titulo= $_POST['titulo'];
$comentarios= $_POST['comentarios'];


// Con esta sentencia SQL insertaremos los datos en la base de datos 
$query="UPDATE usuarios SET autor='$autor', titulo='$titulo', comentarios='$comentarios'WHERE id='$id'"; 

$resultado=$conexion->query($query);

?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html> 
