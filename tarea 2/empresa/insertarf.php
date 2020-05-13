<?php include("comprobar.php")
include("conexion.php");

	$idempresa=$_POST['selNit'];
	$factura=$_POST['txtFactura'];
	$autorizacion=$_POST['txtAuto'];
	$fechae=$_POST['txtFecha'];
	$codigo=$_POST['txtCodigo'];

	$sql="insert into factura(idempresa,facturas,autorizacion,fechae,codigo) values ($idempresa,$factura,$autorizacion,$fechae,'$codigo')";
	$resultado=$con->query($sql);

	if ($resultado)
		echo "se registro con exito";
	else
		echo "hubo un error";
?>

<meta http-equiv="refresh" content="3;URL=factura.php"> 