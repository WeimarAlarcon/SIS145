<?php 
	$con = new mysqli("localhost","root","","bd_empresa");
	if ($con -> connect_error)
		die("conexion fallada".$con->connect_error);
?>