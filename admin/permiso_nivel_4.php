<?php


 if ($_SESSION['rol_global'] == "ADMINISTRADOR" || $_SESSION['rol_global'] == "ESTADISTA"  )
	{
	    
	}

else
	{
		header("location: ../permiso.php");
	}

?>