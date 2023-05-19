<?php 
require_once "conexion.php";
class Model extends Conexion{

    // Apartado de promotores
    // Crear promotor
    static public function newPromotor($data){
        $pdo = Conexion::conectar()->prepare("INSERT INTO promotor (nombre, numero) VALUES(:nombre, :numero)");
        $pdo -> bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":numero", $data["numero"], PDO::PARAM_STR);
        
        if($pdo -> execute()){
            return true;
        }
        $pdo -> close();
        $pdo = null;
    }
    // Consultar tabla de promotor
    static public function viewPromotor($table, $column, $val){
        if($column != null){
            $pdo = Conexion::conectar()->prepare("SELECT * FROM $table WHERE $column = :$column");
            $pdo -> bindParam(":".$column, $val, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }
        else{
            $pdo = Conexion::conectar()->prepare("SELECT * FROM $table");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }
        $pdo -> close();
        $pdo = null;
    }

    // Apartado de celulares
    // Crear celular
    static public function newCelular($data){
        $pdo = Conexion::conectar()->prepare("INSERT INTO celular (pk_sku, fk_marca, nombre, fk_color, telefonia) 
        VALUES(:pk_sku, :fk_marca, :nombre, :fk_color, :telefonia)");
        $pdo -> bindParam(":pk_sku", $data["pk_sku"], PDO::PARAM_STR);
        $pdo -> bindParam(":fk_marca", $data["fk_marca"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $data["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":fk_color", $data["fk_color"], PDO::PARAM_STR);
        $pdo -> bindParam(":telefonia", $data["telefonia"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return true;
        }
        $pdo -> close();
        $pdo = null;
    }
    // Ver consulta de celulares
        static public function viewCelular($table, $column, $val){
            if($column != null){
                $pdo = Conexion::conectar()->prepare("SELECT * FROM $table WHERE $column = :$column");
                $pdo -> bindParam(":".$column, $val, PDO::PARAM_STR);
                $pdo -> execute();
                return $pdo -> fetch();
            }
            else{
                $pdo  = Conexion::conectar()->prepare("SELECT * FROM $table");
                $pdo -> execute();
                return $pdo -> fetchAll();
            }
        $pdo -> close();
        $pdo = null;
    }

    // Apartado de colores
    // Crear color
    static public function newColor($data){
        $pdo = Conexion::conectar()->prepare("INSERT INTO color (color) VALUES(:color)");
        $pdo -> bindParam(":color", $data["color"], PDO::PARAM_STR);
        
        if($pdo -> execute()){
            return true;
        }
        $pdo -> close();
        $pdo = null;
    }
    // Ver colores
    static public function viewColor($table, $column, $val){
        if($column != null){
            $pdo = Conexion::conectar()->prepare("SELECT * FROM $table WHERE $column = :$column");
            $pdo -> bindParam(":".$column, $val, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }
        else{
            $pdo  = Conexion::conectar()->prepare("SELECT * FROM $table");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }
        $pdo -> close();
        $pdo = null;
    }

    //Apartado de marcas
    // Crear marca
    static public function newMarca($data){
        $pdo = Conexion::conectar()->prepare("INSERT INTO marca (marca) VALUES(:marca)");
        $pdo -> bindParam(":marca", $data["marca"], PDO::PARAM_STR);
        
        if($pdo -> execute()){
            return true;
        }
        $pdo -> close();
        $pdo = null;
    }
    // Ver marcas
    static public function viewMarca($table, $column, $val){
        if($column != null){
            $pdo = Conexion::conectar()->prepare("SELECT * FROM $table WHERE $column = :$column");
            $pdo -> bindParam(":".$column, $val, PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
        }
        else{
            $pdo  = Conexion::conectar()->prepare("SELECT * FROM $table");
            $pdo -> execute();
            return $pdo -> fetchAll();
        }
        $pdo -> close();
        $pdo = null;
    }

    // Apartado de ventas
    // Crear venta
    static public function newVenta($data){
        $pdo = Conexion::conectar()->prepare("INSERT INTO venta (fk_sku, fk_promotor, factura, imei, iccid, recarga, factura_re, fecha) 
        VALUES(:fk_sku, :fk_promotor, :factura, :imei, :iccid, :recarga, :factura_re, :fecha)");
        $pdo -> bindParam(":fk_sku", $data["fk_sku"], PDO::PARAM_STR);
        $pdo -> bindParam(":fk_promotor", $data["fk_promotor"], PDO::PARAM_STR);
        $pdo -> bindParam(":factura", $data["factura"], PDO::PARAM_STR);
        $pdo -> bindParam(":imei", $data["imei"], PDO::PARAM_STR);
        $pdo -> bindParam(":iccid", $data["iccid"], PDO::PARAM_STR);
        $pdo -> bindParam(":recarga", $data["recarga"], PDO::PARAM_STR);
        $pdo -> bindParam(":factura_re", $data["factura_re"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha", $data["fecha"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return true;
        }
        $pdo -> close();
        $pdo = null;
    }
}
?>