<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_3.php");
/******************  NO BORRAR  ******************/
require('../Conexiones/BD.php');



$id = $_GET["id"];
$jurisdiccion = $_GET["jurisdiccion"];
$nombre = $_GET["nombre"];
$apaterno = $_GET["apaterno"];
$amaterno = $_GET["amaterno"];
$sexo = $_GET["sexo"];
$fechanacimiento = $_GET["fechanacimiento"];

$escolaridad = $_GET["escolaridad"];
$nivel = $_GET["nivel"];
$direccion = $_GET["direccion"];
$municipio = $_GET["municipio"];
$telefono1 = $_GET["telefono1"];
$correo = $_GET["correo"];
$telefono2 = $_GET["telefono2"];

$tamp = $_GET["tamp"];
$asociacionservicio = $_GET["aservicio"];
$asociacioncurso = $_GET["acurso"];
$fechacurso = $_GET["fcurso"];
$experiencia = $_GET["experiencia"];

 $query="UPDATE tamp 
         SET jurisdiccion= '$jurisdiccion', 
             nombre='$nombre', 
             apaterno='$apaterno', 
             amaterno= '$amaterno',
             sexo= '$sexo',
             fechanacimiento= '$fechanacimiento',
             escolaridad='$escolaridad', 
             nivel='$nivel', 
             direccion= '$direccion',
             municipio= '$municipio',
             telefono1= '$telefono1',
             correo='$correo', 
             telefono2= '$telefono2', 
             TAMP= '$tamp', 
             asociacionservicio= '$asociacionservicio',
             asociacioncurso= '$asociacioncurso',
             fechacurso= '$fechacurso',
             experiencia= '$experiencia'
       WHERE idtamp = $id";
                   
                                            
    $resultado=$mysqli->query($query);
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
                        <h1 class="page-header">Guardar Modificacion TAMP</h1>
                    </div>

                    <center>    
                            <?php if($resultado>0){ ?>
                                <h1>TC guardado correctamente </h1>
                                <a href="ConsultarTAMPS.php"> Consultar TAMPS Guardados</a>
                                <?php }else{ ?>
                                    <h1>Error al Guardar TAMP</h1>   
                                    </br>
                                    <a href="ConsultarTAMPS.php">Regresar</a>     
                                <?php   } ?>        
                        </center>

                    



                    

                    
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
