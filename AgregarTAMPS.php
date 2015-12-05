<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/

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

                    <form action="GuardarTAMPS.php" method="GET"> 

                        <!--FILA 1-->
                        <div class="col-lg-9">

                        </div>

                        <div class="col-lg-3">
                            <b>Jurisdiccion</b>
                                <input type="text" name="jurisdiccion" class="form-control"onkeyup="javascript:this.value=this.value.toUpperCase();">
                            <br>
                        </div>

                        <!--FILA 2-->
                        <div class="col-lg-3">
                            <b>Nombre</b>
                                <input type="text" name="nombre" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Apellido Paterno</b>
                                <input type="text" name="apaterno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Apellido Materno</b>
                                <input type="text" name="amaterno" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Sexo:</b> <br>
                            <select name="sexo" id="" class="form-control">
                                <option value="MASCULINO">Masculino</option>
                                <option value="FEMENINO">Femenino</option>
                            </select>
                        </div>

                        <!--FILA 3-->
                        <div class="col-lg-4">
                            <b>Fecha de Nacimiento</b>
                            <input type="date" name="fechanacimiento" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>

                        <div class="col-lg-4">
                            <b>Escolaridad</b>
                            <input type="text" name="escolaridad" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>

                        <div class="col-lg-4">
                            <b>Nivel</b><br>
                            <select name="nivel" id="" class="form-control">
                                <option value="BASICO">Basico</option>
                                <option value="AVANZADO">Avanzado</option>
                            </select>
                            
                            <br>
                        </div>

                        <!--FILA 5-->
                        <div class="col-lg-8">
                            <b>Domicilio Particular</b>
                            <input type="text"class="form-control" name="direccion" placeholder="Calle, numero y colonia" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                            
                        </div>

                        <div class="col-lg-4">
                            <b>Municipio</b>
                            <input type="text" name="municipio" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                        </div>

                        <!--FILA 6-->
                        <div class="col-lg-8">
                            <b>Telefono 1 </b>
                            <input type="text"class="form-control" name="telefono1" placeholder="Con lada" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                            
                        </div>

                        <div class="col-lg-4">
                            <b>Correo Electronico</b>
                            <input type="text" name="correo" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            
                        </div>

                        <!--FILA 7-->
                        <div class="col-lg-8">
                            <b>Telefono 2 </b>
                            <input type="text"class="form-control" name="telefono2" placeholder="Con lada" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                            <br>
                            <br>
                        </div>

                        <div class="col-lg-4">
                        
                        
                        </div>

                        <!--FILA 6-->

                        <div class="col-lg-6">
                            <b>TAMP </b>
                            <select id="" name="tamp" class="form-control"> 
                                <option value="VOLUNTARIO">Voluntario</option>
                                <option value="REMUNERADO">Remunerado</option>
                            </select>
                            
                        </div>

                        <div class="col-lg-6">
                            <b>Asociacion, Institucion o Empresa Donde Presta su Servicio</b>
                                <input type="text" name="aservicio" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                                <br>
                        </div>
                        
                        <!--FILA 6-->
                        <div class="col-lg-12">
                            <b>Asociacion, Institucion o Empresa Donde Tomo Su Curso</b>
                                <input type="text" name="acurso" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                                <br>
                        </div>

                        <div class="col-lg-6">
                            <b>Curso de TAMP</b>
                                <input type="date" name="fcurso" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                                <br>
                        </div>

                        <div class="col-lg-6">
                            <b>Años de experiencia</b>
                                <input type="text" name="experiencia" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" >
                                <br>
                        </div>

                        <div class="col-lg-6">
                            Capacitacion Continua:<br>

                            <!--
                                RCP Para Profesionales <input type="checkbox" name="rcp"><br>  
                                PALS <input type="checkbox" name="pals"> <br>
                                ACLS <input type="checkbox" name="acls"> <br> 
                                NALS <input type="checkbox" name="nals"> <br>
                                PR en Trauma NAEMT <input type="checkbox" name="naetm"> <br> 
                                EMPACT <input type="checkbox" name="empact"> <br>
                                PHTLS <input type="checkbox" name="phtls"> <br> 
                                AMLS <input type="checkbox" name="amls"> <br>
                                PEPP <input type="checkbox" name="pepp"> <br> 
                                FSCS <input type="checkbox" name="fscs"> <br>
                            -->
                                <b>RCP Para Profesionales</b>
                                <select name="rcp" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                                
                                <b>PALS</b>
                                <select name="pals" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>

                                <b>ACLS</b>
                                <select name="acls" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                                
                                <b>NALS</b>
                                <select name="nals" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>

                                <b>PR en Trauma NAEMT</b>
                                <select name="naetm" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>

                        </div>

                        <div class="col-lg-6">

                                
                                <br>
                                <b>EMPACT</b>
                                <select name="empact" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>

                                <b>PHTLS</b>
                                <select name="phtls" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>

                                <b>AMLS</b>
                                <select name="amls" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                                
                                <b>PEPP</b>
                                <select name="pepp" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                                
                                <b>FSCS</b>
                                <select name="fscs" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                        </div>

                        <div class="col-lg-12">



                                Otros:
                                <br>
                                <textarea name="otros" id="" cols="50" rows="10" placeholder="Escriba aqui si tiene otras capacitaciones"  onkeyup="javascript:this.value=this.value.toUpperCase();" ></textarea>
                                <br>

                                                                <br>
                                <input class="form-class" type="submit" value="Registrar TAMP " class="btn btn-default">
                                <br>
                                <br>
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
