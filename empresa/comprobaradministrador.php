<?php session_start();
if ($_SESION['nivel']!=1)
{
	header("Location: mensajenoautorizado.html");
}
?>
