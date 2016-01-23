
<?php 
/******************  NO BORRAR  ******************/
session_start();
require("../admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/BD.php');
  $id=$_GET['id'];
  
  $query="SELECT * FROM hospitales
      
                 WHERE id= '$id'";
  
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
                        <h1 class="page-header">Registro Hospitales</h1>
                    </div>

                    <div>
                        <form action="AlteraDatosGeneralesHospital.php" method="GET"> 
 <!--FILA 1-->
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                          <div class="col-lg-6">
                            <b>Institución/Dependencia/Asociacion Civil/Empresa Sector Privado</b>
                                <input type="text" name="nombrehospital" class="form-control" placeholder="Ej. Hospital General" value="<?php echo $row['nombrehospital'];?>">
                            <br>
                        </div>

                        <!--FILA 2-->
                        <div class="col-lg-3">
                            <b>Calle:</b>
                                <input type="text" name="calle" placeholder="Ej. Reforma" class="form-control" value="<?php echo $row['calle'];?>">
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Número:</b>
                                <input type="text" name="numero" placeholder="Ej. 119" class="form-control" value="<?php echo $row['numero'];?>">
                            <br>
                        </div>

                        <div class="col-lg-6">
                            <b>Colonia/Fraccionamiento/localidad</b>
                                <input type="text" name="colonia" placeholder="Ej. Zona Rio" class="form-control" value="<?php echo $row['colonia'];?>">
                            <br>
                        </div>
                        
                        <div class="col-lg-3">
                            <b>Código Postal:</b>
                                <input type="text" name="codigopostal" placeholder="Ej. 22610" class="form-control" value="<?php echo $row['codigopostal'];?>">
                            <br>
                        </div>

                        <div class="col-lg-3">   
                            <b>Delegación:</b>
                            <select  name="delegacion" id="" class="form-control" value="<?php echo $row['delegacion'];?>">
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
                        </div>
                        <div class="col-lg-3">
                            <b>Municipio:</b>
                            <select  name="municipio" id="" class="form-control" value="<?php echo $row['municipio'];?>">
                                <option value="Tijuana">Tijuana</option>
                                <option value="Tecate">Tecate</option>
                                <option value="Ensenada">Ensenada</option>
                                <option value="Rosarito">Rosarito</option>
                                <option value="Mexicali">Mexicali</option>
                            </select>
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Estado:</b>
                            <select  name="estado" id="" class="form-control" value="<?php echo $row['estado'];?>">
                                <option value="Baja California">Baja California</option>
                            </select>
                            <br>
                        </div>
                        
                        <div class="col-lg-3">
                            <b>Telefono:</b>
                                <input type="tel" name="telefono" placeholder="Ej. (664) 681-7559 "class="form-control" value="<?php echo $row['telefono'];?>" >
                            <br>
                        </div>
                        
                        <div class="col-lg-3">
                            <b>Telefono:</b>
                                <input type="tel" name="telefono2" placeholder="Ej. (664) 681-7559 "class="form-control" value="<?php echo $row['telefono2'];?>">
                            <br>
                        </div>
                        
                        <div class="col-lg-3">
                            <b>Nivel de Operación:</b>
                                <select  name="nivel" id="" class="form-control" value="<?php echo $row['nivel'];?>">
                                <option value="2do. nivel">2do. Nivel</option>
                                <option value="3er. Nivel">3er. Nivel</option>  
                            </select>
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Número de Fax:</b>
                                <input type="text" name="fax" placeholder="Ej. (664) 634-2978 " class="form-control" value="<?php echo $row['fax'];?>">
                            <br>
                        </div>

                        <div class="col-lg-3">
                            <b>Horario de Fax:</b>
                                <input type="time" name="horariofax" value="<?php echo $row['horariofax'];?>" max="12:00:00" min="06:00:00" step="1">
                                <input type="time" name="horariofaxf" value="<?php echo $row['horariofaxf'];?>" max="19:00:00" min="12:00:00" step="2">
                            <br>
                        </div>
                        
                        <div class="col-lg-3">
                            <b>Frecuencia de Radio:</b>
                                <input type="text" name="radiotelefonico" placeholder="Ej. 107.7 MHz " class="form-control" value="<?php echo $row['radiotelefonico'];?>">
                            <br>
                        </div><br>                        
                        <div class="col-lg-12">
                            <br>
                            <h3>Tipo de seguro con los que cuenta la Institución o Dependencia:</h3>
                            <br>
                        </div>
                            <br>                              
                            <div class="col-lg-3">
                                <b>ISSSTECALI:</b>
                                <select name="issstecali" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                            </div>
                             <div class="col-lg-3">   
                                <b>ISSSTE:</b>
                                <select name="issste" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                             </div>
                            <div class="col-lg-3">
                                <b>Seguro Popular:</b>
                                <select name="seguropopular" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                                <br>
                            </div>
                            <div class="col-lg-3">
                                <b>IMSS:</b>
                                <select name="imss" id="" class="form-control">
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                            <br>
                           </div>                  
                       
                        <div class="col-lg-12">
                        <input class="form-class" type="submit" value="Actualizar Hospital " class="btn btn-default">
                        </div>
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
