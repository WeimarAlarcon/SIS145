<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lista detalles</title>
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
<h1>Lista detalles:</h1>
<table id="customers">
	<th></th>
	<th>cantidad</th>
	<th>Unidad</th>
	<th>Articulos/CI</th>
	<tr>
	</tr>
</table>
<ul>
	<li><a href="forminsertard.php"><input type="submit" value="Insertar Datos"></a></li>
</ul>
	
</body>
</html>