<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once('..\..\config\db.php');
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre, $apellidos, $email, $telefono, $ciudad, $contraseña, $fecha, $cc, $tipo){
            $stament = $this->PDO->prepare("INSERT INTO datas VALUES(null, :NAMES, :SURNAMES, :EMAIL, :PHONE, :CITY, :PASSWORD, :DATE, :CC, :TYPE)");
            $stament->bindParam(":NAMES",$nombre);
            $stament->bindParam(":SURNAMES",$apellidos);
            $stament->bindParam(":EMAIL",$email);
            $stament->bindParam(":PHONE",$telefono);
            $stament->bindParam(":CITY",$ciudad);
            $stament->bindParam(":PASSWORD",$contraseña);
            $stament->bindParam(":DATE",$fecha);
            $stament->bindParam(":CC",$cc);
            $stament->bindParam(":TYPE",$tipo);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ; 
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM username WHERE id = :id limit 1");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM username");
            return ($stament->execute()) ? $stament->fetchAll() : false ;
        }
        public function update($id, $nombre){
            $stament = $this->PDO->prepare("UPDATE username SET nombre = :nombre WHERE id = :id");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
        public function obtenerclave($email){
            $statement = $this->PDO->prepare("SELECT PASSWORD FROM datas WHERE EMAIL = :EMAIL");
            $statement->bindParam(":EMAIL",$email);
            return ($statement->execute()) ? $statement->fetch()['PASSWORD'] : false;
        }
    }

?>