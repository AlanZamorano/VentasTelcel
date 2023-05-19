<?php 
class Pages{
    //funcion para ubicaciones
    static public function linkModel($route){
        if($route == "create-ventas"){
            $module = "view/modules/crearVentas.php";
        }
        else if($route == "create-promotor"){
            $module = "view/modules/crearPromotor.php";
        }
        else if($route == "controlador"){
            $module = "controller/controlador.php";
        }
        else if($route == "create-celulares"){
            $module = "view/modules/crearCelulares.php";
        }
        else if($route == "celulares"){
            $module = "view/modules/celulares.php";
        }
        else if($route == "promotores"){
            $module = "view/modules/promotores.php";
        }
        else if($route == "ventas"){
            $module = "view/modules/ventas.php";
        }
        else if($route == "marcas"){
            $module = "view/modules/marcas.php";
        }
        else if($route == "create-marca"){
            $module = "view/modules/crearMarca.php";
        }
        else if($route == "create-color"){
            $module = "view/modules/crearColor.php";
        }
        else{
            echo 'ruta desconocida';
        }
        return $module;
    }
}
?>