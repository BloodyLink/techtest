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

if(isset($_GET["offset"]))
    $offset = $_GET["offset"];

if(isset($_GET["pagina"]))
    $pagina = $_GET["pagina"];

require_once('dao\ProductosDao.php');
require_once('dao\UsuariosDao.php');

session_start();

try{

    $productosDao = new ProductosDao();
    $usuariosDao = new UsuariosDao();

    if(isset($action)){
        if($action == "guardar") {
            $productosDao->insertProducto($nombre, $descripcion, $tipo, $marca);
        }
        
        if($action == "eliminar"){
            $productosDao->eliminarProducto($id);
        }

        if($action == "editar"){
            $productosDao->editProducto($id, $nombre, $descripcion);
        }

        if($action == "buscar"){
            $cantidadProductos = $productosDao->getCantidadProductos($nombre, $descripcion, $tipo, $marca);
            $busquedasDisponibles = $usuariosDao->getBusquedas($_SESSION["id"])->busquedas;

            if($busquedasDisponibles > 0){
                

                if($resultadosPorPagina <= 0){              
                    $resultadosPorPagina = null;
                    $productos = $productosDao->getProductos($nombre, $descripcion, $tipo, $marca, $offset, $resultadosPorPagina);
                    foreach($productos as $p){
                        echo '<a href="detalleProducto.php?id=' . $p->idproducto . '" class="list-group-item">' . $p->nombre . '</a>';
                    }
                
                }else{
                    $paginas = ceil($cantidadProductos / $resultadosPorPagina);
                    $offset = $pagina * $resultadosPorPagina;
                    $productos = $productosDao->getProductos($nombre, $descripcion, $tipo, $marca, $offset, $resultadosPorPagina);
                    
                    foreach($productos as $p){
                        echo '<a href="detalleProducto.php?id=' . $p->idproducto . '" class="list-group-item">' . $p->nombre . '</a>';
                    }


                    echo "<br>";
                    
                    echo "<form id='formPagina'>";
                    echo "<input hidden=hidden name='action' value='buscar' />";
                    echo "<select name='pagina' id='pagina'>";
                    for($i = 1; $i <= $paginas; $i++){
                        echo "<option value='$i'>Pag $i</option>";
                    }

                    echo "</select>";
                    
                }

               
                
                echo "</form>";
                $usuariosDao->updateBusquedas($_SESSION["id"]);
            }else{
                echo "No tienes consultas disponibles.";
            }
            
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

    }

}catch(Exception $e){
    echo "Hubo un problema con los datos. Try again.";
}