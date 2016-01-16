<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
$id = $_SESSION['idusuario_global'];

    include_once '../clases/database.php';
    include_once '../initial.php';

    //Mensaje de Alerta
    $Mensaje = " ";

    //Comprobar Si existen datos en POST
    if ($_POST)
    {
    
        // Instancia de usuario
        include_once '../clases/fichaidentificacion.php';

        $fichaidentificacion = new Fichaidentificacion($db);

        // Valores en Usuario
        $fichaidentificacion->idusuario              = htmlentities(trim($_POST['usuario_idusuario']));
        $fichaidentificacion->empresainstitucion     = htmlentities(trim($_POST['empresainstitucion']));
        $fichaidentificacion->anosexperiencia        = htmlentities(trim($_POST['anosexperiencia']));
        $fichaidentificacion->svpr                   = htmlentities(trim($_POST['svpr']));
        $fichaidentificacion->fechaadiestramiento    = htmlentities(trim($_POST['fechaadiestramiento']));
        $fichaidentificacion->cursorealizado         = htmlentities(trim($_POST['cursorealizado']));
        $fichaidentificacion->gradoescolar           = htmlentities(trim($_POST['gradoescolar']));
        $fichaidentificacion->numerocursosimpartidos = htmlentities(trim($_POST['numerocursosimpartidos']));
        $fichaidentificacion->expiracionlicencia     = htmlentities(trim($_POST['expiracionlicencia']));


        // Mensaje si el usuario se creo
        if($fichaidentificacion->create()){
            $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            El usuario fue creado exitosamente
                        </div>";
            unset($_POST['usuario_idusuario']);
            unset($_POST['empresainstitucion']);
            unset($_POST['anosexperiencia']);
            unset($_POST['svpr']);
            unset($_POST['fechaadiestramiento']);
            unset($_POST['cursorealizado']);
            unset($_POST['gradoescolar']);
            unset($_POST['numerocursosimpartidos']);
            unset($_POST['expiracionlicencia']);

            header( "refresh:1; url=EditarFichaIdentificacion.php" );





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
                        <h1 class="page-header">Ficha de Identificacion del Instructor</h1>
                    </div>

                    <div class="col-lg-12">
                        <?php echo $Mensaje;?>
                    </div>


                    

                    <form action="CrearFichaIdentificacion.php" method="POST">
                        <!--
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
                        -->

                    

                        <div class="col-lg-12">
                            <b>Empresa o Institucion que representa</b>
                            <input name="empresainstitucion" type="text" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();"  required>
                            <br>
                        </div>





                        <div class="col-lg-2">
                            <b>Años de experiencia</b>
                            <input name="anosexperiencia" type="number" class="form-control" required>
                            <br>
                        </div>



                        <div class="col-lg-5">
                            <b>Donde se realizo curso SVB-PR</b>
                            <input name="svpr" type="text" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>


                        <div class="col-lg-5">
                            <b>Fecha de Adiestramiento como instructor</b>
                            <input name="fechaadiestramiento" type="date" class="form-control">
                            <br>
                        </div>





                        <div class="col-lg-6">
                            <b>Lugar Donde Realizo su Curso Como Instructor</b>
                            <input name="cursorealizado" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>



                        <div class="col-lg-6">
                            <b>Grado Escolar o academico actual</b>
                            <input name="gradoescolar" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>




                        <div class="col-lg-6">
                            <b>Numero de cursos impartidos:</b>
                            <input name="numerocursosimpartidos" type="number" class="form-control">
                            <br>

                        </div>

                        <div class="col-lg-6">
                            <b>Expiracion de Licencia:</b>
                            <input name="expiracionlicencia" type="date" class="form-control">
                            <br>

                        </div>



                        <!--

                        <div class="col-lg-4">
                            <b>Telefono de contacto:</b>
                            <input type="text" class="form-control" disabled>
                            <br>
                        </div>

                        <div class="col-lg-4">
                            <b>Segundo telefono de contacto:</b>
                            <input type="text" class="form-control" disabled>
                            <br>

                        </div>


                        <div class="col-lg-4">
                            <b>Correo electronico
                            <input type="email"class="form-control" disabled>
                            <br>
                            
                        </div>
                        -->


                            

                        <div class="col-lg-12">
                            <input type="hidden" value="<?php echo $id;?>" name="usuario_idusuario">
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
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
