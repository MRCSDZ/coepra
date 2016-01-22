<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
// 

$idcurso = $_SESSION['idcurso_global'];
$idusuario = $_SESSION['idusuario_global'];
//
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/cursos.php';

//
$curso = new Curso($db);
$curso->idcurso = $idcurso;
$curso->idusuario = $idusuario;
$curso->getcurso();
$Mensaje = " ";


if($_POST)
{

    // Valores de usuario en POST
    $curso->nombrecurso     = htmlentities(trim($_POST['nombrecurso']));
    $curso->fechacurso        = htmlentities(trim($_POST['fechacurso']));
    $curso->horariocurso                   = htmlentities(trim($_POST['horariocurso']));
    $curso->empresadirigida    = htmlentities(trim($_POST['empresadirigida']));
    $curso->giroasociacion         = htmlentities(trim($_POST['giroasociacion']));
    
    
    // Editar Usuario
    if($curso->update()){
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
                        <h1 class="page-header">Editar Curso</h1>
                    </div>

                    <div class="col-lg-12">
                        <?php echo $Mensaje;?>
                    </div>


                    

                    <form action="EditarMiCurso.php" method="POST">
                        

                    

                        <div class="col-lg-12">
                            <b>Nombre Curso</b>
                            <input value="<?php echo $curso->nombrecurso;?>" name="nombrecurso" type="text" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            <br>
                        </div>





                        <div class="col-lg-6">
                            <b>Fecha Curso</b>
                            <input value="<?php echo $curso->fechacurso;?>" name="fechacurso" type="date" class="form-control" required>
                            <br>
                        </div>



                        <div class="col-lg-6">
                            <b>Horario Curso</b>
                            <input value="<?php echo $curso->fechacurso;?>" name="horariocurso" type="text" class="form-control">
                            <br>
                        </div>


                        <div class="col-lg-6">
                            <b>Empresa dirigida</b>
                            <input value="<?php echo $curso->empresadirigida;?>" name="empresadirigida" type="text" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>





                        <div class="col-lg-6">
                            <b>Giro o Asociacion</b>
                            <input value="<?php echo $curso->giroasociacion;?>" name="giroasociacion" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>



                      


                            

                        <div class="col-lg-12">
                            
                            <input type="hidden" value="<?php echo $idcurso;?>" name="idcurso">
                            <button type="submit" class="btn btn-primary" name="editar" value="Guardar Cambios">Guardar Cambios</button>
                            
                            


                    </form> 
                    <form action="MiCurso.php" method="POST" style="display: inline;">

                            <input type="hidden" value="<?php echo $idcurso;?>" name="idcurso"> 
                            <button type="submit" class="btn btn-success">Regresar a Curso</button>                            
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
