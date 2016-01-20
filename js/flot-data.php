<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "demo_json";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM datos";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{ 
    $nombre=$row['nombre'];
    $cantidad=$row['cantidad'];
    
    
    $clientes[] = array( 'label'=> $nombre, 'data'=> $cantidad);

}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  

//Creamos el JSON
//$clientes['clientes'] = $clientes;
$json_string = json_encode($clientes);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'clientes.json';
file_put_contents($file, $json_string);
*/
    

?>

<script type="text/javascript">

//Flot Pie Chart
$(function() {

    var data = [{
        label: "DATO 0",
        data: 19
    }, {
        label: "DATO 1",
        data: 3
    }, {
        label: "DATO 2",
        data: 91
    }, {
        label: "DATO 3",
        data: 210
    }];
    
    var plotObj = $.plot($("#flot-pie-chart"), data, {
        series: {
            pie: {
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });

});



</script>