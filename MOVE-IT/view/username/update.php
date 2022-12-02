<?php
    require_once("c://xampp/htdocs/MOVE-IT/controller/usernameController.php");
    $obj = new usernameController();
    $obj->update($_POST['id'], $_POST['Direccion_origen'], $_POST['Direccion_destino'], $_POST['Hora'], $_POST['Dia'], $_POST['Tipo_servicio'], $_POST['Cantidad']);

?>