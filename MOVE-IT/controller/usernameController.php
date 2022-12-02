<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/MOVE-IT/model/usernameModel.php");
            $this->model = new usernameModel();
        }
        public function guardar($Direccion_origen, $Direccion_destino, $Hora, $Dia, $Tipo_servicio, $Cantidad){
            $id = $this->model->insertar($Direccion_origen, $Direccion_destino, $Hora, $Dia, $Tipo_servicio, $Cantidad);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $Direccion_origen, $Direccion_destino, $Hora, $Dia, $Tipo_servicio, $Cantidad){
            return ($this->model->update($id, $Direccion_origen, $Direccion_destino, $Hora, $Dia, $Tipo_servicio, $Cantidad) != false) ? header("Location:show.php" ): header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>