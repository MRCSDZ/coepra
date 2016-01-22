<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
// 
$id = $_SESSION['idusuario_global'];

//
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/fichaidentificacion.php';

//
$fichaidentificacion = new Fichaidentificacion($db);
$fichaidentificacion->idusuario = $id;
$fichaidentificacion->getficha();
$Mensaje = " ";


if($_POST)
{

    // Valores de usuario en POST
    $fichaidentificacion->empresainstitucion     = htmlentities(trim($_POST['empresainstitucion']));
    $fichaidentificacion->anosexperiencia        = htmlentities(trim($_POST['anosexperiencia']));
    $fichaidentificacion->svpr                   = htmlentities(trim($_POST['svpr']));
    $fichaidentificacion->fechaadiestramiento    = htmlentities(trim($_POST['fechaadiestramiento']));
    $fichaidentificacion->cursorealizado         = htmlentities(trim($_POST['cursorealizado']));
    $fichaidentificacion->gradoescolar           = htmlentities(trim($_POST['gradoescolar']));
    $fichaidentificacion->numerocursosimpartidos = htmlentities(trim($_POST['numerocursosimpartidos']));
    $fichaidentificacion->expiracionlicencia     = htmlentities(trim($_POST['expiracionlicencia']));
    
    // Editar Usuario
    if($fichaidentificacion->update()){
        $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            La ficha fue editada exitosamente
                        </div>";
    }

    // 
    else{
         $Mensaje = "<div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                            &times
                      </button>
                La ficha no se pudo editar
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


                    

                    <form action="EditarFichaIdentificacion.php" method="POST">
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
                            <input value="<?php echo $fichaidentificacion->empresainstitucion;?>" name="empresainstitucion" type="text" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            <br>
                        </div>





                        <div class="col-lg-2">
                            <b>Años de experiencia</b>
                            <input value="<?php echo $fichaidentificacion->anosexperiencia;?>" name="anosexperiencia" type="number" class="form-control" required>
                            <br>
                        </div>



                        <div class="col-lg-5">
                            <b>Donde se realizo curso SVB-PR</b>
                            <input value="<?php echo $fichaidentificacion->svpr;?>" name="svpr" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>


                        <div class="col-lg-5">
                            <b>Fecha de Adiestramiento como instructor</b>
                            <input value="<?php echo $fichaidentificacion->fechaadiestramiento;?>" name="fechaadiestramiento" type="date" class="form-control">
                            <br>
                        </div>





                        <div class="col-lg-6">
                            <b>Lugar Donde Realizo su Curso Como Instructor</b>
                            <input value="<?php echo $fichaidentificacion->cursorealizado;?>" name="cursorealizado" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>



                        <div class="col-lg-6">
                            <b>Grado Escolar o academico actual</b>
                            <input value="<?php echo $fichaidentificacion->gradoescolar;?>" name="gradoescolar" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>




                        <div class="col-lg-6">
                            <b>Numero de cursos impartidos:</b>
                            <input value="<?php echo $fichaidentificacion->numerocursosimpartidos;?>" name="numerocursosimpartidos" type="number" class="form-control">
                            <br>

                        </div>

                        <div class="col-lg-6">
                            <b>Expiracion de Licencia:</b>
                            <input value="<?php echo $fichaidentificacion->expiracionlicencia;?>" name="expiracionlicencia" type="date" class="form-control">
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
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            <a href="Cursos.php" class="btn btn-success" >Regresar a Cursos</a>
                            


                    </form> 
                    <form action="EliminarFichaIdentificacion.php" method="POST" style="display: inline;">

                            <input type="hidden" value="<?php echo $id;?>" name="idu"> 
                            <button type="submit" class="btn btn-danger">Eliminar Ficha</button>                            
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
