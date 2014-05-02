<?php 
require ('Conexion.php');

$id=$_GET['id'];
$query ="SELECT autor, titulo, comentarios FROM usuarios WHERE id ='$id' ";

$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();




?>

<html>
<head>
<title></title>
</head>

<body>

<h1>Modificar Autor</h1>
<form name="modificar_usuario"  method="POST" action="Actualizar.php">

  <input type="hidden" name="id" value="<?php  echo $id;?>">

    <label>Autor:<br> 
	<input name="autor" type="text" id="autor" value=<?php echo $row['autor']; ?> > 
	</label> 


	<p>
	<label>Titulo:<br> 
	<input name="titulo" type="text" id="titulo" value=<?php echo $row['titulo']; ?> > 
	</label> 
	</p>

	<p>Contenido:<br> 
	<label> 
	<textarea name="comentarios" rows="10" cols="40"  > <?php echo $row['comentarios']; ?></textarea>
	</label>
	</p> 



<input type="submit" name="Submit" value="Modificar" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input TYPE="button" VALUE="Salir" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' ONCLICK="window.location.href='index.php'"><br><br>





</body>
</html>