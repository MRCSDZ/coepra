<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_1.php");
/******************  NO BORRAR  ******************/
// 

$idcurso = $_SESSION['idcurso_global'];
$idinstructor = $_COOKIE["idinstructor"]; 

//
include_once '../clases/database.php';
include_once '../initial.php';
include_once '../clases/instructores.php';

//
$instructor = new Instructores($db);
$instructor->idinstructorauxiliar = $idinstructor;
$instructor->getInstructor();
$Mensaje = " ";


if($_POST)
{

    // Valores de usuario en POST enviados a atributos de la clase

    $instructor->idinstructorauxiliar = htmlentities(trim($_POST['idinstructor']));
    $instructor->nombre               = htmlentities(trim($_POST['nombre']));
    $instructor->apaterno             = htmlentities(trim($_POST['apaterno']));
    $instructor->amaterno             = htmlentities(trim($_POST['amaterno']));
    $instructor->telefono             = htmlentities(trim($_POST['telefono']));
    $instructor->direccion            = htmlentities(trim($_POST['direccion']));
    
    
    // Editar Usuario
    if($instructor->update()){
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
                        <h1 class="page-header">Editar Instructor Auxiliar</h1>
                    </div>

                    <div class="col-lg-12">
                        <?php echo $Mensaje;?>
                    </div>


                    

                    <form action="EditarInstructor.php" method="POST">
                        

                    

                        <div class="col-lg-6">
                            <b>Nombre</b>
                            <input value="<?php echo $instructor->nombre;?>" name="nombre" type="text" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            <br>
                        





                        
                            <b>Apellido Paterno</b>
                            <input value="<?php echo $instructor->apaterno;?>" name="apaterno" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            <br>
                        



                        
                            <b>Apellido Materno</b>
                            <input value="<?php echo $instructor->amaterno;?>" name="amaterno" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();">
                            <br>
                        


                        
                            <b>Telefono</b>
                            <input value="<?php echo $instructor->telefono;?>" name="telefono" type="number" class="form-control  " >
                            <br>
                        




                        
                            <b>Direccion</b>
                            <input value="<?php echo $instructor->direccion;?>" name="direccion" type="text" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        



                      


                            

                        
                            
                            <input type="hidden" value="<?php echo $idinstructor;?>" name="idinstructor">
                            <button type="submit" class="btn btn-primary" name="editar" value="Guardar Cambios">Guardar Cambios</button>
                            
                            


                    </form> 

                    <form action="MiCurso.php" method="POST" style="display: inline;">

                            <input type="hidden" value="<?php echo $idcurso;?>" name="idcurso"> 
                            <button type="submit" class="btn btn-success">Regresar a Curso</button>    
                                                    
                    </form> 

                    <form action="EliminarInstructor.php" method="POST" style="display: inline;">
                        
                        <button class="btn btn-danger" name="idi" > Eliminar Instructor Auxiliar</button>


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
