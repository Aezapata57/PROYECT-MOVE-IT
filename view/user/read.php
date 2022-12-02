<?php
    require_once("../../controller/usernameController.php");
    session_start();
    $obj = new usernameController();
    $email = $obj->limpiarcorreo($_POST['EMAIL']);
    $contraseña = $obj->limpiarcadena($_POST['PASSWORD']);
    $bandera = $obj->verificarusuario($email,$contraseña);
    if($bandera){
        $_SESSION['usuario'] = $email;
        header("Location:panel_control.php");
    }else{
        $error = "<li>Las claves son incorrectas</li>";
        header("Location:login.php?error=".$error);
    }
?>