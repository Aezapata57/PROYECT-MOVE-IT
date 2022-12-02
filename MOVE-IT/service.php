<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>

<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
if(isset($_POST["Direccion_origen"])){
  $address = $_POST["Direccion_origen"] ;
  $address = $_POST["Direccion_destino"] ;
  $time = $_POST["Hora"] ;
  $date= $_POST["Dia"] ; 
  $city = $_POST["Tipo_servicio"] ;
  $amount = $_POST["Cantidad"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "db";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO db.data(Direccion_origen, Direccion_destino, Hora, Dia, Tipo_servicio, Cantidad)
                             VALUES ('$address','$address','$time','$date','$city','$amount')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM db.data";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>Direccion_origen</th></h1>";
echo "<th><h1>Direccion_destino</th></h1>";
echo "<th><h1>Hora</th></h1>";
echo "<th><h1>Dia</th></h1>";
echo "<th><h1>Tipo_servicio</th></h1>";
echo "<th><h1>Cantidad</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['Direccion_origen']. "</td></h2>";
    echo "<td><h2>" . $colum['Direccion_destino']. "</td></h2>";
    echo "<td><h2>" . $colum['Hora']. "</td></h2>";
    echo "<td><h2>" . $colum['Dia'] . "</td></h2>";
    echo "<td><h2>" . $colum['Tipo_servicio']. "</td></h2>";
    echo "<td><h2>" . $colum['Cantidad'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="Service.html"> Volver Atrás</a>';

}
?>