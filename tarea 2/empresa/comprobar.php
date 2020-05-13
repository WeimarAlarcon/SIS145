<?php session_start();
if (isset($_SESION['correo']))
{
	header("Location: mensaje.html");
}
else {
	echo "usted esta autenticado como".$_SESSION['correo'];
	?>
	<a href="cerrar.php">Cerrar Session</a>
	<?php 
}
?>