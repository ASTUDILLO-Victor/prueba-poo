<?php
require "../conexion/conn.php";
class Usuario{
    public $ce;
    public $nombre;
    public $apellido;
    function __construct($ce,$nombre,$apellido){
        $this->ce=$ce;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }
    function obtener($conn){
        $ce = $this->ce;
        $nombre = $this->nombre;
        $ape = $this->apellido;

        $sql = "INSERT INTO pru  VALUES ('$ce', '$nombre', '$ape')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../idex.php");
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }
    }
}


    
