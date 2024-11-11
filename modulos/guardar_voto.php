<?php
session_start();
include("../includes/conexion.php");
conectar();

//echo $_SERVER['PHP_SELF'];
$sql = mysqli_query($con, "insert into votos (id_disfraz, id_usuario) values ({$_POST['id']},{$_SESSION['id']})");
if(!mysqli_error($con))
{	
	$sql = mysqli_query($con, "update disfraces set votos = votos + 1 where id = {$_POST['id']}");
	echo "Voto emitido correctamente";
}

else
	echo "Error: no se pudo emitir el voto";
?>

