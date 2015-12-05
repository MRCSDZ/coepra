<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/BD.php');
  
  $id=$_GET['id'];
  
  $query="SELECT * FROM tamp

                 WHERE idtamp= '$id'";
  
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
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <h1 class="page-header">Registro TAMP</h1>
                    </div>

                    <form action="AlteraDatosGeneralesTAMP.php" method="GET"> 

                        <!--FILA 1-->
                        <div class="col-lg-9">

                        </div>
                        <input type="hidden" value="<?php echo $id;; ?>" name="id">
                        <div class="col-lg-3">
                            <b>Jurisdiccion</b>
                                <input type="text" name="jurisdiccion" value="<?php echo $row['jurisdiccion'];?>"  class="form-control">
                            <br>
                        </div>

                        <!--FILA 2-->
                        <div class="col-lg-3">
                            <b>Nombre</b>
                                <input type="text" name="nombre" value="<?php echo $row['nombre'];?>" class="form-control">
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Apellido Paterno</b>
                                <input type="text" name="apaterno" value="<?php echo $row['apaterno'];?>" class="form-control">
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Apellido Materno</b>
                                <input type="text" name="amaterno" value="<?php echo $row['amaterno'];?>" class="form-control">
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Sexo:</b> <br>
                            <select name="sexo1" id="" class="form-control" disabled="enabled">
                                <option value="MASCULINO">Masculino</option>
                                <option value="FEMENINO">Femenino</option>
                            </select>
                            <input type="hidden" name="sexo" value="<?php echo $row['sexo'];?>">
                        </div>

                        <!--FILA 3-->
                        <div class="col-lg-4">
                            <b>Fecha de Nacimiento</b>
                            <input type="date" name="fechanacimiento" value="<?php echo $row['fechanacimiento'];?>" class="form-control">
                            <br>
                        </div>

                        <div class="col-lg-4">
                            <b>Escolaridad</b>
                            <input type="text" name="escolaridad" value="<?php echo $row['escolaridad'];?>" class="form-control">
                            <br>
                        </div>

                        <div class="col-lg-4">
                            <b>Nivel</b><br>
                            <select name="nivel1" id="" class="form-control" disabled="enabled">
                                <option value="BASICO">Basico</option>
                                <option value="AVANZADO">Avanzado</option>
                            </select>

                            <input type="hidden" name="nivel" value="<?php echo $row['nivel'];?>">
                            
                            <br>
                        </div>

                        <!--FILA 5-->
                        <div class="col-lg-8">
                            <b>Domicilio Particular</b>
                            <input type="text"class="form-control" name="direccion" value="<?php echo $row['direccion'];?>" placeholder="Calle, numero y colonia">
                            <br>
                            
                        </div>

                        <div class="col-lg-4">
                            <b>Municipio</b>
                            <input type="text" name="municipio" value="<?php echo $row['municipio'];?>" class="form-control">
                            <br>
                        </div>

                        <!--FILA 6-->
                        <div class="col-lg-8">
                            <b>Telefono 1 </b>
                            <input type="text"class="form-control" value="<?php echo $row['telefono1'];?>" name="telefono1" placeholder="Con lada">
                            <br>
                            
                        </div>

                        <div class="col-lg-4">
                            <b>Correo Electronico</b>
                            <input type="text" name="correo" value="<?php echo $row['correo'];?>" class="form-control">
                            
                        </div>

                        <!--FILA 7-->
                        <div class="col-lg-8">
                            <b>Telefono 2 </b>
                            <input type="text"class="form-control" value="<?php echo $row['telefono2'];?>" name="telefono2" placeholder="Con lada">
                            <br>
                            <br>
                        </div>

                        <div class="col-lg-4">
                        
                        
                        </div>

                        <!--FILA 6-->

                        <div class="col-lg-6">
                            <b>TAMP </b>
                            <select id="" name="tamp" class="form-control" disabled="enabled"> 
                                <option value="VOLUNTARIO">Voluntario</option>
                                <option value="REMUNERADO">Remunerado</option>
                            </select>
                            <input type="hidden" name="tamp" value="<?php echo $row['TAMP'];?>">
                            
                        </div>

                        <div class="col-lg-6">
                            <b>Asociacion, Institucion o Empresa Donde Presta su Servicio</b>
                                <input type="text" name="aservicio" value="<?php echo $row['asociacionservicio'];?>" class="form-control">
                                <br>
                        </div>
                        
                        <!--FILA 6-->
                        <div class="col-lg-12">
                            <b>Asociacion, Institucion o Empresa Donde Tomo Su Curso</b>
                                <input type="text" name="acurso" value="<?php echo $row['asociacioncurso'];?>" class="form-control">
                                <br>
                        </div>

                        <div class="col-lg-6">
                            <b>Curso de TAMP</b>
                                <input type="date" name="fcurso" value="<?php echo $row['fechacurso'];?>" class="form-control">
                                <br>
                        </div>

                        <div class="col-lg-6">
                            <b>Años de experiencia</b>
                                <input type="text" name="experiencia" value="<?php echo $row['experiencia'];?>" class="form-control">
                                <br>
                        </div>

                        
                        <div class="col-lg-6">
                            <br>
                            <input class="form-class" type="submit" value="Registrar TAMP " class="btn btn-default">
                            <br>
                            <br>
                        </div>
                                                                
                        </div>        
                    </form>
                        
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
