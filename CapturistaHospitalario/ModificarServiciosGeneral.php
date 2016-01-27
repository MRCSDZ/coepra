
<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/BD.php');

$query2="SELECT * FROM hospitales";
  
  $resultado2=$mysqli->query($query2);

 $serviciodisponibleid = $_GET["serviciodisponibleid"];
 
 $query="SELECT * FROM serviciosdisponibles
             INNER JOIN recursos
                    ON recursos.serviciosdisponibles_serviciodisponibleid = serviciosdisponibles.serviciodisponibleid
                 WHERE serviciodisponibleid= '$serviciodisponibleid'";
  
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
                        <h1 class="page-header">Registro de Servicio</h1>
                    </div>

                    <div>
                       <form action="AlteraDatosGeneralesServicio.php" method="GET" >                            
                            <input type="hidden" min="1" max="400" class="form-control" name="serviciodisponibleid" placeholder="Ej. 01" value="<?php echo $serviciodisponibleid; ?>" >
                            <br> 
                            <b>Cuenta con Departamento de Trauma Musculoesquelético</b>
                            <select name="traumamuscoesqueletico" id="" class="form-control" value="<?php echo $row['traumamuscoesqueletico'];?>" >
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            <b>Cuenta con Departamento de Quemaduras</b>
                            <select name="quemados" id="" class="form-control" value="<?php echo $row['quemados'];?>" > 
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            <b>Cuenta con Departamento de Neurocirugía</b>
                            <select name="neurocirugia" id="" class="form-control" value="<?php echo $row['neurocirugia'];?>" >
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            <b>Cuenta con Departamento de Cirugia Toracica</b>
                            <select name="cirugiatoracica" id="" class="form-control" value="<?php echo $row['cirugiatoracica'];?>" >
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>                            
                            <b>Cuenta con Departamento de Traumatismo Raquimedular</b>
                            <select name="raquimedular" id="" class="form-control" value="<?php echo $row['raquimedular'];?>" >
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>                            
                                                  
                            <h2>Recursos Disponibles dentro del Hospital</h2>   
                            
                            <b>Total de Camas con las que Cuenta el Hospital </b>
                            <input type="number" min="1" max="100" class="form-control" name="camas" value="<?php echo $row['camas'];?>" >
                            <br>
                            <b>Unidades de Servicio de Urgencias</b>
                            <input type="number" min="1" max="100"  class="form-control" name="admisioncontinua" value="<?php echo $row['admisioncontinua'];?>" >
                            <br>
                            <b>Medicina Critica Total</b>
                            <input type="number" min="1" max="100" class="form-control" name="medicinacritica" value="<?php echo $row['medicinacritica'];?>">
                            <br>
                            
                            
                            <b>Cuenta con Departamento de Cuidados Coronarios</b>
                            <select name="cuidadoscoronario" id="" class="form-control" value="<?php echo $row['cuidadoscoronario'];?>" >
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br> 
                            <b>Número o Cantidad</b>
                            <input type="number" min="1" max="100" class="form-control" name="cuidadoscoronarios" value="<?php echo $row['cuidadoscoronarios'];?>">
                            <br> 
                            
                            <b>Cuenta con Departamento de Cuidados Intensivos</b>
                            <select name="unidadcuidadosintensivos" id="" class="form-control" value="<?php echo $row['unidadcuidadosintensivos'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>      
                            <b>Unidades de Cuidados Intensivos</b>
                            <input type="number" min="1" max="100" class="form-control" name="cuidadosintensivos" value="<?php echo $row['cuidadosintensivos'];?>">
                            <br>
                            
                            
                            
                            <b>Cuenta con Departamento de UCI Politraumatizados</b>
                            <select name="politraumatizado" id="" class="form-control" value="<?php echo $row['politraumatizado'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br> 
                            <b>Número o Cantidad</b>
                            <input type="number" min="1" max="100" class="form-control" name="politraumatizados" value="<?php echo $row['politraumatizados'];?>">
                            <br>
                            
                            
                            <b>Cuenta con Departamento de UCI Quemados</b>
                            <select name="quemado" id="" class="form-control" value="<?php echo $row['quemado'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br> 
                            <b>Número o Cantidad</b>
                            <input type="number" min="1" max="100" class="form-control" name="quemados" value="<?php echo $row['quemados'];?>">
                            <br>
                            
                            
                            <h3>SERVICIOS AUXILIARES DE DIAGNÒSTICO Y TRATAMIENTO (365 DIAS DEL AÑO)</h3>
                            <br>
                            
                            
                            
                             <b>Cuenta con Salas de Cirugia Autorizados </b>
                            <select name="salacirugi" id="" class="form-control" value="<?php echo $row['salacirugi'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <b>Número o Cantidad</b>
                            <input type="number" min="1" max="100" class="form-control" name="salacirugia" value="<?php echo $row['salacirugia'];?>">
                            <br> 
                            
                            
                            
                            
                            <b>Camas de Recuperación Posquirurgica</b>
                            <select name="posquirurgic" id="" class="form-control" value="<?php echo $row['posquirurgic'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <b>Cantidad de Camas</b>
                            <input type="number" min="1" max="100" class="form-control" name="posquirurgica" value="<?php echo $row['posquirurgica'];?>">
                            <br>
                            
                            
                            
                            <b>Servicio de Inahaloterapia</b>
                            <select name="inahaloterapia" id="" class="form-control" value="<?php echo $row['inahaloterapia'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            
                            
                            <b>Equipos y Personal de Hemodialisis</b>
                            <select name="hemodialisis" id="" class="form-control" value="<?php echo $row['hemodialisis'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            
                            
                            
                            <b>Laboratorios de Análisis Clínico</b>
                            <select name="laboratorioclinico" id="" class="form-control" value="<?php echo $row['laboratorioclinico'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br> 
                            
                            
                            <b>Bancos de Sangre y de Transfusiones</b>
                            <select name="bancodesangre" id="" class="form-control" value="<?php echo $row['bancodesangre'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            
                            
                            
                            <b>Salas de Rayos X </b>
                            <select name="rayos" id="" class="form-control" value="<?php echo $row['rayos'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <b>Número o Cantidad</b>
                            <input type="number" min="1" max="100" class="form-control" name="rayosx" value="<?php echo $row['rayosx'];?>">
                            <br>
                            
                            
                            <b>Equipos de Ultrasonido para Diagnóstico </b>
                            <select name="ultrasonid" id="" class="form-control" value="<?php echo $row['ultrasonid'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <b>Número o Cantidad</b>
                            <input type="number" min="1" max="100" class="form-control" name="ultrasonido" value="<?php echo $row['ultrasonido'];?>">
                            <br>
                            
                            
                            
                            <b>Salas de Tomografía Axial Computarizada</b>
                            <select name="tomografia" id="" class="form-control" value="<?php echo $row['tomografia'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            
                            
                            
                            <b>Farmacias</b>
                            <select name="farmacia" id="" class="form-control" value="<?php echo $row['farmacia'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>                
                            <input type="submit" value="Actualizar Servicio" class="form-control">
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
