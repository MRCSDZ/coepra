<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/cursos.php';

    //Instancia de cursos
    $curso = new Curso($db);
    $curso->idusuario = $_SESSION["idusuario_global"];
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
                        <h1 class="page-header">Mis Cursos Terminados</h1>
                    </div>


                    <div class="col-lg-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Cursos Terminados
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Numero de curso</th>
                                                <th>Nombre de Curso</th>
                                                <th>Inicio de curso</th>
                                                <th>Empresa dirigida</th>
                                                <th>Panel Curso</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php 
                                            $prep_state = $curso->MostrarMisCursosInactivos();
                                            while ($row = $prep_state->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                            <tr>                 
                                                <td><?php echo $row['idcurso'];?></td>                                   
                                                <td><?php echo $row['nombrecurso'];?></td>                                    
                                                <td><?php echo $row['fechacurso'];?></td>
                                                <td><?php echo $row['empresadirigida'];?></td> 
                                                <td>
                                                    <form action="MiCurso.php" method="POST">
                                                        <input name="idcurso" type="hidden" value="<?php echo $row['idcurso'];?>">
                                                        <button type="submit" class="btn btn-primary">Ver Curso</button>
                                                    </form>
                                                </td>                     
                                            </tr>
                                        <?php } ?>                                           
                                        </tbody> 
                                    </table>
                                </div>
                                <!-- /.table-responsive --> 
                            </div>
                            <!-- /.panel-body -->
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
