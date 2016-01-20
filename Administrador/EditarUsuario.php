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

// check if the form is submitted
if($_POST)
{

    // Valores de usuario en POST
    $usuario->nombre    = htmlentities(trim($_POST['nombre']));
    $usuario->apaterno  = htmlentities(trim($_POST['apaterno']));
    $usuario->amaterno  = htmlentities(trim($_POST['amaterno']));
    $usuario->matricula = htmlentities(trim($_POST['matricula']));
    $usuario->rol       = htmlentities(trim($_POST['rol']));
    $usuario->correo    = htmlentities(trim($_POST['correo']));
    $usuario->telefono    = htmlentities(trim($_POST['telefono']));
    
    // Editar Usuario
    if($usuario->update()){
        $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            El usuario fue editado exitosamente
                        </div>";
    }

    // 
    else{
         $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times
                      </button>
                El usuario no se creo
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
                        <form action='EditarUsuario.php?id=<?php echo $id; ?>' method='POST'>
                            Nombre:
                            <input type='text' name='nombre' value='<?php echo $usuario->nombre;?>' class='form-control' placeholder="Ingresa el nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                            Apellido Paterno:
                            <input type='text' name='apaterno' value='<?php echo $usuario->apaterno;?>' class='form-control' placeholder="Ingresa el apellido paterno" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                            Apellido Materno:
                            <input type='text' name='amaterno' value='<?php echo $usuario->amaterno;?>' class='form-control' placeholder="Ingresa el apellido materno" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                            Matricula:
                            <input type='text' name='matricula' value='<?php echo $usuario->matricula;?>' class='form-control' placeholder="Matricula" required><br>
                            Rol:
                            
                                <select name="rol" id="" class="form-control">
                                    <option value="<?php echo $usuario->rol;?>" selected><?php echo $usuario->rol;?></option>
                                    <option value="ADMINISTRADOR">Administrador</option>
                                    <option value="CAPTURISTA">Capturista</option>
                                    <option value="INSTRUCTOR">Instructor</option>
                                    <option value="CAPTURISTA_HOSPITALARIO">Capturista Hospitalario</option>
                                    <option value="ESTADISTA">Estadistica</option>
                                </select>
                                <br>
                            Correo:
                            <input type='text' name='correo' value='<?php echo $usuario->correo;?>' class='form-control' placeholder="Correo electronico" required><br>
                            Telefono:
                            <input type='text' name='telefono' value='<?php echo $usuario->telefono;?>' class='form-control' placeholder="Correo electronico" required><br>

                            <input type='hidden' name='id' value='<?php echo $id;?>' class='form-control' placeholder="Correo electronico" required><br>
                            <button type="submit" class="btn btn-success" > Actualizar Usuario</button>
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
    <script src="../js/alerta.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
