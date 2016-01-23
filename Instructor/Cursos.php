<?php 
/******************  NO BORRAR  ******************/
session_start();

require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/

//id del usuario
$id = $_SESSION['idusuario_global'];
//Clases requeridas
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/cursos.php';
include_once '../clases/alumnos.php';

//Construir objeto
$curso = new Curso($db);
$alumnos = new Alumnos($db);
$curso->idusuario = $id;
$alumnos->idusuario = $id;

//Metodos cantidad de cursos en panel
$curso->cantidadcursosactivos();
$curso->cantidadcursosinactivos();
$curso->cantidadcursos();
$alumnos->CantidadTotalAlumnosMisCursos();

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
                        <h1 class="page-header">Cursos</h1>
                    </div>


                    
                    <!--CAJA #1-->            
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bookmark fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php echo $curso->cantidadactivos;?> </div>
                                        <div>Cursos <br>Activos </div>
                                    </div>
                                </div>
                            </div>
                            <a href="CursosActivos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Mas...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--CAJA #1-->  


                    <!--CAJA #2-->  
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-graduation-cap fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $curso->cantidadinactivos;?></div>
                                        <div>Cursos <br> Terminados </div>
                                    </div>
                                </div>
                            </div>
                            <a href="CursosTerminados.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Mas...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> 
                    <!--CAJA #2-->    


                    <!--CAJA #3-->  
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plus fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $curso->cantidadcursos;?></div>
                                        <div>Cantidad Total de Cursos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="CursosGeneral.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Mas...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--CAJA #3-->  

                    <!--CAJA #3-->  
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-group fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $alumnos->cantidadtotalalumnos;?></div>
                                        <div>Cantidad Total de Alumnos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="AlumnosCursos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Mas...</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--CAJA #3-->      
                   


                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            Cursos Activos
                            </div>
                            <!-- /.panel-heading -->

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Numero de curso</th>
                                                <th>Nombre de Curso</th>
                                                <th>Fecha de curso</th>
                                                <th>Empresa Dirigida</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $prep_state = $curso->MostrarMisCursosActivos();
                                            while ($row = $prep_state->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row['idcurso'];?></td>
                                                <td><?php echo $row['nombrecurso'];?></td>
                                                <td><?php echo $row['fechacurso'];?></td>
                                                <td><?php echo $row['empresadirigida'];?></td>
                                            </tr>
                                        <?php } ?>    
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                        <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>

                    <div class="col-lg-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Cursos Terminados
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Numero de curso</th>
                                                <th>Nombre de Curso</th>
                                                <th>Fecha de curso</th>
                                                <th>Empresa Dirigida</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $prep_state = $curso->MostrarMisCursosInactivos();
                                            while ($row2 = $prep_state->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row2['idcurso'];?></td>
                                                <td><?php echo $row2['nombrecurso'];?></td>
                                                <td><?php echo $row2['fechacurso'];?></td>
                                                <td><?php echo $row2['empresadirigida'];?></td>
                                            </tr>
                                        <?php } ?> 
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
