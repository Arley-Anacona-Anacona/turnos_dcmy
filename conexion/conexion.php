<?php

class Conexion {
    protected $db;
    private $host = "localhost";
    private $usuario = "root";
    private $contrasena = "1234";
    private $driver = "mysql";
    private $bd = "bd_turnos";
    
    function __construct()
    {	
        try{
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}", $this->usuario, $this->contrasena);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
            echo "conexion exitante";
        }catch (PDOException $e) {
            echo "ha ocurrido un error al conectarse a la base de datos".$e->getMessage();
        }
    }
}
?>
