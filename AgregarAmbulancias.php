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
                        <h1 class="page-header">Agregar Ambulancia</h1>
                    </div>

                    <div class="col-lg-6">
                        <form action="Ambulancia.php">
                            <b>Municipio:</b>
                            <select name="" id="" class="form-control">
                                <option value="">Tijuana</option>
                                <option value="">Tecate</option>
                                <option value="">Ensenada</option>
                                <option value="">Rosarito</option>
                                <option value="">Mexicali</option>
                            </select>
                            <br>

                            <b>Institucion/Dependencia/Asociacion Civil/Empresa Sector Privado</b>
                            <input type="text" class="form-control" placeholder="Ej. Hospital General">
                            <br>

                            <b>Tipo de Ambulancia</b>
                            <select name="" id="" class="form-control">
                                <option value="">Traslado</option>
                                <option value="">Urgencias Basicas</option>
                                <option value="">Urgencias Avanzadas</option>
                                <option value="">Cuidados Intensivos</option>
                                
                            </select>
                            
                            <br>

                            <b>Numero de Verificacion Sanitaria:</b>
                            <input type="text" class="form-control">
                            <br>

                            

                            <b>Numero Economico</b>
                            <input type="text" class="form-control">
                            <br>

                            <b>Marca Ambulancia</b>
                            <input type="text" class="form-control" placeholder="Ej. Ford, Mercedes Benz">
                            <br>

                            <b>Modelo</b>
                            <input type="text" class="form-control" placeholder="Ej. Ecoline">
                            <br>

                            <b>Año</b>
                            <input type="number" class="form-control" placeholder="Ej. 2000">
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
