<?php

	
	$mysqli=new mysqli("localhost","root","","coepra"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	/*
	 //Conexion Base de servidor

	
	$mysqli=new mysqli("localhost","farmac24_m","contrasena","farmac24_cf"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}


	*/
?>