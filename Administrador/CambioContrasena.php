<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_1.php");
/******************  NO BORRAR  ******************/
// 
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR! ID not found!');

//
include_once '../clases/database.php';
include_once '../clases/usuarios.php';
include_once '../initial.php';

//
$usuario = new Usuario($db);
$usuario->id = $id;
$usuario->getUser();
$Mensaje = " ";


if($_POST)
{
    if($_POST['pw1']==$_POST['pw2'])
    {

        $pw= md5($_POST['pw1']);

        // Valores de usuario en POST
        $usuario->contrasena    = $pw;
        
        
        // Editar Usuario
        if($usuario->CambioContrasena())
        {
            $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                                La Contraseña Fue Cambiada Exitosamente
                            </div>";
        }

        // 
        else
        {
             $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                &times
                          </button>
                    La Contraseña No Pudo Ser Cambiada. Intente de Nuevo
                </div>";
        }
    }

    else
    {
        $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                &times
                          </button>
                    Las Contraseñas No Coinciden.
                </div>";


    }   
}




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
                        <h1 class="page-header">Editar Usuario</h1>
                    </div>

                    <div class="col-lg-12">
                            <?php echo $Mensaje;?> 
                        </div>

                    <div class="col-lg-12">
                        <form action='CambioContrasena.php?id=<?php echo $id; ?>' method='POST'>
                            Contraseña Nueva:
                            <input type='password' name='pw1' value='' class='form-control' placeholder="Ingresa el nombre"  required><br>
                            Repetir Contraseña:
                            <input type='password' name='pw2' value='' class='form-control' placeholder="Ingresa el apellido paterno"  required><br>
                            <button type="submit" class="btn btn-success" > Actualizar Contraseña</button>
                            <a href="ConsultarUsuarios.php" class="btn btn-primary"> Regresar a Usuarios</a>
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
    
    <!--ALERTA -->
   

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
