<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>requicision</title>
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
<h1>Solicitud de compras:</h1>
<table id="customers">
	<th></th>
	<th>No.</th>
	<th>Depto que solicita</th>
	<th>Fecha del pedido </th>
	<th>Fecha de entrega</th>
	<th>Elaborado por</th>
	<th>Autorizado por</th>
	<th>Recibido por</th>
	<tr>
	</tr>
</table>
<ul>
	<li><a href="forminsertarpedido.php"><input type="submit" value="Insertar Datos"></a></li>
</ul>
	
</body>
</html>