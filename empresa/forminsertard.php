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
	<form action="insertard.php" method="POST">
		<label for="txtCantidad">Cantidad</label>
		<input type="number" name="txtCantidad"><br>

		<label for="txtDescripcion">Descripcion</label>
		<input type="text" name="txtDescripcion"><br>

		
		<label for="txtPrecio">Precio</label>
		<input type="number" name="txtPrecio"><br>

		<label for="txtTotal">Total</label>
		<input type="number" name="txtTotal"><br>

		<input type="submit" value="Registrar">
	</form>
</body>
</html>