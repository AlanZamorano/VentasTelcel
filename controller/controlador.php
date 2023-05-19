<?php 
class Controlador{

    static public function page(){
        include "view/plantilla.php";
    }

    static public function linkController(){
        if(isset($_GET['route'])){
            $route = $_GET['route'];
        }
        else{
            $route = "ventas";
        }

        //ubicacion de enlaces
        $response = Pages::linkModel($route);
        include $response;
    }
    // Apartado de promotores
    static public function createPromotor(){
        if(isset($_POST["nombre"])){
            $data = array("nombre" => $_POST['nombre'], "numero" => $_POST['numero']);
            $response = Model::newPromotor($data);
            if($response == true){
                echo '<script> alert("¡Registro creado con exito!") </script>';
                echo '<script> window.location = "index.php?route=promotores"</script>';
            }
        }

    }
    static public function promotores($column, $val){
        $table = "promotor";
        $response = Model::viewPromotor($table, $column, $val);
        return $response;
    }

    // Apartado de marcas
    static public function createMarca(){
        if(isset($_POST["marca"])){
            $data = array("marca" => $_POST['marca']);
            $response = Model::newMarca($data);
            if($response == true){
                echo '<script> alert("¡Registro creado con exito!") </script>';
                // echo '<script> window.location = "index.php?route=promotores"</script>';
            }
        }
    }

    static public function marca($column, $val){
        $table = "marca";
        $response = Model::viewMarca($table, $column, $val);
        return $response;
    }

    // Apartado de celulares
    static public function createCelular(){
        if(isset($_POST["pk_sku"])){
            $data = array("pk_sku" => $_POST['pk_sku'], "fk_marca" => $_POST['fk_marca'], "nombre" => $_POST['nombre'], 
            "fk_color" => $_POST['fk_color'], "telefonia" => $_POST['telefonia']);
            $response = Model::newCelular($data);
            if($response == true){
                echo '<script> alert("¡Registro creado con exito!") </script>';
                echo '<script> window.location = "index.php?route=celulares"</script>';
            }
        }
    }

    static public function celulares($column, $val){
        $table = "celular";
        $response = Model::viewCelular($table, $column, $val);
        return $response;
    }

    // Apartado de colores
    static public function createColor(){
        if(isset($_POST["color"])){
            $data = array("color" => $_POST['color']);
            $response = Model::newColor($data);
            if($response == true){
                echo '<script> alert("¡Registro creado con exito!") </script>';
                // echo '<script> window.location = "index.php?route=promotores"</script>';
            }
        }
    }
    static public function color($column, $val){
        $table = "color";
        $response = Model::viewColor($table, $column, $val);
        return $response;
    }

    // Apartado de ventas
    static public function createVenta(){
        if(isset($_POST["factura"])){
            $data = array("fk_sku" => $_POST['fk_sku'], "fk_promotor" => $_POST['fk_promotor'], "factura" =>$_POST['factura'],
            "imei" => $_POST['imei'], "iccid" => $_POST['iccid'], "recarga" => $_POST['recarga'], "factura_re" => $_POST['factura_re'],
            "fecha" => $_POST['fecha']);            
        $response = Model::newVenta($data);
            if($response == true){
                echo '<script> alert("¡Registro creado con exito!") </script>';
                // echo '<script> window.location = "index.php?route=promotores"</script>';
            }
        }
}
}

?>