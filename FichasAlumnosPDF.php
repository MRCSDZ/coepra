<?php
require('fpdf.php');
session_start(); 


//
include_once 'clases/database.php';
include_once 'initial.php';
include_once 'clases/alumnos.php';

//
$id = $_SESSION["idcurso_global"];
//Alumnos
$alumno = new Alumnos($db);
$alumno->idcurso = $id;






class PDF extends FPDF
{
	function Header()
	{
	
	//Cabecera del PDF
	$this->Image('imagenes/bannerpdf.png', 10, 10, 180);
	$this->SetFont('Arial', 'B', '12');
	$this->ln(24);
	$this->Cell(0, 10, 'Subsecretaria de Prevencion y Promocion de la salud', 0, 0, 'L');
	$this->ln(5);
	$this->Cell(0, 10, 'Secretariado Tecnico del', 0, 0, 'L');
	$this->ln(5);
	$this->Cell(0, 10, 'Consejo Nacional para la Prevencion de Accidentes', 0, 0, 'L');
	$this->SetFont('Arial', 'B', '11');
	$this->ln(8);
	$this->ln(8);
	$this->ln(8);
	$this->ln(8);
	
	
	$this->Ln();
	}
	
	function Footer()
	{
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial', '', 8);
		$this->Cell(0, 0, 'Guadalajara 43 3er Piso Col. Roma Norte Del. Cuahutemoc Mexico. DF 06700', 0, 0, 'R');
		$this->SetFont('Arial', 'B', 8);
		$this->Cell(0, 5, 'T(55) 5553 9691 (55) 5553 96 31 acervantes@salud.gob.mx ', 0, 0, 'R');
		$this->SetFont('Arial', '', 8);
		$this->Cell(0, 10, 'T(55) 5553 2000 33 00 ext. 53012 www.arturo.garciacruz@yahoo.com.mx ', 0, 0, 'R');

		
		
	}
	
}
$pdf = new PDF('P', 'mm', 'A4');
	$prep_state = $alumno->ConsultarAlumnosCurso();
    while ($row2 = $prep_state->fetch(PDO::FETCH_ASSOC))
    {	
    	$nombre = $row2['nombre']." ".$row2['apaterno']." ".$row2['amaterno'];
    	$lugartrabajo= $row2['lugartrabajo'];
    	$fechanacimiento = $row2['fechanacimiento'];
    	$edad = $row2['edad'];
    	$estadocivil = $row2['estadocivil'];
    	$escolaridad = $row2['escolaridad'];
    	$domicilio = $row2['domicilio'];
		$telefono = $row2['telefono'];
		$correo = $row2['correo'];
		$fechaelaboracion = $row2['fechaelaboracion'];
    	
    	
    	
    	

    	





		

		$pdf->SetFont('Arial', '', 10);
		$pdf->AddPage();

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->Cell(0, 10, 'FICHA DE IDENTIFICACION DEL ALUMNO', 0, 0, 'C');
		$pdf->ln(15);
		$pdf->Cell(0, 10, 'DATOS GENERALES', 0, 0, 'C');
		$pdf->ln(15);
		
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->ln(10);
		
		$pdf->SetFont('Arial', 'B', '11');
		$pdf->Cell(0, 0, " NOMBRE COMPLETO: $nombre   ", 0, 'L');
		$pdf->ln(13);
		$pdf->Cell(0, 0, " LUGAR DE TRABAJO: $lugartrabajo ", 5, 'L');
		$pdf->ln(13);
		$pdf->Cell(0, 0, " FECHA DE NACIMIENTO: $fechanacimiento ", 5, 'L');
		$pdf->ln(13);
		$pdf->Cell(0, 0, " EDAD: $edad ", 5, 'L');
		$pdf->ln(13);
		$pdf->Cell(0, 0, " ESTADO CIVIL: $estadocivil  ESCOLARIDAD: $escolaridad ", 5, 'L');
		$pdf->ln(13);
		$pdf->Cell(0, 0, " DOMICILIO: $domicilio ", 5, 'L');
		$pdf->ln(13);
		$pdf->Cell(0, 0, " TELEFONO: $telefono E-MAIL: $correo", 5, 'L');
		$pdf->ln(13);
		$pdf->Cell(0, 0, " FECHA ELABORACION DEL DOCUMENTO: $fechaelaboracion ", 5, 'L');
		

	}
$pdf->Output();







?>
