<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/


require('Conexiones/BD.php');

$nombre = $_GET["nombrehospital"];
$calle = $_GET["calle"];
$numero = $_GET["numero"];
$colonia = $_GET["colonia"];
$codigopostal = $_GET["codigopostal"];

$delegacion = $_GET["delegacion"];
$municipio = $_GET["municipio"];
$estado = $_GET["estado"];
$telefono = $_GET["telefono"];
$telefono2 = $_GET["telefono2"];
$nivel = $_GET["nivel"];
$fax = $_GET["fax"];
$horariofax = $_GET["horariofax"];
$horariofaxf = $_GET["horariofaxf"];
$radiotelefonico = $_GET["radiotelefonico"];


        


$query="INSERT INTO hospitales(id, 
                                    nombrehospital,
                                    calle,
                                    numero,
                                    colonia,
                                    codigopostal,
                                    delegacion,
                                    municipio,
                                    estado,
                                    telefono,
                                    telefono2,
                                    nivel,
                                    fax,
                                    horariofax,
                                    horariofaxf,
                                    radiotelefonico)
                               VALUES (NULL,
                                    '$nombre', 
                                    '$calle', 
                                    '$numero', 
                                    '$colonia', 
                                    '$codigopostal', 
                                    '$delegacion', 
                                    '$municipio', 
                                    '$estado', 
                                    '$telefono', 
                                    '$telefono2', 
                                    '$nivel', 
                                    '$fax', 
                                    '$horariofax',
                                    '$horariofaxf',
                                    '$radiotelefonico')";
    
$resultado=$mysqli->query($query);



//$idusuario;


//$tamp_idtamp;
$issstecali= $_GET["issstecali"];
$issste = $_GET["issste"];
$seguropopular = $_GET["seguropopular"];
$imss = $_GET["imss"];




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

                           

                            


                            $id = mysqli_insert_id($mysqli);




                        ?>
                        <center>    
                            <?php if($resultado>0){ ?>
                                <h1>Registro de Hospital guardado correctamente </h1>
                                <a href="ConsultarHospitales.php"> Consultar Hospitales ya registrados</a>
                                <?php                            
                            }else{ ?>
                                    <h1>Error al Registrar Hospital</h1>   
                                    </br>
                                    <a href="ConsultarHospitales.php">Regresar</a>     
                                <?php   } ?>        
                        </center>

                        <?php 

                                    $query2="INSERT INTO tiposeguros(id, 
                                                            issstecali, 
                                                            issste, 
                                                            seguropopular, 
                                                            imss,
                                                            hospitales_id) 
                                                    VALUES (NULL, 
                                                            '$issstecali', 
                                                            '$issste', 
                                                            '$seguropopular', 
                                                            '$imss',
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
