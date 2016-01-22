<?php
//^[A-Za-z0-9 ñ]*[A-Za-z0-9][A-Za-z0-9 ñ]*$ 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
// 
$id = $_SESSION['idusuario_global'];

//
include_once 'clases/database.php';
include_once 'clases/usuarios.php';
include_once 'initial.php';

//
$usuario = new Usuario($db);
$usuario->id = $id;
$usuario->getUser();
$Mensaje = " ";

if($_POST)
{   
    $pwd = md5($_POST["pwd1"]);
    if($usuario->contrasena == $pwd )
    {

        if($_POST["pwd2"] == $_POST["pwd3"])
        {

            //Valores de usuario en POST
            $usuario->contrasena =  md5($_POST["pwd2"]);
            
            // Editar Usuario
            if($usuario->CambioContrasena()){
                $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                                    La Contraseña de Cambio Exitosamente
                                </div>";
            }

            // 
            else
            {
                 $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                    &times
                              </button>
                        La Contraseña No se pudo Cambiar. Contacte un Administrador para que se la cambie.
                    </div>";
            }
        }

        else
        {
            $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                    &times
                              </button>
                        Las Contraseñas Nuevas No Coinciden. Intenta de Nuevo.
                    </div>";
        }

    }

    else
    {
        $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                &times
                          </button>
                    Su Contraseña Actual Esta Equivocada.
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
                        <h1 class="page-header">Cambiar Mi Contraseña</h1>
                    </div>

                    <div class="col-lg-12">
                            <?php echo $Mensaje;?> 
                        </div>

                    <div class="col-lg-12">
                        <form action='CambiarMiContrasena.php' method='POST'>
                            Contraseña Anterior:
                            <input type='text' name='pwd1' value='' class='form-control' placeholder="Contraseña Actual" required><br>
                            Nueva Contraseña:
                            <input type='text' name='pwd2' value='' class='form-control' placeholder="Nueva Contraseña"  required><br>
                            Repetir Nueva Contraseña:
                            <input type='text' name='pwd3' value='' class='form-control' placeholder="Repetir Nueva Contraseña"  required><br>
                            
                            <input type='hidden' name='id' value='<?php echo $id;?>' class='form-control' placeholder="Correo electronico" required><br>
                            <button type="submit" class="btn btn-success" > Actualizar Contraseña</button>
                            
                            <a href="index.php" class="btn btn-primary"> Regresar a Inicio</a>
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    
    <!--ALERTA -->
    <script src="js/alerta.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
