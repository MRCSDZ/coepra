<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
// 
$idcurso = $_SESSION["idcurso_global"];
$idinstructor = $_POST["idinstructor"];
setcookie("idinstructor", $idinstructor);
 
//
include_once 'clases/database.php';
include_once 'initial.php';
include_once 'clases/instructores.php';

//
$instructor = new Instructores($db);
$instructor->idinstructorauxiliar = $idinstructor;
$instructor->getInstructor();

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
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <h1 class="page-header">Instructor Auxiliar</h1>
                    </div>
                    

                    <form action="EditarInstructor.php" method="POST">
                    
                        <div class="col-lg-12">
                            <b>Nombre</b>
                            <input value="<?php echo $instructor->nombre; echo " "; echo $instructor->apaterno; echo " "; echo $instructor->amaterno; ?>" name="nombre" type="text" class="form-control" disabled>
                            
                            <br>
                        </div>





                        <div class="col-lg-3">
                            <b>Telefono</b>
                            <input value="<?php echo $instructor->telefono;?>" name="telefono" type="text" class="form-control" disabled>
                            <br>
                        </div>



                        <div class="col-lg-9">
                            <b>Direccion</b>
                            <input value="<?php echo $instructor->direccion;?>" name="svpr" type="text" class="form-control" disabled>
                            <br>
                        </div>

                        


                       

                            

                        <div class="col-lg-12">
                            <input type="hidden" name="idinstructor" value="<?php echo $idinstructor;?>" >
                            <!--<button type="submit" class="btn btn-success"> Editar Instructor Auxiliar</button>-->
                            <a href="EditarInstructor.php" class="btn btn-success">Editar</a>
                            
                    </form> 

                    <form action="MiCurso.php" method="POST">
                        <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>" >
                        <button type="submit" class="btn btn-primary">Regresar al Curso</button>
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    
    <!--ALERTA -->
    <script src="js/alerta.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
