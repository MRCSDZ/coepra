<?php 
/******************  NO BORRAR  ******************/
    session_start();
    require("../admin/instancia.txt");
    require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
    //Conexion Base de datos y Creacion de Objetos en Base de datos
    include_once '../clases/database.php';
    include_once '../initial.php';


    //Mensaje de Alerta
    $Mensaje = " ";


    //idcurso a relacionar
    $idcurso = $_SESSION["idcurso_global"];
    

    //Comprobar Si existen datos en POST
    if ($_POST)
    {
    
        // Instancia de usuario
        include_once '../clases/alumnos.php';
        $alumno = new Alumnos($db);

        // Valores en Usuario
        $alumno->idcurso    = htmlentities(trim($_POST['idcurso']));
        $alumno->nombre    = htmlentities(trim($_POST['nombre']));
        $alumno->apaterno  = htmlentities(trim($_POST['apaterno']));
        $alumno->amaterno  = htmlentities(trim($_POST['amaterno']));
        $alumno->lugartrabajo = htmlentities(trim($_POST['lugartrabajo']));
        $alumno->fechanacimiento = htmlentities(trim($_POST['fechanacimiento']));
        $alumno->edad       = htmlentities(trim($_POST['edad']));
        $alumno->estadocivil     = htmlentities(trim($_POST['estadocivil']));
        $alumno->escolaridad  = htmlentities(trim($_POST['escolaridad']));
        $alumno->domicilio = htmlentities(trim($_POST['domicilio']));
        $alumno->telefono = htmlentities(trim($_POST['telefono']));
        $alumno->correo       = htmlentities(trim($_POST['correo']));
        


        // Mensaje si el usuario se creo
        if($alumno->AgregarAlumno()){
            $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            El usuario fue creado exitosamente. Puede Regresar al Curso o Seguir Ingresando Alumnos
                        </div>";
            unset($_POST['nombre']);
            unset($_POST['apaterno']);
            unset($_POST['amaterno']);
            unset($_POST['lugartrabajo']);
            unset($_POST['fechanacimiento']);
            unset($_POST['edad']);
            unset($_POST['estadocivil']);
            unset($_POST['escolaridad']);
            unset($_POST['domicilio']);
            unset($_POST['telefono']);
            unset($_POST['correo']);
            


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
                            <h1 class="page-header">Agregar Alumno</h1>
                        </div>

                        <div class="col-lg-12">
                            <?php echo $Mensaje;?> 
                        </div>

                        <div class="col-lg-6">
                           
                            <form action="AgregarAlumno.php" role="form" method="post" autocomplete="off" style="display: inline;">
                                Nombre:
                                <input type="text" name="nombre" class="form-control" placeholder=" Ingrese Nombre/s del Alumno"  onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                Apellido Paterno:
                                <input type="text" name="apaterno" class="form-control" placeholder=" Ingrese Apellido Paterno del Alumno" onkeyup="javascript:this.value=this.value.toUpperCase();" required ><br>
                                Apellido Materno:
                                <input type="text" name="amaterno" class="form-control" placeholder=" Ingrese Apellido Materno del Alumno" onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
                                Lugar de Trabajo:
                                <input type="text" name="lugartrabajo" class="form-control" placeholder=" Ingrese el lugar donde trabaja el alumno" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                Fecha de Nacimiento:
                                <input type="date" name="fechanacimiento" class="form-control" placeholder=" Ingrese fecha de nacimiento del alumno"  required><br>
                                Edad:
                                <input type="number" name="edad" class="form-control" placeholder=" Ingrese la edad del alumno"  required><br>
                                <br>
                                Estado Civil:
                                <input type="text" name="estadocivil" class="form-control" placeholder=" Ingrese Estado Civil" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                <br>
                                Escolaridad:
                                <input type="text" name="escolaridad" class="form-control" placeholder=" Ingrese Escolaridad" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                <br>
                                Domicilio:
                                <input type="text" name="domicilio" class="form-control" placeholder=" Domicilio" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                <br>
                                Telefono:
                                <input type="number" name="telefono" class="form-control" placeholder=" Telefono"  required><br>
                                <br>
                                Correo
                                <input type="email" name="correo" class="form-control" placeholder=" Ingrese Correo"  onkeyup="javascript:this.value=this.value.toUpperCase();"  required><br>
                                
                                <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>">

                                <button type="submit" class="btn btn-primary" >Crear Nuevo Alumno</button>
                                
                                
                            </form>

                            <form action="MiCurso.php" method="post" style="display: inline;">
                                <input type="hidden" name="idcurso" value="<?php echo $idcurso; ?>">
                                <button type="submit" class="btn btn-success">Regresar a Curso</button>
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
