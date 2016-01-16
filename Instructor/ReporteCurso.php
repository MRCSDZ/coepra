<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/cursos.php';
include_once '../clases/instructores.php';
include_once '../clases/lugarcurso.php';
include_once '../clases/alumnos.php';
include_once '../clases/evidencias.php';
// Construir instancias


 $id = $_SESSION["idcurso_global"];
//Cursos
$curso = new Curso($db);
$curso->idcurso = $id;
$curso->cantidaddiastranscurridos();
$curso->getcurso();

//Instructores
$instructor = new Instructores($db);
$instructor->idcurso = $id;

 //LugarCurso
$lugarcurso = new Lugarcurso($db);
$lugarcurso->idcurso = $id;
$lugarcurso->VerLugar();

//Alumnos
$alumno = new Alumnos($db);
$alumno->idcurso = $id;
$alumno-> CantidadAlumnosCurso($db);

//Evidencias
$evidencias = new Evidencia($db);
$evidencias->idcurso = $id;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php /*
		header('Content-type: application/vnd.ms-excel;charset=utf-8');
		header("Content-Disposition: attachment; filename=ReporteCurso.xls");
		header("Pragma: no-cache");
		header("Expires: 0");

		//bgcolor="#FF0000"

	<table border="1">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
				<th>d</th>
				<th>e</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
		</tbody>
	</table>

		*/
	 ?>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

FECHA ELABORACION DE REPORTE:
<br>
<br>
	<table border="1" >
		<thead>
			<tr bgcolor="#FF0000">
				<th colspan="2">DATOS DEL GENERALES DEL CURSO:</th>
				

			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nombre Curso:</td>
				<td>Aqui va el dato correspodiente</td>
				
			</tr>

			<tr>
				<td>Alumnos Inscritos</td>
				<td>Aqui va el dato correspodiente</td>
				
			</tr>

			<tr>
				<td>Instructor Activo:</td>
				<td>Aqui va el dato correspodiente</td>
				
			</tr>

			<tr>
				<td>Inicio de Curso:</td>
				<td>Aqui va el dato correspodiente</td>
				
			</tr>

			<tr>
				<td>Horario de Curso:</td>
				<td>Aqui va el dato correspodiente</td>
			</tr>

			<tr>
				<td>Dependencia de Curso:</td>
				<td>Aqui va el dato correspodiente</td>
			</tr>

			<tr>
				<td>Curso Dirigido a:</td>
				<td>Aqui va el dato correspodiente</td>
			</tr>

			<tr>
				<td>Giro:</td>
				<td>Aqui va el dato correspodiente</td>
			</tr>

			<tr>
				<td>Direccion Curso:</td>
				<td>Aqui va el dato correspodiente</td>
			</tr>



		</tbody>
	</table>

	<br>
	<br>



	

	
	<table border="1">
		<thead>
			<tr bgcolor="#FF0000">
				<th colspan="3">INSTRUCTORES AUXILIARES</th>
			</tr>
			<tr>
				
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Direccion</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Aqui va el dato correspodiente</td>>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				
				
			</tr>
		</tbody>
	</table>

	<br>
	<br>

	<table border="1">
		<thead>
			<tr bgcolor="#FF0000">
				<th colspan="9">ALUMNOS</th>
			</tr>
			<tr>
				
				<th>Nombre Alumno</th>
				<th>Lugar de Trabajo</th>
				<th>Fecha de Nacimiento</th>
				<th>Edad</th>
				<th>Estado Civil</th>
				<th>Escolaridad</th>
				<th>Domicilio</th>
				<th>Telefono</th>
				<th>Correo</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				<td>Aqui va el dato correspodiente</td>
				
				
			</tr>
		</tbody>
	</table>
</body>


</html>