<html>
	<head>
		<title>Usuarios</title>
	</head>
	
	
	<body > 
	<h1>Nuevo Autor</h1>
	<form  method="post" action="Insertar.php "> 


	<label>Autor:<br> 
	<input name="autor" type="text" id="autor"> 
	</label> 


	<p>
	<label>Titulo:<br> 
	<input name="titulo" type="text" id="titulo"> 
	</label> 
	</p>

	<p>Contenido:<br> 
	<label> 
	<textarea name="comentarios" rows="10" cols="40"></textarea>
	</label>
	</p> 

	</body>



<input type="submit" name="Submit" value="Registrar" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input TYPE="button" VALUE="Salir" style='width:100px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' ONCLICK="window.location.href='index.php'"><br><br>
</html>						