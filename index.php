<?php

session_start();
if (isset($_SESSION["matricula_global"]))
{

    header("location: direcciones.php");

}

else {
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
    
    <style type="text/css">    
        .img-logo{
            width: 360px;
            height: auto;
            margin-top: 15%;
        }
        
        .panel-heading{
            text-align: center;
        }

        .btn{
            background-color: #EE1C25;
            border-color: #EE1C25;
        }

        .btn:hover{
            background-color: #C31F26;
            border-color: #C31F26;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <img src="Imagenes/coepra1.png" class="img-logo">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">

                        
                        <h3 class="panel-title">Bienvenido</h3>
                    </div>
                    <div class="panel-body">
                        <form action="redireccion.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control"  placeholder="Matricula" name="mat" type="text"  pattern="[a-zA-Z0-9]{0,9}" title="NO PUEDES INGRESAR CARACTERES ESPECIALES, SOLO NUMEROS Y LETRAS"autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="pwd" type="password"  value="" required>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                 <input class="btn btn-lg btn-success btn-block" name="boton" type="submit" value="Ingresar">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

<?php 

}
?>