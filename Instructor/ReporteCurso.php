<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/instructores.php';
include_once '../clases/alumnos.php';
include_once '../clases/reportes.php';
include_once '../clases/evidencias.php';

// Construir instancias


 $id = $_SESSION["idcurso_global"];
//Reporte
$reporte = new Reporte($db);
$reporte->idcurso = $id;
$reporte->GenerarReporte();

//Instructores
$instructor = new Instructores($db);
$instructor->idcurso = $id;


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
	<?php 
		header('Content-type: application/vnd.ms-excel;charset=utf-8');
		header("Content-Disposition: attachment; filename=ReporteCurso.xls");
		header("Pragma: no-cache");
		header("Expires: 0");

	 ?>
	<meta charset="UTF-8">
	<title>REPORTE GENERAL DE CURSO</title>
</head>
<body>

FECHA ELABORACION DE REPORTE:<?php echo $reporte->fechareporte;?>
<br>
<br>
<table border="1" >
		<thead>
			<tr bgcolor="#FF0000">
				<th colspan="2">DATOS GENERALES DE CURSO</th>
				

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><b>Nombre Curso:</b></td>
				<td><?php echo $reporte->nombrecurso;?></td>
				
			</tr>

			<tr>
				<td><b>Cantidad de Alumnos Inscritos:</b></td>
				<td><?php echo $alumno->cantidadalumos;?></td>
				
			</tr>

			<tr>
				<td><b>Instructor</b></td>
				<td><?php echo $reporte->nombreinstructor;?></td>
				
			</tr>

			<tr>
				<td><b>Inicio de Curso:</b></td>
				<td><?php echo $reporte->fechacurso;?></td>
				
			</tr>

			<tr>
				<td><b>Horario de Curso:</b></td>
				<td><?php echo $reporte->horariocurso;?></td>
			</tr>

			<tr>
				<td><b>Dependencia de Curso:</b></td>
				<td><?php echo $reporte->dependenciacurso;?></td>
			</tr>

			<tr>
				<td><b>Curso Dirigido a:</b></td>
				<td><?php echo $reporte->empresadirigida;?></td>
			</tr>

			<tr>
				<td><b>Giro:</b></td>
				<td><?php echo $reporte->giroasociacion;?></td>
			</tr>

			<tr>
				<td><b>Lugar Curso:</td>
				<td><?php echo $reporte->nombrelugar;?></td>
			</tr>

			<tr>
				<td><b>Direccion Curso:</td>
				<td><?php echo $reporte->direccion;?></td>
			</tr>

			<tr>
				<td><b>Estado del Curso:</td>
				<td><?php echo $reporte->estadocurso;?></td>
			</tr>



		</tbody>
	</table>
<br>
<br>
	<table border="1" >
		<thead>
			<tr bgcolor="#FF0000">
				<th colspan="2">DATOS INSTRUCTOR</th>
				

			</tr>
		</thead>
		<tbody>
			

			<tr>
				<td><b>Matricula:</b></td>
				<td><?php echo $reporte->matricula;?></td>
				
			</tr>

			<tr>
				<td><b>Telefono:</b></td>
				<td><?php echo $reporte->telefono;?></td>
				
			</tr>
			<tr>
				<td><b>Correo Electronico:</b></td>
				<td><?php echo $reporte->correo;?></td>
				
			</tr>				
		</tbody>
	</table>

	<br>
	<br>

	<table border="1">
		<thead>
			<tr bgcolor="#FF0000">
				<th colspan="2">DATOS FICHA DE IDENTIFICACION DEL INSTRUCTOR</th>
				

			</tr>
		</thead>
		<tbody>
			<tr>
				<td><b>Empresa Institucion:</b></td>
				<td><?php echo $reporte->dependenciacurso;?></td>
				
			</tr>

			<tr>
				<td><b>Años de Experiencia</b></td>
				<td><?php echo $reporte->anosexperiencia;?></td>
				
			</tr>

			<tr>
				<td><b>SVPR:</b></td>
				<td><?php echo $reporte->svpr;?></td>
				
			</tr>

			<tr>
				<td><b>Fecha Adiestramiento:</b></td>
				<td><?php echo $reporte->fechaadiestramiento;?></td>
				
			</tr>

			<tr>
				<td><b>Curso Realizado:</b></td>
				<td><?php echo $reporte->cursorealizado;?></td>
			</tr>

			<tr>
				<td><b>Grado Escolar:</b></td>
				<td><?php echo $reporte->gradoescolar;?></td>>
			</tr>

			<tr>
				<td><b>Numero de Cursos Impartidos:</b></td>
				<td><?php echo $reporte->numerocursosimpartidos;?></td>
			</tr>

			<tr>
				<td><b>Expiracion Licencia:</b></td>
				<td><?php echo $reporte->expiracionlicencia;?></td>
			</tr>

			



		</tbody>
	</table>

	

	<br>
	<br>

	


	<table border="1" >
	    <thead>
	    	<tr bgcolor="#FF0000">
				<th colspan="3">INSTRUCTORES AUXILIARES</th>
			</tr>  
	        <tr>
	            <th>Nombre Instructor Auxiliar</th>
	            <th>Telefono</th>
	            <th>Direccion</th>
	            
	        </tr>
	    </thead>
	    <tbody>
	    <?php 
	        $prep_state = $instructor->getAllInstructoresCurso();
	        while ($row = $prep_state->fetch(PDO::FETCH_ASSOC))
	        {
	    ?>
	        <tr>                 
	            <td><?php echo $row['nombre']." ".$row['apaterno']." ".$row['amaterno'];?></td>                                   
	            <td><?php echo $row['telefono'];?></td>      
	            <td><?php echo $row['direccion'];?></td>                                            
	        </tr>
	    <?php } ?>                                           
	    </tbody> 
	</table>

	<br>
	<br>


	<table  border="1">
	    <thead>
	    	<tr bgcolor="#FF0000">
				<th colspan="2">EVIDENCIAS</th>
			</tr>
	        <tr>
	            <th>Formas</th>
	            <th>Enlace</th>
	        </tr>
	    </thead>
	    <tbody>
	    <?php 
	        $prep_state = $evidencias->ConsultarMisEvidencias();
	        while ($row3 = $prep_state->fetch(PDO::FETCH_ASSOC))
	        {
	    ?>
	        <tr>
	            <td>
	                <?php echo $row3['evidencia'];?>
	            </td>
	            
	            <td>
	                <a href="<?php echo $row3['enlace'];?>" target="_blank"><p class="fa fa-cloud-download"></p> Consultar</a>
	                
	            </td>
	            
	            
	           
	        </tr>
	    <?php } ?> 
	    </tbody>
	</table>

	<br>
	<br>


	<table border="1">
	    <thead>
	    <tr bgcolor="#FF0000">
			<th colspan="10">ALUMNOS</th>
		</tr>
	        <tr>
	            <th>Nombre del Alumno </th>
	            <th>Lugar de Trabajo</th>
	            <th>Fecha de Nacimiento</th>
	            <th>Correo</th>
	            <th>Edad</th>
	            <th>Estadocivil</th>
	            <th>Escolaridad</th>
	            <th>Domicilio</th>
	            <th>Telefono</th>
	            <th>Correo</th>

	        </tr>
	    </thead>
	    <?php 
	            $prep_state = $alumno->ConsultarAlumnosCurso();
	            while ($row2 = $prep_state->fetch(PDO::FETCH_ASSOC))
	            {
	        ?>
	    <tbody>
	        <tr>
	            <td><?php echo $row2['nombre']." ".$row2['apaterno']." ".$row2['amaterno'];?></td>
	            <td><?php echo $row2['lugartrabajo'];?></td>
	            <td><?php echo $row2['fechanacimiento'];?></td>
	            <td><?php echo $row2['correo'];?></td>
	            <td><?php echo $row2['edad'];?></td>
	            <td><?php echo $row2['estadocivil'];?></td>
	            <td><?php echo $row2['escolaridad'];?></td>
	            <td><?php echo $row2['domicilio'];?></td>
	            <td><?php echo $row2['telefono'];?></td>
	            <td><?php echo $row2['correo'];?></td>
	            
	        </tr>
	    <?php } ?>    
	    </tbody>
	</table>





</body>


</html>