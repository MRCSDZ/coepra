<?php

	
	$mysqli=new mysqli("localhost","root","","testeadorcoepra"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
       
	/*$sql = "SELECT * FROM hospitales where hospitalid=(select MAX(hospitalid)from hospitales)";
         * SELECT hospitalid FROM hospitales order by hospitalid DESC LIMIT 1
	 //Conexion Base de servidor

	
	$mysqli=new mysqli("localhost","farmac24_m","contrasena","farmac24_cf"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}


	*/
?>