<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
$id = $_SESSION['idusuario_global'];
// Clases de base de datos y usuarios
include_once '../clases/database.php';
include_once '../clases/fichaidentificacion.php';
include_once '../initial.php';

// Construir instancias
$fichaidentificacion = new Fichaidentificacion($db);
$fichaidentificacion->id = $id;
$fichaidentificacion->exist();

$con = " ";
$sin = " ";
$idficha = " ";

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
                        <h1 class="page-header">Plataforma Centro Regulador de Urgencias Medicas</h1>
                    </div>

                    <div class="col-lg-12">
                        <?php 

                            $estatus= $fichaidentificacion->comprobacion;

                            if ($estatus > 0) 
                            {
                                //echo "si tiene su ficha";
                                $sin = "hidden";
                                $con = " ";
                                $_SESSION['fichainstructor'] = $fichaidentificacion->idf;
                            }

                            else
                            {
                                //echo "no tiene ficha noob";
                                $sin = "";
                                $con = "hidden";
                                $idficha = " ";

                            }

                        ?>   
                        <fieldset <?php echo $sin; ?> >
                            <center><h3>Instructor No puedes impartir un curso si no tienes una ficha de identificacion </h3></center>
                            <center><a href="CrearFichaIdentificacion.php" class="btn btn-primary">Crear Ficha de Identificacion</a></center>
                        </fieldset>

                        <fieldset <?php echo $con; ?> >
                            <center><h3> Usted ya cuenta con su ficha de identifiacion presione continuar para crear el curso o en editar para modificarla</h3></center>
                            <center>
                                
                                <input type="hidden" value="<?php echo $idficha ?>" name="idficha">
                                <a href="EditarFichaIdentificacion.php" class="btn btn-primary">Modificar Ficha de Identificacion</a>    
                                <a href="RegistroCurso.php" class="btn btn-success">Registrar Nuevo Curso</a>
                            
                            </center>
                        </fieldset>



                    
                        
                        
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

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
