<?php 
// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
 
if(isset($_POST['autor']) && !empty($_POST['autor']) && 
isset($_POST['titulo']) && !empty($_POST['titulo']) && 
isset($_POST['comentarios']) && !empty($_POST['comentarios'])) { 

// Si entramos es que todo se ha realizado correctamente 

$autorregistrado= $_POST['autor'];
$tituloregistrado= $_POST['titulo'];
$comentariosregistrados= $_POST['comentarios'];

$link = mysql_connect('localhost','root',''); 

mysql_select_db ("login", $link); 

// Con esta sentencia SQL insertaremos los datos en la base de datos 
mysql_query("INSERT INTO usuarios (autor, titulo, comentarios) values ('$autorregistrado','$tituloregistrado','$comentariosregistrados')"); 

// Ahora comprobaremos que todo ha ido correctamente 
$my_error = mysql_error($link); 

if(!empty($my_error)) { 

echo "Ha habido un error al insertar los valores. $my_error";
echo " <br> <a href =\"admin.php\"> Regresar </a>";

} else { 

echo "Los datos han sido introducidos satisfactoriamente";
echo " <br> <a href =\"index.php\"> Regresar </a>";

} 

} else { 

echo "Error, no ha introducido todos los datos";
echo " <br> <a href =\"index.php\"> Regresar </a>";

} 

?> 
