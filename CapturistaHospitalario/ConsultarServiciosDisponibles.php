<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/BD.php'); 

    
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
                                INNER JOIN recursos";
    
$resultado=$mysqli->query($query);
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
                        <h1 class="page-header">Consultar Servicios Disponibles</h1>
                    </div>

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Ambulancias Registradas
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>              
                                            <th>Servicios Disponibles</th>
                                            <th>Numero</th>
                                            <th>Recursos Disponibles</th>
                                            <th>Ver Servicio</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                       
                                    <?php while($row=$resultado->fetch_assoc()){ ?>
                                        <tr>      
                                                        
                                            <td><?php echo "<b>Unidad Trauma Musco Esqueletico </b>". $row['traumamuscoesqueletico']."<br>"."<b>Unidad de Quemados </b>". $row['quemados']."<br>"."<b>Unidad de Neuro Cirugia </b>". $row['neurocirugia']."<br>"."<b>Unidad de Cirugia Toracica </b>". $row['cirugiatoracica']."<br>"."<b>Unidad de Raquimedular </b>". $row['raquimedular']."<br>"."<b>Unidad de Cuidados Intensivos </b>". $row['unidadcuidadosintensivos']."<br>"."<b> Cuidados Coronario </b>". $row['cuidadoscoronario']."<br>"."<b>Unidad Cuidados Intensivos  </b>". $row['unidadcuidadosintensivos']."<br>"."<b>Unidad de Poli Traumatizado </b>". $row['politraumatizado']."<br>"."<b>Unidad de Quemado </b>". $row['quemado']."<br>"."<b>Unidad Sala Cirugia </b>". $row['salacirugi']."<br>"."<b>Unidad de Pos Quirurgica </b>". $row['posquirurgic']."<br>"."<b>Unidad de Inahaloterapia </b>". $row['inahaloterapia']."<br>"."<b>Unidad de Hemodialisis </b>". $row['hemodialisis']."<br>"."<b>Unidad de Laboratorio Clinico </b>". $row['laboratorioclinico']."<br>"."<b>Banco De Sangre </b>". $row['bancodesangre']."<br>"."<b>Unidad de Rayos X </b>".$row['rayos']."<br>"."<b>Unidad de Ultra Sonido </b>". $row['ultrasonid']."<br>"."<b>Unidad de Tomografia </b>". $row['tomografia']."<br>"."<b>Farmacia </b>". $row['farmacia'];?></td> 
                                            <td><?php echo $row['recursoid'];?></td>                                                  
                                            <td><?php echo "<b> Total de Camas disponibles </b>". $row['camas']."<br>"."<b>Total de Unidades de Adminsion Continuna </b>". $row['admisioncontinua']."<br>"."<b> Total de Unidades de Medicina Critica </b>". $row['medicinacritica']."<br>"."<b>Total de Unidades de Cuidados Coronarios </b>". $row['cuidadoscoronarios']."<br>"."<b>Total de Unidades de Cuidados Intensivos </b>". $row['cuidadosintensivos']."<br>"."<b>Unidades de Poli Traumatizados </b>". $row['politraumatizados']."<br>"."<b> Unidades de Quemados </b>". $row['quemados']."<br>"."<b>Salas de Cirugia </b>". $row['salacirugia']."<br>"."<b>Salas de  Pos Quirurgica </b>". $row['posquirurgica']."<br>"."<b>Salas de Rayos X </b>". $row['rayosx']."<br>"."<b>Salas de Ultra Sonido </b>". $row['ultrasonido'];?></td>
                                            <td><a href="verServicios.php?serviciodisponibleid=<?php echo $row['serviciodisponibleid'];?>" class="btn btn-info">Ver Servicio</a></td>
    
                                        </tr>
                                    <?php } ?>               
                                   
                                    </tbody> 
                                </table>
                                </div>
                                <!-- /.table-responsive -->
                            
                            </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
   $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true,
                "scrollX": true,
                "ordering": false,
                "language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"}
                
        });
    });
    </script>

</body>

</html>
