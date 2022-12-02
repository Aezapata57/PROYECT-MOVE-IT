<?php
    require_once("c://xampp/htdocs/MOVE-IT/controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>