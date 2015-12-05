<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/

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

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                        <h1 class="page-header">Consultar Ambulancias</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Ambulancias Registradas
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Numero Verificacion Sanitaria</th>
                                                <th>Numero Economico</th>
                                                <th>Municipio</th>
                                                <th>Institucion/dependencia/Asc. Civil/Empr. Sector Privado</th>
                                                <th>Marca/Modelo/Año</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Tijuana</td>
                                                <td>Cruz Roja</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>
                                                <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Tijuana</td>
                                                <td>Hospital General</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>

                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Mexicali</td>
                                                <td>Cruz Roja</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>
                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Mexicali</td>
                                                <td>Cruz Roja</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>
                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Rosarito</td>
                                                <td>Cruz Roja</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>
                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Rosarito</td>
                                                <td>Hospital General</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>
                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Tijuana</td>
                                                <td>Cruz Roja</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>
                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Ensenada</td>
                                                <td>Cruz Roja</td>
                                                <td>Ford Ecoline 2010</td>
                                            </tr>

                                            <tr>
                                                <td><a href="Ambulancia.php">00001</a></td>
                                                <td>10000</td>
                                                <td>Tecate</td>
                                                <td>Cruz Roja</td>
                                                <td>Ford Ecoline 2010</td>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
