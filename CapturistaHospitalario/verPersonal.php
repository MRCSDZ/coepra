<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/

 require('Conexiones/BD.php');
  
  $matricula=$_GET['matricula'];
  
  $query="SELECT * FROM personales
                 WHERE matricula= '$matricula'";
  
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
                        <h1 class="page-header"> <i class="fa fa-user-md" ></i> <?php echo $row["matricula"]; ?></h1>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Datos Generales TAMP
                            </div>
                            <div class="panel-body">
                                <b>Matricula: </b><?php echo $row["matricula"];?> <br>
                                <b>Nombre: </b><?php echo $row["nombre"];?> <br>
                                <b>Apellido Paterno: </b><?php echo $row["apaterno"];?> <br>
                                <b>Apellido Materno: </b><?php echo $row["amaterno"];?> <br>
                                <b>Cargo: </b><?php echo $row["cargo"];?> <br>
                                <b>Servicio: </b><?php echo $row["servicio"];?> <br>
                                <b>Piso: </b><?php echo $row["piso"];?> <br>
                                <b>Telefono: </b><?php echo $row["telefono"];?> <br>
                                <b>Telefono: </b><?php echo $row["telefono2"];?> <br>
                                <b>Ext. Telefonica: </b><?php echo $row["ext"];?> <br>
                                <b>Turno Laboral: </b><?php echo $row["turno"];?> <br>
                                <b>Dias Laborales: </b><?php echo $row["dias"];?> <br>
                            </div>
                            <div class="panel-footer">
                                <a href="ModificarPersonalGeneral.php?matricula=<?php echo $row['matricula'];?>">Modificar Datos Generales </a> 
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                       
                    </div>
                    <div class="col-lg-12">
                        <form action="EliminarPersonal.php" method="POST">
                            <input type="hidden" value=" <?php echo $matricula; ?>" name="matricula" >
                            <input type="submit" class="form-control" value="Eliminar Personal" name="">
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

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

