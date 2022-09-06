<?php

class conexion{

    public $host = "localhost";
    public $usuario = "root";
    public $contraseña = "";
    public $conexion;

    public function __construct() {

        try {

            $this->conexion = new PDO('mysql:host=localhost;dbname=bgoc', $this->usuario, $this->contraseña);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();

        }

    }

    public function consultar($sql) {

        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }

    public function ejecutar($sql) {

        $consulta = $this->conexion->prepare($sql);
        return $consulta->execute();

    }

}

?>