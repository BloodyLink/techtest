<?php

if(isset($_GET["action"]))
    $action = $_GET["action"];

if(isset($_GET["nombre"]))
    $nombre = $_GET["nombre"];

if(isset($_GET["marca"]))
    $marca = $_GET["marca"];

if(isset($_GET["descripcion"]))
    $descripcion = $_GET["descripcion"];

if(isset($_GET["tipo"]))
    $tipo = $_GET["tipo"];

if(isset($_GET["resXPag"]))
    $resultadosPorPagina = $_GET["resXPag"];

require_once('dao\ProductosDao.php');

try{

    $productosDao = new ProductosDao();

    if(isset($action)){
        if($action == "guardar") {
            // echo "guardando... ok!";

            
            
            // foreach($productos as $p){
            //     echo $p->nombre . "<br>";
            // }

        }

        if($action == "buscar"){
            $cantidadProductos = $productosDao->getCantidadProductos($nombre, $descripcion, $tipo, $marca);
            $paginas = ceil($cantidadProductos / $resultadosPorPagina);
            $productos = $productosDao = getProductos($nombre, $descripcion, $tipo, $marca, $offset, $limit);
        }

        if($action == "Marcas"){
            $marcas = $productosDao->getMarcas();

            foreach($marcas as $m){
                echo "<option value='" . $m->idmarca . "'>" . $m->nombre . "</option>";
            }
        }

        if($action == "Tipos"){
            $tipos = $productosDao->getTipos();
            
            foreach($tipos as $t){
                echo "<option value='" . $t->idtipo . "'>" . $t->nombre . "</option>";
            }
        }

        // if($action == "mostrar") {
        //     $productos = $productosDao->getProductos();
        // }

        // print_r($_GET);
    }

}catch(Exception $e){
    echo "Hubo un problema con los datos. Try again.";
}