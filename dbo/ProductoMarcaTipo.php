<?php

class Producto{
    
        var $nombre;
        var $marca;
        var $descripcion;
        var $tipo;
    
        function getNombre() {
            return $this->nombre;
        }
    
        function getMarca() {
            return $this->marca;
        }
    
        function getDescripcion() {
            return $this->descripcion;
        }
    
        function getTipo() {
            return $this->tipo;
        }
    
        function setNombre($nombre) {
            $this->nombre = $nombre;
        }
    
        function setMarca($marca) {
            $this->marca = $marca;
        }
    
        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
    
        function setTipo($tipo) {
            $this->tipo = $tipo;
        }
    
}

class Marca {
    
    var $idmarca;
    var $nombre;
    
    function getIdmarca() {
        return $this->idmarca;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdmarca($idmarca) {
        $this->idmarca = $idmarca;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}

class Tipo {

    var $idtipo;
    var $nombre;
    
    function getIdtipo() {
        return $this->idtipo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdtipo($idtipo) {
        $this->idtipo = $idtipo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}