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
                        <h1 class="page-header">Curso Primeros Auxilios Nivel II</h1>
                    </div>

                    
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-calendar fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">15</div>
                                        <div>Dias Restantes de curso</div>
                                    </div>
                                </div>
                            </div>
                            <a href="">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Mas...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> 


                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-group fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">10</div>
                                        <div>Alumnos Cursando</div>
                                    </div>
                                </div>
                            </div>
                            <a href="AgregarAlumno.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Agregar Alumnos</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


            
                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                            Datos de Curso
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <p class="fa fa-eye"></p> Ver ficha Identificacion en Primera Respuesta <br>
                                <b>Nombre del Curso:</b> Primeros Auxilios Nivel II <br>
                                <b>Instructor Principal:</b> <a href="PerfilUsuario.php">Marcos Diaz Martinez</a>  <br>
                                <b>Inicio Curso:</b> 2015/10/10 <b>Terminacion Curso:</b> 2015/11/10  <br>
                                <b>Horario:</b> L-V 7:00- 1:00 <br>
                                <b>Lugar del Curso:</b> Centro de Convenciones <br>
                                <b>Direccion:</b> Alamos #123 Col Tomate<br>
                                <b>Dependencia del Curso:</b> Cruz Roja <br>
                                <b>Curso Dirigido a: </b>Cualquier Persona   <b>Giro:</b> Salud <br><br>

                                <p class="fa fa-gears"></p> Modificar Datos    
                            
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>


                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                            Instructores Auxiliares
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre Instructor Auxiliar</th>
                                                <th>Telefono</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jose Perez Leon</td>
                                                <td>664 764 50 98</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Enrique Segoviano Lopez</td>
                                                <td>664 300 22 11</td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br><p class="fa fa-plus-circle"></p> Agregar Instructor Auxiliar
                                    
                                    

                                </div>
                            <!-- /.table-responsive -->
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>


                   





                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                            Archivos Descargables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Formas</th>
                                                <th>Enlace</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Registro de asistencia</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Ficha Identificacion de Alumnos</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Evaluacion Destrezas</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                               
                                            </tr>

                                            <tr>
                                                <td>Formato Evaluacion de Curso</td>
                                                <td><p class="fa fa-download"></p> Descarga</td>
                                               
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

                    <div class="col-lg-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                            Evidencias
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Formas</th>
                                                <th>Enlace</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr>
                                                <td>Evidencia #1</td>
                                                <td><p class="fa fa-upload"></p> Subir</td>
                                               
                                            </tr>
                                            <tr>
                                                <td>Evidencia #2</td>
                                                <td><p class="fa fa-upload"></p> Subir</td>
                                               
                                            </tr>

                                            <tr>
                                                <td>Evidencia #3</td>
                                                <td><p class="fa fa-upload"></p> Subir</td>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    
                                </div>
                            <!-- /.table-responsive -->
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    </div>


                    <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Alumnos en el Curso
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre del Alumno </th>
                                            <th>Estado que representa</th>
                                            <th>Institucion/Organizacion</th>
                                            <th>Correo</th>
                                            <th>Curso Activo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Rafael Rios Flores</td>
                                            <td>N/A</td>
                                            <td>IMSS</td>
                                            <td>rafael@rios.com</td>
                                            <td>Primeros Auxilios II</td>
                                        </tr>
                                        <tr>
                                            <td>Ricardo Lopez Peralta</td>
                                            <td>N/A</td>
                                            <td>ISSTECALI</td>
                                            <td>ricardo@lopez.com</td>
                                            <td>Rescate I</td>
                                        </tr>

                                        <tr>
                                            <td>Serigio Sandoval Lopez</td>
                                            <td>N/A</td>
                                            <td>Cruz Roja</td>
                                            <td>Sergio@Sandoval.com</td>
                                            <td>Auxilio Vial</td>
                                        </tr>

                                        <tr>
                                            <td>Marcos Aaron Diaz</td>
                                            <td>N/A</td>
                                            <td>ISSTE</td>
                                            <td>marcos@aaron.com</td>
                                            <td>Auxilio Vial II</td>
                                        </tr>

                                        <tr>
                                            <td>Emanuel Villa</td>
                                            <td>N/A</td>
                                            <td>Hospital Los Angeles</td>
                                            <td>Emanuel@villa.com</td>
                                            <td>Enfermedades Cardio Respiratorias</td>
                                        </tr>

                                        <tr>
                                            <td>Fidel martinez</td>
                                            <td>N/A</td>
                                            <td>Cruz Roja</td>
                                            <td>Fidel@Martinez.com</td>
                                            <td>Auxilio Vial III</td>
                                        </tr>

                                        <tr>
                                            <td>Javier Cortez</td>
                                            <td>N/A</td>
                                            <td>Hospital X</td>
                                            <td>Javier@cortez.com</td>
                                            <td>Primeros Auxilios</td>
                                        </tr>

                                        <tr>
                                            <td>Efrain Velarde</td>
                                            <td>N/A</td>
                                            <td>Cruz Roja</td>
                                            <td>Efrain@Velarde.com</td>
                                            <td>Curso nivel II</td>
                                        </tr>

                                        <tr>
                                            <td>Hugo Sanchez</td>
                                            <td>N/A</td>
                                            <td>IMSS+</td>
                                            <td>Hugo@sanchez.com</td>
                                            <td>Introduccion Paramedico</td> 
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
                <!-- /.col-lg-12 -->






                    

                    
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
