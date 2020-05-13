<?php include("conexion.php");

	$cantidad=$_POST['txtCantidad'];
	$descripcion=$_POST['txtDescripcion'];
	$precio=$_POST['txtPrecio'];
	$total=$_POST['txtTotal'];

	$sql="insert into detalles(cantidad,descripcion,precio,total) values ($cantidad, '$descripcion', $precio, $total)";

	$resultado=$con->query($sql);

	if ($resultado)
		echo "se registro con exito";
	else
		echo "hubo un error";
?>
<meta http-equiv="refresh" content="3;URL=detalles.php"> 