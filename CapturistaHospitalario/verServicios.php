<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/

 require('Conexiones/BD.php');
  
  $id=$_GET['serviciodisponibleid'];
  
$query=" SELECT serviciosdisponibles.serviciodisponibleid,
                                serviciosdisponibles.traumamuscoesqueletico,
                                serviciosdisponibles.quemados,
                                serviciosdisponibles.neurocirugia,
                                serviciosdisponibles.cirugiatoracica,
                                serviciosdisponibles.raquimedular,
                                serviciosdisponibles.unidadcuidadosintensivos,
                                recursos.recursoid,
                                recursos.camas,
                                recursos.admisioncontinua,
                                recursos.medicinacritica,
                                recursos.cuidadoscoronario,
                                recursos.cuidadoscoronarios,
                                recursos.unidadcuidadosintensivos,
                                recursos.cuidadosintensivos,
                                recursos.politraumatizado,
                                recursos.politraumatizados,
                                recursos.quemado,
                                recursos.quemados,
                                recursos.salacirugi,
                                recursos.salacirugia,
                                recursos.posquirurgic,
                                recursos.posquirurgica,
                                recursos.inahaloterapia,
                                recursos.hemodialisis,
                                recursos.laboratorioclinico,
                                recursos.bancodesangre,
                                recursos.rayos,
                                recursos.rayosx,
                                recursos.ultrasonid,
                                recursos.ultrasonido,
                                recursos.tomografia,
                                recursos.farmacia
                                FROM serviciosdisponibles
                                INNER JOIN recursos WHERE serviciodisponibleid= '$id'";
  
  $resultado=$mysqli->query($query);
  
  $row=$resultado->fetch_assoc();
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
                        <h1 class="page-header"> <i class="fa fa-user-md" ></i> <?php echo $row["serviciodisponibleid"]; ?></h1>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                Datos Generales de los Servicios y Recursos del Hospital
                            </div>
                            <div class="panel-body">
                                <b>Unidad Trauma Musco Esqueletico </b><?php echo  $row['traumamuscoesqueletico'];?> <br>
                                <b>Unidad de Quemados </b><?php echo   $row['quemado'];?> <br>
                                <b>Unidad de Neuro Cirugia </b><?php echo  $row['neurocirugia'];?> <br>
                                <b>Unidad de Cirugia Toracica </b><?php echo $row['cirugiatoracica'];?> <br>
                                <b>Unidad de Raquimedular </b><?php echo $row['raquimedular'];?> <br>
                                <b>Unidad de Cuidados Intensivos </b><?php echo $row['unidadcuidadosintensivos'];?> <br>
                                <b> Cuidados Coronario </b><?php echo $row['cuidadoscoronario'];?> <br>
                                <b>Unidad Cuidados Intensivos  </b><?php echo $row['unidadcuidadosintensivos'];?> <br>
                                <b>Unidad de Poli Traumatizado </b><?php echo $row['politraumatizado'];?> <br>
                                <b>Unidad de Quemado </b><?php echo $row['quemado'];?> <br>
                                <b>Unidad Sala Cirugia </b><?php echo $row['salacirugi'];?> <br>
                                <b>Unidad de Pos Quirurgica </b><?php echo $row['posquirurgic'];?> <br>
                                <b>Unidad de Inahaloterapia </b><?php echo $row['inahaloterapia'];?> <br>
                                <b>Unidad de Hemodialisis </b><?php echo $row['hemodialisis'];?> <br>
                                <b>Unidad de Laboratorio Clinico </b><?php echo $row['laboratorioclinico'];?> <br>
                                <b>Banco De Sangre </b><?php echo $row['bancodesangre'];?> <br>
                                <b>Unidad de Rayos X </b><?php echo $row['rayos'];?> <br>
                                <b>Unidad de Ultra Sonido </b><?php echo $row['ultrasonid'];?> <br>
                                <b>Unidad de Tomografia </b><?php echo $row['tomografia'];?> <br>
                                <b>Farmacia </b><?php echo $row['farmacia'];?> <br>
                                <b> Total de Camas disponibles </b><?php echo $row['camas'];?> <br>
                                <b>Total de Unidades de Adminsion Continuna </b><?php echo $row['admisioncontinua'];?> <br>
                                <b> Total de Unidades de Medicina Critica </b><?php echo $row['medicinacritica'];?> <br>
                                <b>Total de Unidades de Cuidados Coronarios </b><?php echo$row['cuidadoscoronarios'];?> <br>
                                <b>Total de Unidades de Cuidados Intensivos </b><?php echo $row['cuidadosintensivos'];?> <br>
                                <b>Unidades de Poli Traumatizados </b><?php echo $row['politraumatizados'];?> <br>
                                <b> Unidades de Quemados </b><?php echo $row['quemados'];?> <br>
                                <b>Salas de Cirugia </b><?php echo $row['salacirugia'];?> <br>
                                <b>Salas de  Pos Quirurgica </b><?php echo $row['posquirurgica'];?> <br>
                                <b>Salas de Rayos X </b><?php echo $row['rayosx'];?> <br>
                                <b>Salas de Ultra Sonido </b><?php echo $row['ultrasonido'];?> <br>
                            </div>
                            <div class="panel-footer">
                                <a href="ModificarServiciosGeneral.php?serviciodisponibleid=<?php echo $row['serviciodisponibleid'];?>">Modificar Datos Generales </a> 
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                       
                    </div>
                    <div class="col-lg-12">
                        <form action="EliminarServicios.php" method="POST">
                            <input type="hidden" value=" <?php echo $id; ?>" name="serviciodisponibleid" >
                            <input type="submit" class="form-control" value="Eliminar Personal" name="">
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

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

