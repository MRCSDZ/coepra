<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
// Variables superglobales
$idcurso = $_SESSION['idcurso_global'];
$idalumno = $_COOKIE["idalumno"]; 

//clases
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/alumnos.php';

//Instancias
$alumno = new Alumnos($db);
$alumno->idalumno = $idalumno;
$alumno->ConsultarAlumno();
$Mensaje = " ";

// check if the form is submitted
if($_POST)
{

    // Valores de usuario en POST enviados a atributos de la clase

    $alumno->idalumno             = $idalumno;
    $alumno->nombre               = htmlentities(trim($_POST['nombre']));
    $alumno->apaterno             = htmlentities(trim($_POST['apaterno']));
    $alumno->amaterno             = htmlentities(trim($_POST['amaterno']));
    $alumno->lugartrabajo         = htmlentities(trim($_POST['lugartrabajo']));
    $alumno->fechanacimiento      = htmlentities(trim($_POST['fechanacimiento']));
    $alumno->edad                 = htmlentities(trim($_POST['edad']));
    $alumno->estadocivil          = htmlentities(trim($_POST['estadocivil']));
    $alumno->escolaridad          = htmlentities(trim($_POST['escolaridad']));
    $alumno->domicilio            = htmlentities(trim($_POST['domicilio']));
    $alumno->telefono             = htmlentities(trim($_POST['telefono']));
    $alumno->correo               = htmlentities(trim($_POST['correo']));
    
    
    
    // Editar Usuario
    if($alumno->ActualizarAlumno()){
        $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            La ficha fue editada exitosamente
                        </div>";
    }

    // 
    else{
         $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times
                      </button>
                El Alumno no se pudo editar.
            </div>";
    }
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
                        <h1 class="page-header">Editar Alumno</h1>
                    </div>

                    <div class="col-lg-12">
                        <?php echo $Mensaje; ?>
                    </div>
                    

                    <form action="EditarAlumnoCurso.php" method="POST" style="display: inline;">
                    
                        <div class="col-lg-12">
                            <b>Nombre</b>
                            <input value="<?php echo $alumno->nombre; ?>" name="nombre" type="text" class="form-control" >
                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Apellido Paterno</b>
                            <input value="<?php echo $alumno->apaterno;  ?>" name="apaterno" type="text" class="form-control" >
                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Nombre Apellido Materno</b>
                            <input value="<?php echo $alumno->amaterno; ?>" name="amaterno" type="text" class="form-control" >
                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Lugar de Trabajo</b>
                            <input value="<?php echo $alumno->lugartrabajo;?>" name="lugartrabajo" type="text" class="form-control" >
                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Fecha de Nacimiento</b>
                                <input value="<?php echo $alumno->fechanacimiento;?>" name="fechanacimiento" type="date" class="form-control" >                            
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Edad</b>
                                <input value="<?php echo $alumno->edad;?>" name="edad" type="number" class="form-control" >                                   
                            <br>
                        </div>


                        <div class="col-lg-12">
                            <b>Estado Civil</b>
                                <input value="<?php echo $alumno->estadocivil;?>" name="estadocivil" type="text" class="form-control" >                                   
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Escolaridad</b>
                                <input value="<?php echo $alumno->escolaridad;?>" name="escolaridad" type="text" class="form-control" >                                   
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Domicilio</b>
                                <input value="<?php echo $alumno->domicilio;?>" name="domicilio" type="text" class="form-control" >                                   
                            <br>
                        </div>



                        <div class="col-lg-3">
                            <b>Telefono</b>
                            <input value="<?php echo $alumno->telefono;?>" name="telefono" type="number" class="form-control" >
                            <br>
                        </div>



                        <div class="col-lg-9">
                            <b>Correo</b>
                            <input value="<?php echo $alumno->correo;?>" name="correo" type="text" class="form-control" >
                            <br>
                        </div>

                        


                
                            

                        <div class="col-lg-12">
                            <input type="hidden" name="idalumno" value="<?php echo $idalumno;?>" >
                            <button type="submit" class="btn btn-success"> Editar Alumno</button>
                            <!--<a href="EditarInstructor.php" class="btn btn-success">Editar Datos Alumno</a>-->
                            
                    </form> 

                    <form action="MiCurso.php" method="POST" style="display: inline;">
                        <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>" >
                        <button type="submit" class="btn btn-primary">Regresar al Curso</button>
                        <br>
                        <br>
                    </form>

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
