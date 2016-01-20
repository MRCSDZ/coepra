<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_2.php");

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
                        <h1 class="page-header"><p class="fa fa-ambulance"></p>  Ambulancia</h1>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                            Datos Generales
                            </div>
                            <div class="panel-body">
                                <b>Municipio:</b> Tijuana <br>
                                <b>Institucuon/Dependencia/Asociacion Civil/Empresa Sector Privado:</b> Cruz Roja <br>
                                <b>Tipo de Ambulancia:</b> Traslado <br>
                                <b>Numero Verificacion Sanitaria:</b> 099232 <br>
                                <b>Numero Economico:</b> 66428 <br>

                            </div>
                            <div class="panel-footer">
                                Modificar Datos <p class="fa fa-pencil-square-o"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                            Auto:
                            </div>
                            <div class="panel-body">
                                
                                <b>Marca Ambulancia:</b> Cruz Roja <br>
                                <b>Modelo:</b> Traslado <br>
                                <b>Año:</b> 2012 <br>

                            </div>
                            <div class="panel-footer">
                                Modificar/Agregar Datos <p class="fa fa-pencil-square-o"></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                            Localizacion Ambulancia
                            </div>
                            <div class="panel-body">
                                <b>Direccion:</b> Calle Cochimies Blvd Insurgentes #10000 <br>
                                <b>Telefono 1:</b> 664 553 34 55 <br>
                                <b>Telefono 2:</b> 664 848 21 22 <br>
                                <b>Correo Electronico:</b> persona@ambulancia.com <br>

                            </div>
                            <div class="panel-footer">
                                Modificar/Agregar Datos <p class="fa fa-pencil-square-o"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                            Responsable Legal
                            </div>
                            <div class="panel-body">
                                <b>Nombre:</b> Jose Perez Leon <br>
                                <b>Domicilio:</b> Av. de las Tunas #1234 Colonia Grande <br>
                                <b>Correo Electronico:</b> responsable@legal.com <br>
                                <br>



                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Telefono</th>
                                            <th>Modificar</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>664 544 32 11</td>
                                            <td>Modificar</td>
                                        </tr>
                                        <tr>
                                            <td>664 764 34 32</td>
                                            <td>Modificar</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <p class="fa fa-plus-circle"></p> Agregar Telefono
                            </div>

                            </div>
                            <div class="panel-footer">
                                Modificar/Agregar Datos <p class="fa fa-pencil-square-o"></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                            Responsable Sanitario
                            </div>
                            <div class="panel-body">
                                <b>Nombre:</b> Luis Hernandes Postigo <br>
                                <b>Domicilio:</b> Calle Uva fraccionamiento las Huertas #442 <br>
                                <b>Correo Electronico:</b> responsable@sanitario.com <br>
                                <br>



                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Telefono</th>
                                            <th>Modificar</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>664 988 44 23</td>
                                            <td>Modificar</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>664 123 74 23</td>
                                            <td>Modificar</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                <p class="fa fa-plus-circle"></p> Agregar Telefono
                            </div>

                            </div>
                            <div class="panel-footer">
                                Modificar/Agregar Datos <p class="fa fa-pencil-square-o"></p>
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
