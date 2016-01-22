<?php 
/******************  NO BORRAR  ******************/
    session_start();
    require("../admin/instancia.txt");
    require("../admin/permiso_nivel_1.php");
/******************  NO BORRAR  ******************/
    //Conexion Base de datos y Creacion de Objetos en Base de datos
    include_once '../clases/database.php';
    include_once '../initial.php';

    //Mensaje de Alerta
    $Mensaje = " ";
    

    //Comprobar Si existen datos en POST
    if ($_POST)
    {

        if ($_POST['fcontrasena']==$_POST['cfcontrasena'])
        {
            //Encriptar Contraseña
             $pwd = md5($_POST['fcontrasena']);
            // Instancia de usuario
            include_once '../clases/usuarios.php';
            $usuario = new Usuario($db);

            // Valores en Usuario
            $usuario->nombre    = htmlentities(trim($_POST['nombre']));
            $usuario->apaterno  = htmlentities(trim($_POST['apaterno']));
            $usuario->amaterno  = htmlentities(trim($_POST['amaterno']));
            $usuario->matricula = htmlentities(trim($_POST['fmatricula']));
            //$usuario->contrasena = htmlentities(trim($_POST['fcontrasena']));
            $usuario->contrasena = $pwd;
            $usuario->rol       = htmlentities(trim($_POST['rol']));
            $usuario->correo     = htmlentities(trim($_POST['correo']));
            $usuario->telefono    = htmlentities(trim($_POST['telefono']));


            // Mensaje si el usuario se creo
            if($usuario->create()){
                $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                                El usuario fue creado exitosamente
                            </div>";
                unset($_POST['nombre']);
                unset($_POST['apaterno']);
                unset($_POST['amaterno']);
                unset($_POST['matricula']);
                unset($_POST['contrasena']);
                unset($_POST['rol']);
                unset($_POST['correo']);
                unset($_POST['telefono']);

            }

            // Mensaje si el usuario no se pudo crear
            else{
                $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                &times
                          </button>
                    Esa Matricula ya esta en uso. Intente de nuevo con otra que este disponible.
                </div>";
        
           }
        }
        else
        {
            $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                                &times
                          </button>
                    Las contraseñas no coinciden. Intentalo de Nuevo.
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
                            <h1 class="page-header">Agregar Usuario</h1>
                        </div>

                        <div class="col-lg-12">
                            <?php echo $Mensaje;?> 
                        </div>

                        <div class="col-lg-6">
                           
                            <form action="CrearUsuario.php" role="form" method="post" autocomplete="off" >
                                Nombre:
                                <input type="text" name="nombre" class="form-control" placeholder=" Ingrese Nombre"  onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                Apellido Paterno:
                                <input type="text" name="apaterno" class="form-control" placeholder=" Ingrese Apellido Paterno" onkeyup="javascript:this.value=this.value.toUpperCase();" required ><br>
                                Apellido Materno:
                                <input type="text" name="amaterno" class="form-control" placeholder=" Ingrese Apellido Materno" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
                                Matricula:
                                <input type="text" name="fmatricula" class="form-control" placeholder=" Ingrese su Matricula o numero de usuario" onkeyup="javascript:this.value=this.value.toUpperCase();" pattern="[a-zA-Z0-9]{0,9}" title="LA MATRICULA DEBE DE TENER MAX 9 CARACTERES Y NINGUN CARACTER ESPECIAL" required><br>
                                Contrasena:
                                <input type="password" name="fcontrasena" class="form-control" placeholder=" Ingrese su contrasena"  required><br>
                                Vuelva a Confirmar Contraseña:
                                <input type="password" name="cfcontrasena" class="form-control" placeholder=" Ingrese la contraseña anterior"  required><br>
                                Rol
                                <select name="rol" id="" class="form-control">
                                    <option value="ADMINISTRADOR">Administrador</option>
                                    <option value="CAPTURISTA">Capturista</option>
                                    <option value="INSTRUCTOR">Instructor</option>
                                    <option value="CAPTURISTA_HOSPITALARIO">Capturista Hospitalario</option>
                                    <option value="ESTADISTA">Estadistica</option>
                                </select>
                                <br>
                                Correo
                                <input type="email" name="correo" class="form-control" placeholder=" Ingrese Correo"  onkeyup="javascript:this.value=this.value.toUpperCase();"  required>
                                <br>
                                Telefono
                                <input type="number" name="telefono" class="form-control" placeholder=" Ingrese Telefono con Lada Incluida"   required><br>
                                
                                <button type="submit" class="btn btn-primary" >Crear Nuevo Usuario</button>
                                <a href="ConsultarUsuarios.php" class="btn btn-success" >Regresar a Usuarios</a>
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

        

        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>

    </body>

</html>
