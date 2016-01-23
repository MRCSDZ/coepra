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
    <script language="javascript" src="js/personales.js"></script>
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
                        <h1 class="page-header">Agregar Personales Del Hospital</h1>
                    </div>
                    <div class="col-lg-6">
                        <form action="GuardarPERSONALES.php" method="GET" onsubmit="javascript:return Valida(this);" autocomplete="off">
                            <b>Número de Control</b>
                            <input id="matricula" type="text" class="form-control" name="matricula" placeholder="Ej. 01219" value="" required>
                        <div id="matriculas" class="alerta">Hola</div>
                            <br> 
                            <b>Nombre</b>
                            <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Escribe tu Nombre" value="" required>
                        <div id="nombres" class="alerta">Hola</div>
                            <br>
                            <b>Apellido Paterno</b>
                            <input id="apaterno" type="text" class="form-control" name="apaterno" placeholder="Estribe tu Apellido Paterno" value="" required>
                        <div id="apaternos" class="alerta">Hola</div>
                            <br>
                            <b>Apellido Materno</b>
                            <input id="amaterno" type="text" class="form-control" name="amaterno" placeholder="Estribe tu Apellido Materno" value="" required>
                        <div id="amaternos" class="alerta">Hola</div>
                            <br>                           
                            <b>Cargo que Desempeña</b>
                            <select name="cargo" id="" class="form-control">
                                <option value="instructor principal">Instructor Principal</option>
                                <option value="instructor adjunto">Instructor Adjunto</option>
                                <option value="director">Director General</option>
                                <option value="director medico">Director Médico</option>
                                <option value="subdirector">Subdirector</option>
                                <option value="jefe de division">Jefe de División</option>
                                <option value="encargado">Encargado</option>
                            </select>
                            <br>
                            <b>Servicio o Actividad que Desempeña</b>
                            <select name="servicio" id="" class="form-control"> 
                                <option value="Area Administrativa">Area Administrativa</option> 
                                <option value="Asistencia medica Urgente">Asistencia Médica Urgente</option>                                
                                <option value="Cuidados Intensivos">Cuidados Intensivos</option> 
                                <option value="Direccion de Hospital">Dirección de Hospital</option>
                                <option value="Neurocirugia">Neurocirugía</option>
                                <option value="Quemaduras">Quemaduras</option>                                                       
                                <option value="Recursos Hospitalarios">Recursos Hospitalarios</option>
                                <option value="Supervision y Evaluacion">Supervisión y Evaluación</option>             
                                <option value="Trauma Musculoesqueletico">Trauma Musculoesquelético</option>
                            </select> 
                            <br>                        
                            <b>Piso o Planta</b>
                            <input type="text" class="form-control" name="piso" placeholder="Ej. 2A" onkeyup="javascript:this.value=this.value.toUpperCase();">
                            <br>                          
                            <b>Telefono:</b>
                            <input id="telefono" type="tel" name="telefono" placeholder="Ej. (664) 681-7559 "class="form-control" value="" required>
                        <div id="telefonos" class="alerta">Hola</div>
                            <br>                        
                            <b>Telefono:</b>
                            <input id="telefono2" type="tel" name="telefono2" placeholder="Ej. (664) 681-7559 "class="form-control" value="" required>
                            <div id="telefonos2" class="alerta">Hola</div>
                            <br>                         
                            <b>Ext. Telefonica</b>
                            <input type="number" class="form-control" name="ext"  placeholder="Ej. 44" min="1" max="99" value="" required>
                            <br>                        
                            <b>Jornada laboral</b>
                            <select name="turno" id="" class="form-control"> 
                                <option value="Matutino">Matutino</option> 
                                <option value="Vespertino">Vespertino</option> 
                                <option value="Nocturno">Nocturno</option> 
                            </select>
                            <br>                            
                            <b>Dias Laborales (semanal)</b>
                            <input type="number" class="form-control" name="dias" placeholder="Ej. 6" min="1" max="7">
                            <br>                            
                            Servicios:<br>                         
                            <b>medicosatls</b>
                            <select name="medicosatls" id="" class="form-control">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            <b>cud</b>
                            <select name="cud" id="" class="form-control">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>  
                            <b>Institucion o Dependencia a la que Pertenece</b>
                            <select  name="hospitales_id" id="" class="form-control">
                            <?php

                               while(  $row=$resultado->fetch_assoc()){
                                   echo "<option value='" . $row['id'] ."'>" . $row['nombrehospital'] . "</option>";
                               }

                            ?>
                            </select>
                            <br>                                                                        
                            <input type="submit" value="Registrar" class="form-control">
                            <br>
                            <br>
                        </form>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

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
