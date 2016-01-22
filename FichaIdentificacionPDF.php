<?php
require('fpdf.php');
session_start(); 
$id = $_SESSION['idusuario_global'];

//
include_once 'clases/database.php';
include_once 'initial.php';
include_once 'clases/reportes.php';

//
$reporte = new Reporte($db);
$reporte->idusuario = $id;
$reporte->FichaIdentificacionUsuario();






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

	$pdf->SetFont('Arial', '', 10);
	$pdf->AddPage();

	$pdf->SetFont('Arial', 'B', 14);
	$pdf->Cell(0, 10, 'FICHA DE IDENTIFICACION DEL INSTRUCTOR EN PRIMERA RESPUESTA', 0, 0, 'C');
	$pdf->ln(15);
	
	$pdf->SetFont('Arial', 'B', 11);
	$pdf->ln(10);
	
	$pdf->SetFont('Arial', 'B', '11');
	$pdf->Cell(0, 0, " NOMBRE: $reporte->nombreinstructor", 0, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " EMPRESA Y/O INSTITUCION QUE REPRESENTA: $reporte->empresainstitucion", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " DONDE REALIZO CURSO SVB-PR: $reporte->svpr", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " FECHA DE ADIESTRAMIENTO COMO INSTRUCTOR: $reporte->fechaadiestramiento", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " LUGAR DONDE REALIZO EL CURSO INSTRUCTOR: $reporte->cursorealizado", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " GRADO ESCOLAR O ACADEMICO ACTUAL: $reporte->gradoescolar", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " NUMERO DE CURSOS IMPARTIDOS: $reporte->numerocursosimpartidos", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " TELEDONO DE CONTACTO: $reporte->telefono", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " CORREO ELECTRONICO: $reporte->correo ", 5, 'L');
	$pdf->ln(12);
	$pdf->Cell(0, 0, " FECHA DE ELABORACION DEL DOCUMENTO: $reporte->fechareporte", 5, 'L');




	$pdf->Output();








?>
