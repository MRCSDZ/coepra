<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
include_once '../clases/database.php';

include_once '../initial.php';
include_once '../clases/evidencias.php';


$idcurso = $_SESSION['idcurso_global'];
$idevidencia = $_COOKIE["idevidencia"]; 

$evidencia = new Evidencia($db);


$Mensaje = " ";


if (isset($_POST['del-btn']))
{
    $evidencia->idevidencia = $idevidencia;
    $evidencia->EliminarEvidencia();
    header("Location: EliminarEvidencia.php?deleted");
}
      
      if(isset($_GET['deleted'])){
         $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            La evidencia fue eliminada exitosamente
                        </div>";
        unset($_POST);

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
                        <h1 class="page-header">Eliminar Evidencia </h1>
                    </div>

                    <div class="col-lg-12">
                            <?php echo $Mensaje;?> 
                    </div>

                    <div class="col-lg-12">
                        <?php
                            if (isset($_POST)) 
                            {
                        ?>
                            <form method='post'>
                                <input type='hidden' name='id' value='id' />
                                <div class='alert alert-warning'>Estas seguro que quieres eliminar la evidencia?"</div>
                                <button type='submit' class='btn btn-danger' name='del-btn'>Si</button>
                                <a href='VerEvidenciaCurso.php' class='btn btn-default' role='button'>No</a>
               
                            </form>
                        <?php 
                            }

                            else 
                            {   
                        ?>
                        <?php  ?> 
                            <form action="MiCurso.php" method="POST"> 
                                <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>" > 
                                <button type="submit" class="btn btn-large btn-primary">Regresar a evidencia :(</button> 
                                
                            </form>


                        <?php
                            }
                        ?>
                        
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
