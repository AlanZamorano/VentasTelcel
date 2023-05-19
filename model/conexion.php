<?php 
class Conexion{
    static public function conectar(){
        
        $db = NEW PDO("mysql:host=localhost;dbname=db_ventas", "root", "");
        return $db;
    }
}
?>