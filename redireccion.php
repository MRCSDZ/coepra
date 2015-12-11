<?php

 require('Conexiones/BD.php');

$matricula = $_POST["rpe"];
$pwd = $_POST["pwd"];

$q = "SELECT * FROM usuario
	  WHERE matricula = '$matricula' 
	  AND contrasena = '$pwd'";

$r=$mysqli->query($q);
$row=$r->fetch_assoc();




	if($row <= 0)
	{
		echo "INGRESO MAL LOS DATOS";
		?>
		
		<script type="text/javascript">
			window.location="aviso.php";
		</script>

		<?php

	}

	else
	{
		session_start();
		$_SESSION['rpe_global'] = $row["matricula"];
		$_SESSION['nombre_global'] = $row["nombre"]." ".$row["apaterno"]." ".$row["amaterno"];
		$_SESSION['nivel_global'] = $row["rol"];
		$_SESSION['idusuario_global'] = $row["idusuario"];


		?>

		<script type="text/javascript">
			window.location="home.php";
		</script>


		<?php

	}

?>