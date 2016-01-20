<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_1.php");

/******************  NO BORRAR  ******************/
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/usuarios.php';
include_once '../clases/fichaidentificacion.php';
include_once '../clases/administrador.php';
$id = $_GET["idinstructor"];

//Instancia de usuarios
$usuario = new Usuario($db);
$usuario->id = $id;
$usuario->getUser();

$ficha = new Fichaidentificacion($db);
$ficha->idusuario = $id;
$ficha->getFicha();

$admin = new Administrador($db);
$admin->idusuario = $id;



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
                        <h1 class="page-header">Ver Instructor</h1>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Datos de Instructor
                            </div>
                            <div class="panel-body">
                                <b>Nombre Completo:</b>  <?php echo $usuario->nombre;?> <?php echo $usuario->apaterno;?> <?php echo $usuario->amaterno;?> <br>
                                <b>Matricula:</b>  <?php echo $usuario->matricula;?> <br>
                                <b>Correo:</b>  <?php echo $usuario->correo;?> <br>
                                <b>Telefono:</b>  <?php echo $usuario->telefono;?> <br>

                            </div>
                        
                        </div>
                    </div>
                

                    <div class="col-lg-8">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Ficha de Identificacion
                            </div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <b>Empresa/Institucion:</b> <?php echo $ficha->empresainstitucion;?><br>
                                    <b>Años Experiencia:</b> <?php echo $ficha->anosexperiencia;?><br>
                                    <b>SVPR:</b> <?php echo $ficha->svpr;?><br>
                                    <b>Fecha Adiestramiento:</b> <?php echo $ficha->fechaadiestramiento;?><br>
                                </div>
                                <div class="col-md-6">
                                    <b>Curso Realizado:</b> <?php echo $ficha->cursorealizado;?><br>
                                    <b>Grado Escolar:</b> <?php echo $ficha->gradoescolar;?><br>
                                    <b>Numero de Cursos Impartidos:</b> <?php echo $ficha->numerocursosimpartidos;?><br>
                                    <b>Expiracion Licencia:</b> <?php echo $ficha->expiracionlicencia;?><br>
                                </div>
                            </div>
                        
                        </div>
                    </div>

                    <div class="col-md-12">
                        
                    </div>
                                    

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cursos
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre Curso</th>
                                                <th>Fecha Curso</th>
                                                <th>Horario Curso</th>
                                                <th>Empresa Dirigida</th>
                                                <th>Giro Asociacion</th>
                                                <th>Estado Curso</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php 
                                            $prep_state = $admin->MostrarCursoEspecifico();
                                            while ($row = $prep_state->fetch(PDO::FETCH_ASSOC)){
                                        ?>

                                            <tr class="<?php echo $row['color'];?>">
                                                <td><?php echo $row['idcurso'];?></td>
                                                <td><?php echo $row['nombrecurso'];?></td>
                                                <td><?php echo $row['fechacurso'];?></td>
                                                <td><?php echo $row['horariocurso'];?></td>
                                                <td><?php echo $row['empresadirigida'];?></td>
                                                <td><?php echo $row['giroasociacion'];?></td>
                                                <td><?php echo $row['estadocurso'];?></td>
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
