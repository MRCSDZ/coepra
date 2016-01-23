<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/BD.php');



  
  $query="SELECT * FROM hospitales";
  
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

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script language="javascript" src="js/validacion.js"></script>
    <link href="js/estilo.css" rel="stylesheet" type="text/css">
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
                        <h1 class="page-header">Agregar Ambulancia</h1>
                    </div>
                 
                    <div class="col-lg-6">
                        <form action="GuardarAMBULANCIAS.php" method="GET" onsubmit="javascript:return Validar(this);" autocomplete="off">
                            
                            <b>Número de placas del vehículo o ambulancia</b>
                        <input id="placas" type="text" class="form-control" name="numplacas" placeholder="Ej. 376" value="" required>
                        <div id="placa" class="alerta">Hola</div>
                            <br> 
                            <b>Marca del vehículo o ambulancia</b>
                            <input id="marca" type="text" class="form-control" name="marca" placeholder="Ej. Ford, Mercedes Benz" value="" required>
                        <div id="marcas" class="alerta">Hola</div>
                            <br>                            
                            <b>Modelo del vehículo o ambulancia</b>
                            <input id="modelo" type="text" class="form-control" name="modelo" placeholder="Ej. Ecoline" value="" required>
                        <div id="modelos" class="alerta">Hola</div>
                            <br>
                            <b>Año del vehículo o ambulancia</b>
                            <input id="ano" type="number" class="form-control" name="ano" placeholder="Valores entre 1990 a 2017 Ej. 2000" value="" min="1990" max="2017" required>
                        <div id="anos" class="alerta">Hola</div>
                            <br>
                            <b>Numero Economico al que pertenece el vehículo o ambulancia</b>
                            <input id="numeconomico" type="number" class="form-control" name="numeconomico" placeholder="Ej. 09" value="" required>
                        <div id="numeconomicos" class="alerta">Hola</div>
                            <br>
                            <b>Tipo de Ambulancia</b>
                            <select name="tiposervicio" id="tiposervicio" class="form-control" value="" required>                                
                                <option value="Asistencia medica Urgente">Asistencia Médica Urgente</option>                                
                                <option value="Cuidados Intensivos">Cuidados Intensivos</option>                                 
                                <option value="Neurocirugia">Neurocirugía</option>   
                                <option value="Quemaduras">Quemaduras</option>                             
                                <option value="Trauma Musculoesqueletico">Trauma Musculoesquelético</option>
                            </select>                          
                            <br>
                            <b>Telefono</b>
                            <input id="telefono" type="tel" name="telefono" placeholder="Ej. (664) 681-7559 "class="form-control" value="" required>
                        <div id="telefonos" class="alerta">Hola</div>
                            <br>                            
                            <b>Telefono</b>
                            <input id="telefono2" type="tel" name="telefono2" placeholder="Ej. (664) 681-7559 "class="form-control" value="" >
                        <div id="telefonos2" class="alerta">Hola</div>
                            <br>
                             <b>Comentarios</b>
                            <input id="comentarios" type="text" class="form-control" name="comentarios" placeholder="Comentarios referentes al vehículo o ambulancia" value="" required>
                        <div id="comentario" class="alerta">Hola</div>
                            <br> 
                            <b>Institucion o Dependencia a la que Pertenece</b>
                            <select  name="hospitales_id" id="hospitales_id" class="form-control">
                            <?php
                            
                               while(  $row=$resultado->fetch_assoc()){
                                   echo "<option value='" . $row['id'] ."'>" . $row['nombrehospital'] . "</option>";
                               }

                            ?>
                            </select>
                            <br> 
                            <center>
                            <input class="btn-primary btn" type="submit" value="Registrar Ambulancia" class="form-control" >
                            </center>
                            <div id="alert">Hola</div>
                            <br>
                            <br>
                        </form>
                        <script type="text/javascript">
                            
				
                        </script>
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
