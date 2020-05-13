<?php include("comprobar.php");
include("comprobaradministrador.php"); 
include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Insetar Datos de Cliente</title>
</head>
<body>
	<h1>Insertar Datos de Cliente:</h1>
	<form action="insertarc.php" method="POST">
		<label for="txtNombre">Nombre</label>
		<input type="text" name="txtNombre"><br>

		<label for="txtApellidos">Apellidos</label>
		<input type="text" name="txtApellidos"><br>

		
		<label for="txtNitCi">Nit/Ci</label>
		<input type="number" name="txtNitCi"><br>

		<label for="txtFecha">Fecha y Lugar</label>
		<input type="date" name="txtFecha"><br>

		<input type="submit" value="Registrar">
	</form>
</body>
</html>