<?php session_start();
$correo=$_POST['txtCorreo'];
$password=sha1($_POST['txtPassword']);
include('conexion.php');
$sql="select correo,nivel from usuarios where correo='$correo' and password='$password'";
 $resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc())
 {
 	echo "Es  usuario correcto";
 	$_SESSION['correo']=$correo;
 	$_SESSION['nivel']=$fila['nivel'];
 	
    header("Location: menu.html");
 }
 else
   {
   	echo "Usuario o Contraseña no validos"; ?>
   <meta http-equiv="refresh" content="3;URL=login.html">   

<?php 
} 
?>