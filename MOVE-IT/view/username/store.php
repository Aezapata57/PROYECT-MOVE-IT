<?php
    require_once("c://xampp/htdocs/MOVE-IT/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['$Direccion_origen, $Direccion_destino, $Hora, $Dia, $Tipo_servicio, $Cantidad']);   
?>