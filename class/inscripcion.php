<?php
require 'database.php';
use Class\Database;
class Inscripcion{
    public $database;
    public $conexion;
    public function connect(){
        $this->database = new Database();
        $this->conexion = $this->database->getConexion();
        return $this->conexion;
    }
    public function read(){
        $query = 'select count(*) as numero from inscripcionp';
        $this->response = $this->connect()->prepare($query);
        $this->response->execute();
        $fila = $this->response->fetch(PDO::FETCH_ASSOC);
        $this->response = null;
        echo json_encode($fila);     
    }
    public function show($dni){
        $query = "select count(*) as numero from inscripcionp where dniPersona ='$dni'";
        $this->response = $this->connect()->prepare($query);
        $this->response->execute();
        $fila = $this->response->fetch(PDO::FETCH_ASSOC);
        $this->response = null;
        return $fila['numero']>0;
    }
}