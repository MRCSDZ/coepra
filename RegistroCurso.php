<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
    include_once 'clases/database.php';
    include_once 'initial.php';
    
    
   
   //Mensaje de Alerta
    $Mensaje = " ";

    //Comprobar Si existen datos en POST
    if ($_POST)
    {
    
        // Instancia de usuario
        include_once 'clases/cursos.php';
        $curso = new Curso($db);

        // Valores en Usuario
        $curso->idfichaidentificacion  = $_SESSION['fichainstructor'];
        $curso->nombrecurso            = htmlentities(trim($_POST['nombrecurso']));
        $curso->fechacurso             = htmlentities(trim($_POST['fechacurso']));
        $curso->horariocurso           = htmlentities(trim($_POST['horariocurso']));
        $curso->empresadirigida        = htmlentities(trim($_POST['empresadirigida']));
        $curso->giroasociacion         = htmlentities(trim($_POST['giroasociacion']));
        $curso->estadocurso            = htmlentities(trim($_POST['estadocurso']));


        // Mensaje si el usuario se creo
        if($curso->create()){
            $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            El usuario fue creado exitosamente
                        </div>";
            unset($_POST['nombrecurso']);
            unset($_POST['fechacurso']);
            unset($_POST['horariocurso']);
            unset($_POST['empresadirigida']);
            unset($_POST['giroasociacion']);
            unset($_POST['estadocurso']);

            header( "refresh:1; url=Cursos.php" );
            

        }

        // Mensaje si el usuario no se pudo crear
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
                        <h1 class="page-header">Registro de Curso</h1>
                    </div>

                    <div class="col-lg-12">
                            <?php echo $Mensaje;?> 
                        </div>

                    <form action="RegistroCurso.php" method="post">    
                        
                        <div class="col-lg-8">
                            <b>Nombre del curso</b>
                            <input type="text" name="nombrecurso" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            <br>
                        </div>
                    

                        <div class="col-lg-4">
                            <b>Nombre del Instructor</b>
                            <input type="text" class="form-control" value="<?php echo $_SESSION['nombre_global']; ?>" disabled>
                            <br>
                        </div>

                        <div class="col-lg-6">
                            <b>Fecha de Imparticion del Curso</b>
                            <input type="date" name="fechacurso" class="form-control" required>
                            <br>
                        </div>

                        <div class="col-lg-6">
                           
                            <b>Horario de Imparticion del Curso</b>
                            <input type="text" name="horariocurso" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            <br>
                        </div>

                        <div class="col-lg-12">
                            Nombre de la Empresa/Dependencia/Asociacion que va dirigido el curso</b>
                            <input type="text" name="empresadirigida" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <b>Giro de la Empresa/Dependencia/Asociacion</b>
                            <input type="text" name="giroasociacion" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();"  required>
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <input type="hidden" name="estadocurso" value="ACTIVO" >
                            <button type="submit" class="btn btn-success">Registrar Nuevo Curso</button>
                            <a href="index.php" class="btn btn-primary">Regresar a inicio</a>
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
