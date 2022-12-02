<?php
    require_once('..\..\controller\usernameController.php');
    $obj = new usernameController();
    $obj->guardar($_POST['NAMES'],$_POST['SURNAMES'],$_POST['EMAIL'],$_POST['PHONE'],$_POST['CITY'],$_POST['PASSWORD'],$_POST['DATE'],$_POST['CC'],$_POST['TYPE']);
?>