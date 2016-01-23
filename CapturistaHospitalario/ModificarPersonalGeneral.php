
<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/BD.php');

$query2="SELECT * FROM hospitales";
  
  $resultado2=$mysqli->query($query2);

 $matricula = $_GET["matricula"];
  
  $query="SELECT * FROM personales 
      
                 WHERE matricula= '$matricula'";
  
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
                        <h1 class="page-header">Registro de Personal</h1>
                    </div>

                    <div>
                        <form action="GuardarPERSONALES.php" method="GET">
                            <b>Número de Control</b>
                            <input  type="text" class="form-control" name="matricula" placeholder="Ej. 01219" value="<?php echo $matricula; ?>" required>
                        
                            <br> 
                            <b>Nombre</b>
                            <input  type="text" class="form-control" name="nombre" placeholder="Escribe tu Nombre" value="<?php echo $row['nombre'];?>"required>
                        
                            <br>
                            <b>Apellido Paterno</b>
                            <input  type="text" class="form-control" name="apaterno" placeholder="Estribe tu Apellido Paterno" value="<?php echo $row['apaterno'];?>" required>
                        
                            <br>
                            <b>Apellido Materno</b>
                            <input  type="text" class="form-control" name="amaterno" placeholder="Estribe tu Apellido Materno" value="<?php echo $row['amaterno'];?>" required>
                        
                            <br>                           
                            <b>Cargo que Desempeña</b>
                            <select name="cargo" id="" class="form-control" value="<?php echo $row['cargo'];?>">
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
                            <select name="servicio" id="" class="form-control" value="<?php echo $row['servicio'];?>"> 
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
                            <input type="text" class="form-control" name="piso" placeholder="Ej. 2A" value="<?php echo $row['piso'];?>">
                            <br>                          
                            <b>Telefono:</b>
                            <input  type="tel" name="telefono" placeholder="Ej. (664) 681-7559 "class="form-control" value="<?php echo $row['telefono'];?>" required>
                       
                            <br>                        
                            <b>Telefono:</b>
                            <input  type="tel" name="telefono2" placeholder="Ej. (664) 681-7559 "class="form-control" value="<?php echo $row['telefono2'];?>" required>
                          
                            <br>                         
                            <b>Ext. Telefonica</b>
                            <input type="number" class="form-control" name="ext"  placeholder="Ej. 44" min="1" max="99" value="<?php echo $row['ext'];?>" required>
                            <br>                        
                            <b>Jornada laboral</b>
                            <select name="turno" id="" class="form-control" value="<?php echo $row['turno'];?>"> 
                                <option value="Matutino">Matutino</option> 
                                <option value="Vespertino">Vespertino</option> 
                                <option value="Nocturno">Nocturno</option> 
                            </select>
                            <br>                            
                            <b>Dias Laborales (semanal)</b>
                            <input type="number" class="form-control" name="dias" placeholder="Ej. 6" min="1" max="7" value="<?php echo $row['dias'];?>">
                            <br>                            
                            Servicios:<br>                         
                            <b>medicosatls</b>
                            <select name="medicosatls" id="" class="form-control" value="<?php echo $row['medicosatls'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>
                            <b>cud</b>
                            <select name="cud" id="" class="form-control" value="<?php echo $row['cud'];?>">
                                <option value="si">Si</option>
                                <option value="no">No</option>
                            </select>
                            <br>  
                            <b>Institucion o Dependencia a la que Pertenece</b>
                            <select  name="hospitales_id" id="" class="form-control" <?php echo $row['hospitales_id'];?>>
                            <?php

                               while(  $row=$resultado2->fetch_assoc()){
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
