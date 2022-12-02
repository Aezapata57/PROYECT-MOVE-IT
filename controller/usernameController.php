<?php
    class usernameController{
        private $model;
        public function __construct(){
            require_once('..\..\model\usernameModel.php');
            $this->model =  new usernameModel();
        }
        public function guardar($nombre, $apellidos, $email, $telefono, $ciudad, $contraseña, $fecha, $cc, $tipo){
            $id = $this->model->insertar($nombre, $apellidos, $email, $telefono, $ciudad, $contraseña, $fecha, $cc, $tipo);
            return($id!=false) ? header("Location:show.php?id=".$id) : header("Location:register.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id,$nombre){
            return($this->model->update($id,$nombre) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }
        public function limpiarcadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function limpiarcorreo($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function verificarusuario($email,$contraseña){
            $keydb = $this->model->obtenerclave($email);
            return (password_verify($contraseña,$keydb)) ? true : false;
        }
    }
?>