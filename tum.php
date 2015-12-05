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
                        <h1 class="page-header"><p class="fa fa-user-md"></p> TUM</h1>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                            Datos Generales
                            </div>
                            <div class="panel-body">
                                <b>Jurisdiccion:</b> Accidentes Y lesiones <br>
                                <b>Nombre:</b> Marcos Aaron Diaz Martinez <br>
                                <b>Sexo:</b> Masculino <br>
                                <b>Fecha de Nacimiento:</b> 1991-06-06<br>
                                <b>Nivel de TUM:</b> Basico <br>
                                <b>Vigencia:</b> 2016-05-04 <br>



                            </div>
                            <div class="panel-footer">
                                Modificar Datos <p class="fa fa-pencil-square-o"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                            Localizacion
                            </div>
                            <div class="panel-body">
                                
                                <b>Domicilio:</b> Calle Peruanos Fraccionamiento Paloma <br>
                                <b>Telefono 1:</b> 664 535 34 21 <br>
                                <b>Telefono 2:</b> 664 876 23 24 <br>
                                <b>Correo 1:</b> tum@correo1.com <br>
                                <b>Correo 2:</b> tum@correo2.com <br>

                            </div>
                            <div class="panel-footer">
                                Modificar/Agregar Datos <p class="fa fa-pencil-square-o"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                            TUM
                            </div>
                            <div class="panel-body">
                                
                                <b>Voluntariado:</b>
                                <b>Asociacion, Institucion o Empresa Donde Presta Servicio:</b> Cruz Roja <br>
                                <b>Fecha Curso TUM:</b> 2012-01-02 <br>
                                <b>Años de experiencia</b> 2012 <br>
                                Capacitaciones:

                                <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>RCP Para Profesionales</th>
                                            <th>ACLS</th>
                                            <th>PR en Trauma NAEMT</th>
                                            <th>PHTLS</th>
                                            <th>PEPP</th>
                                            <th>PALS</th>
                                            <th>NALS</th>
                                            <th>EMPACT</th>
                                            <th>AMLS</th>
                                            <th>FSCS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>X</td>
                                            <td></td>
                                            <td></td>
                                            <td>X</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>X</td>
                                            <td></td>
                                            <td>X</td>
                                        </tr>


                                        
                                    </tbody>
                                </table>
                                <b>Otros Cursos:</b> <br>
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
