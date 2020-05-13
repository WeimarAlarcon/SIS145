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
	$sql="select detalles.id,cantidad,descripcion,precio,total from detalles";
	//echo(sql);
	$resultado=$con->query($sql);
	?>
<h1>Lista Detalles:</h1>
<table id="customers">
	<th>Cantidad</th>
	<th>Descripcion</th>
	<th>Precio</th>
	<th>Total</th>
	<tr>
		<?php 
			while ($fila=$resultado->fetch_assoc()) {
			?>
			<tr>
			<td><?php echo $fila['cantidad'];?></td>
			<td><?php echo $fila['descripcion'];?></td>
			<td><?php echo $fila['precio'];?></td>
			<td><?php echo $fila['total']; ?></td>
			</tr>
			<?php
			}
			?>	
	</tr>
</table>
<ul>
	<a href="forminsertard.php"><input type="submit" value="Insertar Detalles"></a>
</ul>
	
</body>
</html>