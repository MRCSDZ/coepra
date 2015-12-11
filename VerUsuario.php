<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
// valor del id
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR! ID not found!');

// Clases de base de datos y usuarios
include_once 'clases/database.php';
include_once 'clases/usuarios.php';
include_once 'initial.php';

// Construir instancias
$usuario = new Usuario($db);
$usuario->id = $id;
$usuario->getUser();




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
                        <h1 class="page-header"><?php echo $usuario->nombre." ".$usuario->apaterno." ".$usuario->amaterno;?></h1>
                    </div>

                    <div class="col-lg-2">
                        <h1><i class="fa fa-user fa-5x"></i></h1>
                    </div>

                    <div class="col-lg-10">
                        
                        
                        <br>

                        Matricula:
                        <?php echo $usuario->matricula;?>
                        <br>
                        Rol:
                        <?php echo $usuario->rol;?>
                        <br>
                        Correo:
                        <?php echo $usuario->correo;?>

                        <br>
                        <br>

                        <a href="EditarUsuario.php?id=<?php echo $id;?>" class="btn btn-primary">Editar Usuario</a>
                        <a href="EliminarUsuario.php?id=<?php echo $id;?>" class="btn btn-danger">Eliminar Usuario</a>

                        
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