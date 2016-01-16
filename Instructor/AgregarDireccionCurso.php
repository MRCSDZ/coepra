<?php 
/******************  NO BORRAR  ******************/
    session_start();
    require("../admin/instancia.txt");
    require("../admin/permiso_nivel_5.php");
/******************  NO BORRAR  ******************/
    //Conexion Base de datos y Creacion de Objetos en Base de datos
    include_once '../clases/database.php';
    include_once '../initial.php';

    


    $idcurso = $_SESSION["idcurso_global"];

    //Mensaje de Alerta
    $Mensaje = " ";

    //Comprobar Si existen datos en POST
    if ($_POST)
    {
    
        // Instancia de usuario
        include_once '../clases/lugarcurso.php';
        $lugarcurso = new Lugarcurso($db); 

        // Valores en Usuario
        
        $lugarcurso->nombrelugar  = htmlentities(trim($_POST['nombrelugar']));
        $lugarcurso->calle  = htmlentities(trim($_POST['calle']));
        $lugarcurso->numero  = htmlentities(trim($_POST['numero']));
        $lugarcurso->colonia  = htmlentities(trim($_POST['colonia']));
        $lugarcurso->anexo = htmlentities(trim($_POST['anexo']));
        $lugarcurso->ciudad = htmlentities(trim($_POST['ciudad']));



        // Mensaje si el usuario se creo
        if($lugarcurso->AgregarDireccion()){

            $Mensaje = "<div class=\"alert alert-success alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times</button>
                            El usuario fue creado exitosamente
                        </div>";
            
                
            
            $lugarcurso->idlugarcurso = $lugarcurso->db_conn->lastInsertId();
            $lugarcurso->idcurso = $idcurso;
            $lugarcurso->RelacionarCurso();




            


            unset($_POST['nombrelugar']);
            unset($_POST['calle']);
            unset($_POST['numero']);
            unset($_POST['colonia']);
            unset($_POST['anexo']);
            unset($_POST['ciudad']);
            echo "<h1>";
            echo $lugarcurso->ultimoparametro;
            echo"</h1>";

        }

        // Mensaje si el usuario no se pudo crear
        else{
            $Mensaje = "<div class=\"alert alert-danger alert-dismissable'">";
                
                      
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
                            <h1 class="page-header">Agregar Instructor Auxiliar</h1>
                        </div>

                        <div class="col-lg-12">
                            <?php echo $Mensaje;?> 
                        </div>

                        <div class="col-lg-6">
                           
                            <form action="AgregarDireccionCurso.php" role="form" method="post" autocomplete="off" >
                                Nombre Lugar:
                                <input type="text" name="nombrelugar" class="form-control" placeholder=" Ingrese Nombre del lugar"  onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                Calle:
                                <input type="text" name="calle" class="form-control" placeholder=" Ingrese la calle" onkeyup="javascript:this.value=this.value.toUpperCase();" required ><br>
                                Numero:
                                <input type="text" name="numero" class="form-control" placeholder=" Ingrese numero Ej. 123-A " onkeyup="javascript:this.value=this.value.toUpperCase();" ><br>
                                Colonia:
                                <input type="text" name="colonia" class="form-control" placeholder=" Ingrese su colonia" onkeyup="javascript:this.value=this.value.toUpperCase();" required><br>
                                Anexo:
                                <input type="text" name="anexo" class="form-control"   onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Ingrese Anexo Ej. Esquina con calle numero 123" required><br>
                                Ciudad:
                                <input type="text" name="ciudad" class="form-control"   onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Calle, Numero, Colonia, Numero, Numero Interior" required><br>
                                
                                <button type="submit" class="btn btn-success" >Registrar Instructor Auxiliar</button>

                            </form>

                            <form action="MiCurso.php" method="POST" style="display: inline;" >
                                <input type="hidden" name="idcurso" value="<?php echo $idcurso ?>">
                                <button type="submit" class="btn btn-primary">Regresar a Curso</button>
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
