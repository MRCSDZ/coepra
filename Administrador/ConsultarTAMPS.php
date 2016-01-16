<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
require("../admin/permiso_nivel_1.php");
/******************  NO BORRAR  ******************/
     //Conexion Base de datos y Creacion de Objetos en Base de datos
    include_once '../clases/database.php';
    include_once '../clases/administrador.php';
    include_once '../initial.php';

    //Instancia de usuarios
    $admin = new Administrador($db);

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

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                        <h1 class="page-header">Consultar Instructores</h1>
                    </div>


                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Usuarios En el sistema
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Jurisdiccion</th>
                                                <th>Nombre TAMP </th>
                                                <th>Sexo</th>
                                                <th>Fecha de Nacimiento</th>
                                                <th>Escolaridad</th>
                                                <th>Nivel</th>
                                                <th>Direccion</th>
                                                <th>Municipio</th>
                                                <th>Telefonos</th>
                                                <th>Correo</th>
                                                <th>TAMP</th>
                                                <th>Asocicacion Servicio</th>
                                                <th>Asocicacion Curso</th>
                                                <th>Experiencia</th>
                                                <th>Ver TAMP</th>

                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                        <?php 
                                            $prep_state = $admin->ConsultarTAMPS();
                                            while ($row = $prep_state->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                            <tr>                 
                                                <td><?php echo $row['jurisdiccion'];?></td>                                   
                                                <td><?php echo $row['nombre']." ".$row['apaterno']." ".$row['amaterno'];?></td>                                    
                                                <td><?php echo $row['sexo'];?></td>
                                                <td><?php echo $row['fechanacimiento'];?></td>
                                                <td><?php echo $row['escolaridad'];?></td>
                                                <td><?php echo $row['nivel'];?></td>
                                                <td><?php echo $row['direccion'];?></td>
                                                <td><?php echo $row['municipio'];?></td>
                                                <td><?php echo $row['telefono1']." ".$row['telefono2'];?></td>
                                                <td><?php echo $row['correo'];?></td>
                                                <td><?php echo $row['TAMP'];?></td>
                                                <td><?php echo $row['asociacionservicio'];?></td>
                                                <td><?php echo $row['asociacioncurso'];?></td>
                                                <td><?php echo $row['experiencia'];?></td>
                                                <td><a href="VerTAMP.php?id=<?php echo $row['idtamp'];?>" class="btn btn-info">Ver TAMP</a></td>
                                                             
                                            </tr>
                                        <?php } ?>                                           
                                        </tbody> 
                                    </table>
                                </div>
                                <!-- /.table-responsive --> 
                            </div>
                            <!-- /.panel-body -->
                        </div>

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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
                "scrollX": true,
                "ordering": false
                
        });
    });
    </script>

</body>

</html>
