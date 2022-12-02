<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/MOVE-IT/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($Direccion_origen, $Direccion_destino, $Hora, $Dia, $Tipo_servicio, $Cantidad){
            $stament = $this->PDO->prepare("UPDATE data SET Direccion_origen = :Direccion_origen WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Direccion_destino = :Direccion_destino WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Hora = :Hora WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Dia = :Dia WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Tipo_servicio = :Tipo_servicio WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Cantidad = :Cantidad WHERE id = :id");

            $stament->bindParam(":Direccion_origen",$Direccion_origen);
            $stament->bindParam(":Direccion_destino",$Direccion_destino);
            $stament->bindParam(":Hora",$Hora);
            $stament->bindParam(":Dia",$Dia);
            $stament->bindParam(":Tipo_servicio",$Tipo_servicio);
            $stament->bindParam(":Cantidad",$Cantidad);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM data where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM data");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$Direccion_origen, $Direccion_destino, $Hora, $Dia, $Tipo_servicio, $Cantidad){
            
            $stament = $this->PDO->prepare("UPDATE data SET Direccion_origen = :Direccion_origen WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Direccion_destino = :Direccion_destino WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Hora = :Hora WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Dia = :Dia WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Tipo_servicio = :Tipo_servicio WHERE id = :id");
            $stament = $this->PDO->prepare("UPDATE data SET Cantidad = :Cantidad WHERE id = :id");
            $stament->bindParam(":Direccion_origen",$Direccion_origen);
            $stament->bindParam(":Direccion_destino",$Direccion_destino);
            $stament->bindParam(":Hora",$Hora);
            $stament->bindParam(":Dia",$Dia);
            $stament->bindParam(":Tipo_servicio",$Tipo_servicio);
            $stament->bindParam(":Cantidad",$Cantidad);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM data WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>