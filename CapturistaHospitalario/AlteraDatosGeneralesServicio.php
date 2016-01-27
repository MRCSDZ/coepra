<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/

require('Conexiones/BD.php');

$serviciodisponibleid=$_GET['serviciodisponibleid'];
$traumamuscoesqueletico = $_GET["traumamuscoesqueletico"];
$quemados = $_GET["quemados"];
$neurocirugia = $_GET["neurocirugia"];
$cirugiatoracica = $_GET["cirugiatoracica"];
$raquimedular = $_GET["raquimedular"];
$unidadcuidadosintensivos = $_GET["unidadcuidadosintensivos"];       


$query="UPDATE serviciosdisponibles SET traumamuscoesqueletico='$traumamuscoesqueletico',
                                    quemados= '$quemados',
                                    neurocirugia='$neurocirugia',
                                    cirugiatoracica='$cirugiatoracica',
                                    raquimedular='$raquimedular',
                                    unidadcuidadosintensivos='$unidadcuidadosintensivos' WHERE serviciodisponibleid = $serviciodisponibleid";
    
$resultado=$mysqli->query($query);




$camas = $_GET["camas"];
$admisioncontinua = $_GET["admisioncontinua"];
$medicinacritica = $_GET["medicinacritica"];
$cuidadoscoronario = $_GET["cuidadoscoronario"];
$cuidadoscoronarios = $_GET["cuidadoscoronarios"];
$unidadcuidadosintensivos = $_GET["unidadcuidadosintensivos"];
$cuidadosintensivos = $_GET["cuidadosintensivos"];
$politraumatizado = $_GET["politraumatizado"];
$politraumatizados = $_GET["politraumatizados"];
$quemado = $_GET["quemado"];
$quemados = $_GET["quemados"];
$salacirugi = $_GET["salacirugi"];
$salacirugia = $_GET["salacirugia"];
$posquirurgic = $_GET["posquirurgic"];
$posquirurgica = $_GET["posquirurgica"];
$inahaloterapia = $_GET["inahaloterapia"];
$hemodialisis = $_GET["hemodialisis"];
$laboratorioclinico = $_GET["laboratorioclinico"];
$bancodesangre = $_GET["bancodesangre"];
$rayos = $_GET["rayosx"];
$rayosx = $_GET["rayosx"];
$ultrasonid = $_GET["ultrasonid"];
$ultrasonido = $_GET["ultrasonido"];
$tomografia = $_GET["tomografia"];
$farmacia = $_GET["farmacia"];




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
                        <h1 class="page-header">Servicios</h1>
                    </div>

                    <div class="col-lg-12">

                        <?php 

                           

                            


                            $serviciodisponibleid = mysqli_insert_id($mysqli);




                        ?>
                        <center>    
                            <?php if($resultado>0){ ?>
                                <h1>Modificación de Servicios Realizada con exito</h1>
                                <a href="ConsultarServiciosDisponibles.php"> Consultar Servicios ya registrados</a>
                                <?php                            
                            }else{ ?>
                                    <h1>Error al Actualizar Servicio</h1>   
                                    </br>
                                    <a href="ConsultarServiciosDisponibles.php">Regresar</a>     
                                <?php   } ?>        
                        </center>
                        <?php 
                                    $query2= "UPDATE recursos SET 
                                    camas='$camas',
                                    admisioncontinua='$admisioncontinua',
                                    medicinacritica='$medicinacritica',
                                    cuidadoscoronario='$cuidadoscoronario',
                                    cuidadoscoronarios='$cuidadoscoronarios',
                                    unidadcuidadosintensivos='$unidadcuidadosintensivos',
                                    cuidadosintensivos='$cuidadosintensivos',
                                    politraumatizado='$politraumatizado',
                                    politraumatizados='$politraumatizados',
                                    quemado='$quemado',
                                    quemados='$quemados',
                                    salacirugi='$salacirugi',
                                    salacirugia='$salacirugia',
                                    posquirurgic='$posquirurgic',
                                    posquirurgica='$posquirurgica',
                                    inahaloterapia='$inahaloterapia',
                                    hemodialisis='$hemodialisis',
                                    laboratorioclinico='$laboratorioclinico',
                                    bancodesangre='$bancodesangre',
                                    rayos='$rayosx',
                                    rayosx='$rayosx',
                                    ultrasonid='$ultrasonid',
                                    ultrasonido='$ultrasonido',
                                    tomografia='$tomografia',
                                    farmacia='$farmacia' WHERE recursoid= $serviciodisponibleid";         

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
