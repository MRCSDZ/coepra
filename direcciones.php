<?php 
session_start();
if (isset($_SESSION["matricula_global"]))
{
	if ($_SESSION['rol_global'] == "ADMINISTRADOR")
	{
		header("Location: Administrador/Index.php");
	}

	elseif($_SESSION['rol_global'] == "INSTRUCTOR")
	{
		header("Location: Instructor/index.php");
	}

	elseif($_SESSION['rol_global'] == "CAPTURISTA")
	{
		header("Location: Capturista/index.php");
	}
	elseif($_SESSION['rol_global'] == "ESTADISTA")
	{
		header("Location: Estadista/index.php");
	}

	elseif($_SESSION['rol_global'] == "CAPTURISTA_HOSPITALARIO")
	{
		header("Location: CapturistaHospitalario/index.php");
	}
	
	else 
	{
		echo "<h1>NO TIENES UN ROL ASIGNADO</h1>";
	}
}

else
{
	header("Location: index.php");

}



 ?>