<?php 
require('Conexion.php');

$query= "SELECT id, autor, titulo, comentarios FROM usuarios ";

$resultado=$conexion->query($query);


?>

<html>
<head>

<title>Usuarios</title>

</head>


<body>

<center><h1>Mantenimiento de Usuarios</h1></center>
<input TYPE="button" VALUE="Nuevo Usuario" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' ONCLICK="window.location.href='nuevo.php'">

<p>
</p>

<table border=1 width="90%">
<thead>
<tr>
<td><b>Id</b></td>
<td><b>Autor</b></td>
<td><b>Titulo</b></td>
<td><b>Comentarios</b></td>
<td><b>Opcion</b></td>
<td><b>Opcion</b></td>
</tr>
<tbody>
<?php while($row=$resultado->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['autor']; ?></td>
<td><?php echo $row['titulo']; ?></td>
<td><?php echo $row['comentarios']; ?></td>
<td>
<a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a>
</td>
<td>
<a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar </a>
</td>
</tr>    
<?php } ?>









</table>


</body>







</html>