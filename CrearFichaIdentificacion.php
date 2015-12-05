<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
$id = $_SESSION['idusuario_global'];

    include_once 'clases/database.php';
    include_once 'initial.php';

    //Mensaje de Alerta
    $Mensaje = " ";

    //Comprobar Si existen datos en POST
    if ($_POST)
    {
    
        // Instancia de usuario
        include_once 'clases/fichaidentificacion.php';
        $fichaidentificacion = new Fichaidentificacion($db);

        // Valores en Usuario
        $usuario->idusuario             = htmlentities(trim($_POST['idusuario']));
        $usuario->anosexperiencia       = htmlentities(trim($_POST['apaterno']));
        $usuario->svpr                  = htmlentities(trim($_POST['amaterno']));
        $usuario->fechaadiestramiento   = htmlentities(trim($_POST['fmatricula']));
        $usuario->cursorealizado        = htmlentities(trim($_POST['fcontrasena']));
        $usuario->gradoescolar          = htmlentities(trim($_POST['rol']));
        $usuario->numrocursosimpartidos = htmlentities(trim($_POST['correo']));
        $usuario->expiracionlicencia    = htmlentities(trim($_POST['correo']));


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

        }

        // Mensaje si el usuario no se pudo crear
        else{
            $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times
                      </button>
                La ficha no se creo
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
                        <h1 class="page-header">Ficha de Identificacion del Instructor</h1>
                    </div>

                    

                    <form action="RegistroCurso.php">
                        
                        <div class="col-lg-4">
                            <b>Nombre</b>
                            <input type="text" class="form-control" disabled>
                            <br>
                        </div> 

                        <div class="col-lg-4">
                            <b>Apellido Paterno</b>
                            <input type="text" class="form-control" disabled>
                            <br>
                        </div>

                        <div class="col-lg-4">
                            <b>Apellido Materno</b>
                            <input type="text" class="form-control" disabled>
                            <br>
                        </div>

                        <!--DATOS DE LA FICHA-->

                       

                        



                        <div class="col-lg-12">
                            <b>Empresa o Institucion que representa</b>
                            <input name="empresainstitucion" type="text" class="form-control" required>
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Años de experiencia</b>
                            <input name="experiencia" type="number" class="form-control" required>
                            <br>
                        </div>



                        <div class="col-lg-12">
                            <b>Donde se realizo curso SVB-PR</b>
                            <input name="svpr" type="text" class="form-control">
                            <br>
                        </div>


                        <div class="col-lg-12">
                            <b>Fecha de Adiestramiento como instructor</b>
                            <input name="adiestramiento" type="text" class="form-control">
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Lugar Donde Realizo su Curso Como Instructor</b>
                            <input name="adiestramiento" type="text" class="form-control">
                            <br>
                        </div>



                        <div class="col-lg-12">
                            <b>Grado Escolar o academico actual</b>
                            <input name="grado" type="text" class="form-control">
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Numero de cursos impartidos:</b>
                            <input name="numerocursos" type="text" class="form-control">
                            <br>

                        </div>


                        <div class="col-lg-12">
                            <b>Telefono de contacto:</b>
                            <input type="text" class="form-control" disabled>
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Segundo telefono de contacto:</b>
                            <input type="text" class="form-control" disabled>
                            <br>

                        </div>


                        <div class="col-lg-12">
                            <b>Correo electronico
                            <input type="email"class="form-control" disabled>
                            <br>
                            
                        </div>


                            

                        <div class="col-lg-12">
                            <input type="hidden" value="<?php echo $id;?>" name="idusuario">
                            <button type="submit" class="btn btn-primary">Registrar Ficha de Identificacion</button>
                            <a href="ConsultarUsuarios.php" class="btn btn-success" >Regresar a Usuarios</a>
                            <br>
                            <br>
                        </div>        
                        
                    </form>



                    

                    
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
