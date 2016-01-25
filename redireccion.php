<?php

 require('Conexiones/BD.php');
 session_start();

$matricula = $_POST["mat"];
$pwd = $_POST["pwd"]; 

$q = "SELECT * FROM usuario
	  WHERE matricula = '$matricula' 
	  AND contrasena = '$pwd'
	  AND estado = 'ACTIVO'";

$r=$mysqli->query($q);
$row=$r->fetch_assoc();




	if($row <= 0)
	{
		echo "INGRESO MAL LOS DATOS";
		header("Location: Aviso.php");

	}

	else
	{
		
		$_SESSION['matricula_global'] = $row["matricula"];
		$_SESSION['nombre_global'] = $row["nombre"]." ".$row["apaterno"]." ".$row["amaterno"];
		$_SESSION['rol_global'] = $row["rol"];
		$_SESSION['idusuario_global'] = $row["idusuario"];

	   header("Location: direcciones.php");


	}

?>