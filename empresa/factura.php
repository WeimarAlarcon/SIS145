<?php include("comprobar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista Detalles</title>
</head>
<style>
#customers {

  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  text-align: left;
  background-color: #4CAF50;
  color: white;
</style>
<body>
	<?php include("conexion.php");
	$sql="select factura.id,nite,facturas,autorizacion,fechae,codigo from factura
	left join empresas on factura.idempresa=empresas.id";
	$resultado=$con->query($sql);
	?>
<h1>Factura:</h1>
<table id="customers">
	<th>Nit</th>
	<th>factura</th>
	<th>autorizacion</th>
	<th>Fecha Limite de emision</th>
	<th>Codigo de Control</th>
	<tr>
		<?php 
			while ($fila=$resultado->fetch_assoc()) {
			?>
			<tr>
			<td><?php echo $fila['nite'];?></td>
			<td><?php echo $fila['facturas'];?></td>
			<td><?php echo $fila['autorizacion'];?></td>
			<td><?php echo $fila['fechae']; ?></td>
			<td><?php echo $fila['codigo']; ?></td>
			</tr>
			<?php
			}
		?>
	</tr>
</table>
<ul>
	<a href="forminsertarf.php"><input type="submit" value="Insertar Datos"></a>
</ul>
</body>
</html>