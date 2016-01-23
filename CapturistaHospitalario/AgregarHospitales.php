<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
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
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script language="javascript" src="js/hospital.js"></script>
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
                        <h1 class="page-header">Agregar Hospitales</h1>
                    </div>

                    <div class="col-lg-6">
                        <form action="GuardarHOSPITALES.php" method="GET" onsubmit="javascript:return Valida(this);" autocomplete="off"> 
                        <!--FILA 1-->
                       
                            <b>Institución/Dependencia/Asociacion Civil/Empresa Sector Privado</b>
                            <input id="nombrehospital" type="text" name="nombrehospital" class="form-control" placeholder="Ej. Hospital General" value="" required>
                        <div id="nombrehospitales" class="alerta">Hola</div>
                            <br>
                      
                            <b>Calle:</b>
                            <input id="calle" type="text" name="calle" placeholder="Ej. Reforma" class="form-control" value="" required>
                        <div id="calles" class="alerta">Hola</div>
                            <br>

                            <b>Número:</b>
                            <input id="numero" type="number" name="numero" placeholder="Ej. 119"  min="1" max="9999" class="form-control" value="" required>
                        <div id="numeros" class="alerta">Hola</div>
                            <br>

                            <b>Colonia/Fraccionamiento/Localidad</b>
                            <input id="colonia" type="text" name="colonia" placeholder="Ej. Zona Rio" class="form-control" value="" required>
                        <div id="colonias" class="alerta">Hola</div>
                            <br>
                        
                            <b>Código Postal:</b>
                            <input id="codigopostal" type="number" name="codigopostal" placeholder="Ej. 22610" min="22000" max="22999" class="form-control" value="" required>
                        <div id="codigopostales" class="alerta">Hola</div>
                            <br>
                         
                            <b>Delegación:</b>
                            <select  name="delegacion" id="" class="form-control" value="" required>
                                <option value="Centro">Centro</option>
                                <option value="Otay Centenario">Otay Centenario</option>
                                <option value="Playas de Tijuana">Playas de Tijuana</option>
                                <option value="La Mesa">La Mesa</option>
                                <option value="San Antonio de los Buenos">San Antonio de los Buenos</option>
                                <option value="Sanchez Taboada">Sánchez Taboada</option>
                                <option value="Cerro Colorado">Cerro Colorado</option>
                                <option value="La Presa">La Presa</option>
                                <option value="La Presa Rural">La Presa Rural</option>
                            </select>
                            <br>
                            <b>Municipio:</b>
                            <select  name="municipio" id="" class="form-control" value="" required>
                                <option value="Tijuana">Tijuana</option>
                                <option value="Tecate">Tecate</option>
                                <option value="Ensenada">Ensenada</option>
                                <option value="Rosarito">Rosarito</option>
                                <option value="Mexicali">Mexicali</option>
                            </select>
                            <br>

                            <b>Estado:</b>
                            <select  name="estado" id="" class="form-control" value="" required>
                                <option value="Baja California">Baja California</option>
                            </select>
                            <br>
                        
                            <b>Telefono:</b>
                            <input id="telefono" type="tel" name="telefono" placeholder="Ej. (664) 681-7559 "class="form-control" value="" required>
                        <div id="telefonos" class="alerta">Hola</div>
                            <br>
                        
                            <b>Telefono:</b>
                            <input id="telefono2" type="tel" name="telefono2" placeholder="Ej. (664) 681-7559 "class="form-control" value="" required>
                            <div id="telefonos2" class="alerta">Hola</div>
                            <br>
                            <b>Nivel de Operación:</b>
                                <select  name="nivel" class="form-control" value="" required>
                                <option value="2do. nivel">2do. Nivel</option>
                                <option value="3er. Nivel">3er. Nivel</option>  
                            </select>
                            <br>

                            <b>Número de Fax:</b>
                            <input id="fax" type="tel" name="fax" placeholder="Ej. (664) 634-2978 " class="form-control" value="" required>
                            <div id="faxes" class="alerta">Hola</div>
                            <br>
                            <b>Horario de Fax:</b>
                                <input type="time" name="horariofax" value="07:00:00" max="12:00:00" min="06:00:00" step="1">
                                <input type="time" name="horariofaxf" value="05:00:00" max="19:00:00" min="12:00:00" step="2">
                            <br>
                            <br>
                            <b>Frecuencia de Radio:</b>
                                <input type="text" name="radiotelefonico" placeholder="Ej. 107.7 MHz " class="form-control" value="" >
                                            
                            <br>
                            <h3>Tipo de seguro con los que cuenta la Institución o Dependencia:</h3>
                            <br>                  
                                <b>ISSSTECALI:</b>
                                <select name="issstecali" id="" class="form-control" required>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>   
                                <b>ISSSTE:</b>
                                <select name="issste" id="" class="form-control" required>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                                <b>Seguro Popular:</b>
                                <select name="seguropopular" id="" class="form-control" required>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                                <b>IMSS:</b>
                                <select name="imss" id="" class="form-control" required>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                            <br>
                            <center>
                                <br>
                                <input class="btn-primary btn" type="submit" value="Registrar Hospital " class="btn btn-default" class="form-control">
                            </center>
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
