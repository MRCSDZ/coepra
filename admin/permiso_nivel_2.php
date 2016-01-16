<?php


 if ($_SESSION['rol_global'] == "ADMINISTRADOR" || $_SESSION['rol_global'] == "CAPTURISTA_HOSPITALARIO")
	{
	    
	}

else
	{
		header("location: ../permiso.php");
	}

?>