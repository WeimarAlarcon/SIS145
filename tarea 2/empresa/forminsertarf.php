<?php include("conexion.php");
	$sql="select id,nite from empresas";
	//echo $sql;
	$resultado=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Insetar Datos de Cliente</title>
</head>
<body>
	<h1>Insertar Datos de la empresa:</h1>
	<form action="insertarf.php" method="POST">
		<label for="selNit">Nit</label>
		<select name="selNit">
			<?php
			while ($fila=$resultado->fetch_assoc()) {
			?>
			<option value="<?php echo $fila['id']; ?>"> <?php echo $fila['nite']; ?></option>
			<?php
			}
			?>
		</select><br>

		<label for="txtFactura">No. Factura</label>
		<input type="number" name="txtFactura"><br>
		
		<label for="txtAuto">Autorizacion</label>
		<input type="number" name="txtAuto"><br>

		<label for="txtFecha">Fecha de limite de emision</label>
		<input type="date" name="txtFecha"><br>

		<label for="txtCodigo">Codigo de Control</label>
		<input type="text" name="txtCodigo"><br>

		<input type="submit" value="Registrar">
	</form>
</body>
</html>