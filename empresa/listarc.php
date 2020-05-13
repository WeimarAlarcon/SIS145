<?php include("comprobar.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista de Registro de clientes</title>
</head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
	$sql="select persona.id,nombre,apellidos,ci,fecha from persona";
	//echo(sql);
	$resultado=$con->query($sql);
	?>
<h1>Lista de Clientes:</h1>
<table id="customers">
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Nit/CI</th>
	<th>Fecha y Lugar</th>
	<th></th>
	<tr>
		<?php 
			while ($fila=$resultado->fetch_assoc()) {
			?>
			<tr>
			<td><?php echo $fila['nombre'];?></td>
			<td><?php echo $fila['apellidos'];?></td>
			<td><?php echo $fila['ci'];?></td>
			<td><?php echo $fila['fecha']; ?></td>
			<td>
			<?php if ($_SESSION['nivel']==1)
			{ ?>
			<a href="formeditar.php?id=<?php echo $fila['id'] ?>">Editar</a>
			<a href="eliminar.php?id=<?php echo $fila['id'] ?>">Eliminar</a> 
			<?php } ?>
			</td>
			</tr>
			<?php
			}
		?>			
	</tr>
</table>
<ul>
	<?php if ($_SESSION['nivel']==1)
		{ ?>
		<li><a href="forminsertarc.php">Insertar Personas</a></li>
	<?php
		}
	?>
</ul>
</body>
</html>