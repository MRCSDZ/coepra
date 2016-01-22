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


include_once '../clases/administrador.php';

// Construir instancias

$idcurso = $_GET["idcurso"];
$_SESSION["idcurso_global"] = $idcurso;

//Cursos
$curso = new Curso($db);
$curso->idcurso = $idcurso;
$curso->cantidaddiastranscurridos();
$curso->getcurso();

//Instructores
$instructor = new Instructores($db);
$instructor->idcurso = $idcurso;

 //LugarCurso
$lugarcurso = new Lugarcurso($db);
$lugarcurso->idcurso = $idcurso;
$lugarcurso->VerLugar();

//Alumnos
$alumno = new Alumnos($db);
$alumno->idcurso = $idcurso;
$alumno-> CantidadAlumnosCurso($db);

//Evidencias
$evidencias = new Evidencia($db);
$evidencias->idcurso = $idcurso;



$mensajeboton= " ";
$urlestado = " ";
$colorboton = " ";
$colorpanel = " ";
$colorcajas = " ";

if ($curso->estadocurso == 'ACTIVO')
{
    $urlestado = "TerminarCurso.php?Cambiar";
    $colorboton = "btn btn-warning";
    $colorpanel = "panel panel-success";
    $colorcajas = "panel panel-green";
    $mensajeboton= "Terminar Curso";


}
else 
{
    $urlestado = "ActivarCurso.php?Cambiar";
    $colorboton = "btn btn-success";
    $colorpanel = "panel panel-warning";
    $colorcajas = "panel panel-yellow";
    $mensajeboton = "Activar Curso";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="shortcut icon" type="image/png" href="/imagenes/favicon.png" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COEPRA- Plataforma del Centro Regulador de Urgencias Medicas</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- NAVEGACION -->
         <?php require('menu/menu.php'); ?>
        <!-- NAVEGACION -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">

                   

                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $curso->nombrecurso;?></h1>
                    </div>

                    <div class="col-lg-12">
                       <div class="btn-group btn-group-justified">
                            <a href="ConsultarCursos.php" class="btn btn-primary">Regresar a Cursos</a>
                            <a href="../Instructor/ReporteCurso.php" class="btn btn-info">Generar Reporte General de Curso</a>
                            
                        </div>
                        <br>
                    </div>

                    

                    
                    <div class="col-lg-6 col-md-6">
                        <div class="<?php echo $colorpanel; ?>">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $curso->diastranscurridos;?></div>
                                        <div>Dias Transcurridos</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 


                    <div class="col-lg-6 col-md-6">
                        <div class="<?php echo $colorpanel; ?>">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-group fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $alumno->cantidadalumos;?></div>
                                        <div>Alumnos Cursando</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>


            
                    <div class="col-lg-6">
                        <div class="<?php echo $colorcajas; ?>">
                            <div class="panel-heading">
                            Datos de Curso
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                
                                <div class="well well-sm">
                                    <a href="VerFichaIdentificacion.php" target="_blank"><p class="fa fa-eye"></p> Ver Ficha Identificacion en Primera Respuesta</a> 
                                </div>
                                <div class="well well-sm">
                                    
                                    <center><h4>Datos Generales</h4></center>
                                    <b>Nombre del Curso:</b> <?php echo $curso->nombrecurso;?> <br>
                                    <b>Instructor Activo:</b> <a href="../MiPerfil.php" target="_blank"> <?php echo $_SESSION["nombre_global"] ?> </a>  <br>
                                    <b>Inicio Curso:</b> <?php echo $curso->fechacurso;?><br>
                                    <b>Horario:</b> <?php echo $curso->horariocurso;?> <br> 
                                    <b>Dependencia del curso:</b> <?php echo $curso->empresainstitucion;?> <br> 
                                    <b>Curso Dirigido a: </b><?php echo $curso->empresadirigida;?><br>   
                                    <b>Giro:</b> <?php echo $curso->giroasociacion;?> <br><br>
                                     
                                        
                                       
                                    
                                </div>

                                <div class="well well-sm">    
                                    <center><h4>Ubicacion Curso</h4></center>
                                    

                                    
                                    
                                    <b>Nombre del Lugar: </b> <?php echo $lugarcurso->nombrelugar;?><br>
                                    <b>Calle: </b><?php echo $lugarcurso->calle;?> <br>
                                    <b>Numero: </b><?php echo $lugarcurso->numero;?><br>
                                    <b>Colonia: </b><?php echo $lugarcurso->colonia;?><br>
                                    <b>Ciudad: </b><?php echo $lugarcurso->ciudad;?><br>
                                    <br>
                                    <br>
                                    

                                </div>
                                
                                   
                            
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>


                    <div class="col-lg-6">
                        <div class="<?php echo $colorcajas; ?>">
                            <div class="panel-heading">
                            Instructores Auxiliares
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre Instructor Auxiliar</th>
                                                <th>Telefono</th>
                                                
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
                                                
                                                              
                                            </tr>
                                        <?php } ?>                                           
                                        </tbody> 
                                    </table>
                                    <br>
                                    <br>

                                  
                                   
                                       
                                    
                                        

                                </div>
                            <!-- /.table-responsive -->
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>

                    <div class="col-lg-12">
                        
                    </div>


                   





                    <div class="col-lg-6">
                        <div class="<?php echo $colorcajas; ?>">
                            <div class="panel-heading">
                            Archivos Descargables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Formas</th>
                                                <th>Enlace</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <tr>
                                                <td>Registro de asistencia</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Ficha Identificacion de Alumnos</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Evaluacion Destrezas</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                               
                                            </tr>

                                            <tr>
                                                <td>Formato Evaluacion de Curso</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                               
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                    
                                </div>
                            <!-- /.table-responsive -->
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>

                    <div class="col-lg-6">
                        <div class="<?php echo $colorcajas; ?>">
                            <div class="panel-heading">
                            Evidencias
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
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

                                    
                                   
                                    
                                </div>
                            <!-- /.table-responsive -->
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>


                    <div class="col-lg-12">
                    <div class="<?php echo $colorcajas; ?>">
                        <div class="panel-heading">
                            Alumnos en el Curso
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre del Alumno </th>
                                            <th>Lugar de Trabajo</th>
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
                                            <td><?php echo $row2['telefono'];?></td>
                                            <td><?php echo $row2['correo'];?></td>
                                            
                                        </tr>
                                    <?php } ?>    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->






                    

                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
