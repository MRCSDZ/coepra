<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
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
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                        <h1 class="page-header">Consultar Cursos</h1>
                    </div>

                    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Consultar Cursos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre Curso</th>
                                            <th>Nombre Instructor</th>
                                            <th>Lugar Curso</th>
                                            <th>Fecha</th>
                                            <th>Empresa dirigida</th>
                                            <th>Fecha Inicio</th>
                                            <th>Estatus</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="TUM.php">Primeros Auxilios</a></td>
                                            <td>Marcos Diaz</td>
                                            <td>Mexicali</td>
                                            <td>Tijuana</td>
                                            <td>Empresa 1</td>
                                            <td>2014-10-10</td>
                                            <td>Activo</td>
                                        </tr>

                                        <tr>
                                            <td><a href="TUM.php">Primeros Auxilios</a></td>
                                            <td>Marcos Diaz</td>
                                            <td>Tijuana</td>
                                            <td>Ensenada</td>
                                            <td>Empresa 2</td>
                                            <td>2014-10-10</td>
                                            <td>Activo</td>
                                        </tr>

                                        <tr>
                                            <td><a href="TUM.php">Primeros Auxilios</a></td>
                                            <td>Marcos Diaz</td>
                                            <td>Tijuana</td>
                                            <td>Tijuana</td>
                                            <td>Empresa 4</td>
                                            <td>2014-10-10</td>
                                            <td>Terminado</td>
                                        </tr>

                                        <tr>
                                            <td><a href="TUM.php">Primeros Auxilios</a></td>
                                            <td>Marcos Diaz</td>
                                            <td>Tijuana</td>
                                            <td>Tijuana</td>
                                            <td>Empresa 3</td>
                                            <td>2014-10-10</td>
                                            <td>Terminado</td>
                                        </tr>

                                        <tr>
                                            <td><a href="TUM.php">Primeros Auxilios</a></td>
                                            <td>Marcos Diaz</td>
                                            <td>Tijuana</td>
                                            <td>Tijuana</td>
                                            <td>Empresa 3</td>
                                            <td>2014-10-10</td>
                                            <td>Activo</td>
                                        </tr>

                                        <tr>
                                            <td><a href="TUM.php">Primeros Auxilios</a></td>
                                            <td>Marcos Diaz</td>
                                            <td>Tijuana</td>
                                            <td>Tijuana</td>
                                            <td>Empresa 1</td>
                                            <td>2014-10-10</td>
                                            <td>Terminado</td>
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
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
                "language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"}
        });
    });
    </script>

</body>

</html>
