<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_3.php");
/******************  NO BORRAR  ******************/

 require('../Conexiones/BD.php');
  
  $id=$_GET['id'];
  
  $query="SELECT * FROM tamp
             INNER JOIN capacitaciones
                    ON capacitaciones.tamp_idtamp = tamp.idtamp
                 WHERE idtamp= '$id'";
  
  $resultado=$mysqli->query($query);
  
  $row=$resultado->fetch_assoc();
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
                        <h1 class="page-header"> <i class="fa fa-user-md" ></i> <?php echo $row["nombre"]." ".$row["apaterno"]." ".$row["amaterno"]; ?></h1>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Datos Generales TAMP
                            </div>
                            <div class="panel-body">
                                <b>Jurisdiccion: </b><?php echo $row["jurisdiccion"];?> <br>
                                <b>Sexo: </b><?php echo $row["sexo"];?> <br>
                                <b>Fecha Nacimiento: </b><?php echo $row["fechanacimiento"];?> <br>
                                <b>Escolaridad: </b><?php echo $row["escolaridad"];?> <br>
                                <b>Nivel: </b><?php echo $row["nivel"];?> <br>
                                <b>Domicilio Particular: </b><?php echo $row["direccion"];?> <br>
                                <b>Municipio: </b><?php echo $row["municipio"];?> <br>
                                <b>Telefono 1: </b><?php echo $row["telefono1"];?> <br>
                                <b>Correo: </b><?php echo $row["correo"];?> <br>
                                <b>Telefono 2: </b><?php echo $row["telefono2"];?> <br>
                                <b>TAMP: </b><?php echo $row["TAMP"];?> <br>
                                <b>Asociacion, Institucion o Empresa Donde Presta su Servicio: </b><?php echo $row["asociacionservicio"];?> <br>
                                <b>Asociacion, Institucion o Empresa Donde Tomo su Curso: </b><?php echo $row["asociacioncurso"];?> <br>
                                <b>Curso de TAMP: </b><?php echo $row["fechacurso"];?> <br>
                                <b>Años Experiencia: </b><?php echo $row["experiencia"];?> <br>
                            </div>
                            <div class="panel-footer">
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Capacitacion Continua 
                            </div>
                            <div class="panel-body">
                                <b><?php echo $row["rcp"];?></b><br>
                                <b><?php echo $row["pals"];?></b><br>
                                <b><?php echo $row["acls"];?> </b><br>
                                <b><?php echo $row["nals"];?> </b><br>
                                <b><?php echo $row["prntraumaetm"];?> </b><br>
                                <b><?php echo $row["empact"];?> </b><br>
                                <b><?php echo $row["phtls"];?> </b><br>
                                <b><?php echo $row["amls"];?> </b><br>
                                <b><?php echo $row["peep"];?> </b><br>
                                <b><?php echo $row["fsc"];?> </b><br>
                                <b><?php echo $row["otros"];?> </b><br>
                            </div>
                            <div class="panel-footer">
                                 
                            </div>
                        </div>
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
