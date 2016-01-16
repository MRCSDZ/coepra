<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
// 
if(isset($_SESSION["idcurso_global"]))
{
    $idcurso = $_SESSION["idcurso_global"];
}
else
{
    $idcurso = $_POST["idcurso"];
}
$idalumno = $_POST["idalumno"];
setcookie("idalumno", $idalumno);
 
//
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/alumnos.php';

//
$alumno = new Alumnos($db);
$alumno->idalumno = $idalumno;
$alumno->ConsultarAlumno();

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
                        <h1 class="page-header">Alumno Curso</h1>
                    </div>
                    

                    <form action="EditarAlumno.php" method="POST" style="display: inline;">
                    
                        <div class="col-lg-12">
                            <b>Nombre</b>
                            <input value="<?php echo $alumno->nombre; echo " "; echo $alumno->apaterno; echo " "; echo $alumno->amaterno; ?>" name="nombrecompleto" type="text" class="form-control" disabled>
                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Lugar de Trabajo</b>
                            <input value="<?php echo $alumno->lugartrabajo;?>" name="lugartrabajo" type="text" class="form-control" disabled>
                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Fecha de Nacimiento</b>
                                <input value="<?php echo $alumno->fechanacimiento;?>" name="fechanacimiento" type="date" class="form-control" disabled>                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Edad</b>
                                <input value="<?php echo $alumno->edad;?>" name="edad" type="number" class="form-control" disabled>                                   
                            <br>
                        </div>


                        <div class="col-lg-12">
                            <b>Estado Civil</b>
                                <input value="<?php echo $alumno->estadocivil;?>" name="estadocivil" type="text" class="form-control" disabled>                                   
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Escolaridad</b>
                                <input value="<?php echo $alumno->escolaridad;?>" name="escolaridad" type="text" class="form-control" disabled>                                   
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Domicilio</b>
                                <input value="<?php echo $alumno->domicilio;?>" name="domicilio" type="text" class="form-control" disabled>                                   
                            <br>
                        </div>



                        <div class="col-lg-3">
                            <b>Telefono</b>
                            <input value="<?php echo $alumno->telefono;?>" name="telefono" type="number" class="form-control" disabled>
                            <br>
                        </div>



                        <div class="col-lg-9">
                            <b>Correo</b>
                            <input value="<?php echo $alumno->correo;?>" name="svpr" type="text" class="form-control" disabled>
                            <br>
                        </div>

                        


                
                            

                        <div class="col-lg-12">
                            <input type="hidden" name="idinstructor" value="<?php echo $idinstructor;?>" >
                            <!--<button type="submit" class="btn btn-success"> Editar Instructor Auxiliar</button>-->
                            <a href="EditarAlumnoCurso.php" class="btn btn-success">Editar Datos Alumno</a>
                            
                    </form> 

                    <form action="MiCurso.php" method="POST" style="display: inline;">
                        <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>" >
                        <button type="submit" class="btn btn-primary">Regresar al Curso</button>
                        
                    </form>

                    
                    <a href="EliminarAlumno.php" class="btn btn-danger"> Eliminar Alumno</a>
                    
                    <br>
                    <br>
                    

                    </div> 

                    
                              
                            
                    
                   
                      
                       

                   
                     

                    

                    
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
    
    <!--ALERTA -->
    <script src="../js/alerta.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
