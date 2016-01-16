<?php


 if ($_SESSION['rol_global'] == "ADMINISTRADOR")
	{
	    
	}

else
	{
		header("location: ../permiso.php");
	}

?>