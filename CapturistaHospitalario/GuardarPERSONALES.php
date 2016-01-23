<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/


require('Conexiones/BD.php');

$matricula = $_GET["matricula"];
$nombre = $_GET["nombre"];
$apaterno = $_GET["apaterno"];
$amaterno = $_GET["amaterno"];
$cargo = $_GET["cargo"];
$servicio = $_GET["servicio"];
$piso= $_GET["piso"];
$telefono = $_GET["telefono"];
$telefono2 = $_GET["telefono2"];
$ext = $_GET["ext"];
$turno = $_GET["turno"];
$dias = $_GET["dias"];
$hospitales_id = $_GET["hospitales_id"];

$query="INSERT INTO personales(matricula,
                                nombre,
                                apaterno,
                                amaterno,
                                cargo,
                                servicio,
                                piso,
                                telefono,
                                telefono2,
                                ext,
                                turno,
                                dias,
                                hospitales_id)
                                   VALUES ('$matricula', 
                                    '$nombre', 
                                    '$apaterno', 
                                    '$amaterno', 
                                    '$cargo', 
                                    '$servicio', 
                                    '$piso',
                                    '$telefono', 
                                    '$telefono2', 
                                    '$ext', 
                                    '$turno', 
                                    '$dias', 
                                    '$hospitales_id')";
    
$resultado=$mysqli->query($query);



//$idusuario;


//$tamp_idtamp;
$medicosatls= $_GET["medicosatls"];
$cud = $_GET["cud"];




///////////////////////////////////////////////////////


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
                        <h1 class="page-header">Hospitales</h1>
                    </div>

                    <div class="col-lg-12">

                        <?php 

                           

                            


                            $id = $matricula;




                        ?>
                        <center>    
                            <?php if($resultado>0){ ?>
                                <h1>Registro de Hospital guardado correctamente </h1>
                                <a href="ConsultarPersonales.php"> Consultar Hospitales ya registrados</a>
                                <?php                            
                            }else{ ?>
                                    <h1>Error al Registrar Hospital</h1>   
                                    </br>
                                    <a href="ConsultarPersonales.php">Regresar</a>     
                                <?php   } ?>        
                        </center>

                        <?php 

                                    $query2="INSERT INTO serviciosdepersonales(serviciodepersonalid, 
                                                            medicosatls, 
                                                            cud, 
                                                            personales_matricula) 
                                                    VALUES (NULL, 
                                                            '$medicosatls', 
                                                            '$cud',
                                                             '$id')";
                                    

                                    $resultado2=$mysqli->query($query2);
                         
                                   mysqli_close($mysqli);
                        
                        
                        
                        ?>
                       
                        
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
