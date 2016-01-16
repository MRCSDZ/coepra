<?php


 if ($_SESSION['rol_global'] == "ADMINISTRADOR" || $_SESSION['rol_global'] == "INSTRUCTOR"  )
	{
	    
	}

else
	{
		header("location: ../permiso.php");
	}

?>