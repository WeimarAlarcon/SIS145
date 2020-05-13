<?php include("conexion.php");

	$nombre=$_POST['txtNombre'];
	$apellidos=$_POST['txtApellidos'];
	$nitci=$_POST['txtNitCi'];
	$fecha=$_POST['txtFecha'];

	$sql="insert into persona(nombre,apellidos,ci,fecha) values ('$nombre', '$apellidos', '$nitci', '$fecha')";

	$resultado=$con->query($sql);

	if ($resultado)
		echo "se registro con exito";
	else
		echo "hubo un error";
?>
<meta http-equiv="refresh" content="3;URL=listar.php"> 