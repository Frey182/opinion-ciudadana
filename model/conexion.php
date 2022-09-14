<?php

class conexion{

    // declaramos las variables para usarlas en PDO
    // la base de datos está subida en clevercloud
    public $host = "bdo1moijq0exi9zpt4nv-mysql.services.clever-cloud.com";
    public $usuario = "uwurad3fqgwyiryc";
    public $contraseña = "eRMmhhU8Riovr3LMl0Gk";
    public $conexion;

    // creamos el método construct...
    public function __construct() {

        // el cual guarda la conexión en $this->conexion
        try {

            $this->conexion = new PDO("mysql:host=$this->host;dbname=bdo1moijq0exi9zpt4nv", $this->usuario, $this->contraseña);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // en caso de algún error al conectar nos mostrará el siguiente mensaje
        } catch (PDOException $e) {

            print "¡Error!: " . $e->getMessage() . "<br/>"; // mensaje + error($e);
            die();

        }

    }

    // método para realizar consultas tipo select
    public function consultar($sql) {

        $consulta = $this->conexion->prepare($sql);     // preparamos la sentencia o consulta
        $consulta->execute();                           // ejecutamos la consulta
        return $consulta->fetchAll(PDO::FETCH_ASSOC);   // devolvemos el array con los datos consultados

    }

    // métotodo para realizar consultas tipo insert, update, delate
    public function ejecutar($sql) {

        $consulta = $this->conexion->prepare($sql);     // preparamos la sentencia o consulta
        return $consulta->execute();                    // ejecutamos la consulta

    }

}

?>