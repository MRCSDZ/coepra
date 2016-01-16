<?php


 if ($_SESSION['rol_global'] == "ADMINISTRADOR" || $_SESSION['rol_global'] == "CAPTURISTA" )
	{
	    
	}

else
	{
		header("location: ../permiso.php");
	}

?>