<?php
require('fpdf.php');

session_start(); 
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

require('fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', '12');
$pdf->Cell(10, 6, 'Num', 1, 0, 'C');
$pdf->Cell(70, 6, 'Nombre Completo', 1, 0, 'C');
$pdf->Cell(45, 6, 'Edo. que representa', 1, 0, 'C');
$pdf->Cell(55, 6, 'Institucion/Organizacion', 1, 0, 'C');
$pdf->Cell(50, 6, 'Correo', 1, 0, 'C');
$pdf->Cell(40, 6, 'Firma', 1, 0, 'C');
 




 

/*$misDatos = array(  array('nombre' => 'Esperbeneplatoledo', 'apellido' => 'Martínez', 'matricula' => '20420423'),
                    array('nombre' => 'Araceli', 'apellido' => 'Morales', 'matricula' =>  '204909'),
                    array('nombre' => 'Georginadavabulus', 'apellido' => 'Galindo', 'matricula' =>  '2043442'),
                    array('nombre' => 'Luis', 'apellido' => 'Dolores', 'matricula' => '20411122'),
                    array('nombre' => 'Mario', 'apellido' => 'Linares', 'matricula' => '2049990'),
                    array('nombre' => 'Viridianapaliragama', 'apellido' => 'Badillo', 'matricula' => '20418855'),
                    array('nombre' => 'Yadiramentoladosor', 'apellido' => 'García', 'matricula' => '20443335')
                );
*/

/*while ($row2 = $prep_state->fetch(PDO::FETCH_ASSOC))
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
    }
*/

 
$pdf->Output(); //Salida al navegador
?>