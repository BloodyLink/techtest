<?php

require_once('conexion/AleEagleDAO.php');
require_once('dbo/ProductoMarcaTipo.php');
class ProductosDao extends aleEagleDAO{

    public function getCantidadProductos ($nombre = null, $descripcion = null, $tipo = null, $marca = null) {
        try{
            $pdo = $this->getPDO();
            $sql = "SELECT * FROM producto";
    
            $sql .= " WHERE 1 = 1";
    
            if($nombre != null || $nombre != "")
                $sql .= " AND nombre LIKE '%$nombre%'";    
    
            if($descripcion != null || $descripcion != "")
                $sql .= " AND descripcion LIKE '%$descripcion%'";
    
            if($tipo != null || $tipo != "")
                $sql .= " AND tipo_idtipo = $tipo";
    
            if($marca != null || $marca != "")
                $sql .= " AND marca_idmarca = $marca";
            
            $q = $pdo->query($sql);
            
            $cantidad = $q->rowCount();
    
            return $cantidad;

        }catch(Exception $e){
            echo "Problemas al obtener productos" . $e->getMessage();
        }
    }

    public function getProductos($nombre = null, $descripcion = null, $tipo = null, $marca = null, $offset = null, $limit = null){
        try{
            $pdo = $this->getPDO();
            $sql = "SELECT * FROM producto";
    
            $sql .= " WHERE 1 = 1";
    
            if($nombre != null || $nombre != "")
                $sql .= " AND nombre LIKE '%$nombre%'";    
    
            if($descripcion != null || $descripcion != "")
                $sql .= " AND descripcion LIKE '%$descripcion%'";
    
            if($tipo != null || $tipo != "")
                $sql .= " AND tipo_idtipo = $tipo";
    
            if($marca != null || $marca != "")
                $sql .= " AND marca_idmarca = $marca";

            if($limit != null || $limit != ""){
                $sql .= " LIMIT $limit";

                if($offset != null || $offset != "")
                    $sql .= " OFFSET $offset";
            }
                

            
            
            $q = $pdo->query($sql);
    
            $res = $q->fetchAll(PDO::FETCH_CLASS, "Producto");
    
            return $res;
        }catch(Exception $e){
            echo "Problemas al obtener productos" . $e->getMessage();
        }
        
        
    }

    public function getMarcas($id = null, $nombre = null) {

        try{
            $pdo = $this->getPDO();
            $sql = "SELECT * FROM marca";
    
            $sql .= " WHERE 1 = 1";
    
            if($id != null || $id != "")
                $sql .= " OR idmarca = $id";
    
            if($nombre != null || $nombre != "")
                $sql .= " OR nombre LIKE '%$nombre%'"; 
    
            $q = $pdo->query($sql);
            
            $res = $q->fetchAll(PDO::FETCH_CLASS, "Marca");
            
            return $res;
        }catch(Exception $e){
            echo "Problemas al obtener Marcas" . $e->getMessage();
        }

    }

    public function getTipos($id = null, $nombre = null) {

        try{
            $pdo = $this->getPDO();
            $sql = "SELECT * FROM tipo";
    
            $sql .= " WHERE 1 = 1";
    
            if($id != null || $id != "")
                $sql .= " OR idtipo = $id";
    
            if($nombre != null || $nombre != "")
                $sql .= " OR nombre LIKE '%$nombre%'"; 
    
            $q = $pdo->query($sql);
            
            $res = $q->fetchAll(PDO::FETCH_CLASS, "Tipo");
    
            return $res;
        }catch (Exception $e) {
            echo "Problemas al obtener Tipos" . $e->getMessage();
        }

        
    }

    public function insertProducto ($nombre, $descripcion, $tipo, $marca){

        try{
            if($nombre == null || $nombre == "")
                throw new Exception("Nombre no ingresado.");

            if($descripcion == null || $descripcion == "")
                throw new Exception("Descripcion no ingresadA.");

            if($tipo == null || $tipo == "")
                throw new Exception("Tipo no ingresado.");

            if($marca == null || $marca == "")
                throw new Exception("marca no ingresada.");

            $pdo = $this->getPDO();    

            $sql = "INSERT INTO producto(nombre, descripcion, tipo_idtipo, marca_idmarca)
                    VALUES ('$nombre', '$descripcion', $tipo, $marca)";

            if($pdo->query($sql))
                echo "Producto guardado correctamente.";

        } catch (Exception $e){
            echo "Hubo un problema al insertar producto: " . $e->getMessage();
        }

    }

}


