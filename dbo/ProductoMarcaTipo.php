<?php

class Producto {
    
        var $idproducto;
        var $nombre;
        var $marca_idmarca;
        var $descripcion;
        var $tipo_idtipo;
        var $marcaNombre;
        var $tipoNombre;
        
        function getIdproducto() {
            return $this->idproducto;
        }
    
        function getNombre() {
            return $this->nombre;
        }
    
        function getMarca_idmarca() {
            return $this->marca_idmarca;
        }
    
        function getDescripcion() {
            return $this->descripcion;
        }
    
        function getTipo_idtipo() {
            return $this->tipo_idtipo;
        }
    
        function getMarcaNombre() {
            return $this->marcaNombre;
        }
    
        function getTipoNombre() {
            return $this->tipoNombre;
        }
    
        function setIdproducto($idproducto) {
            $this->idproducto = $idproducto;
        }
    
        function setNombre($nombre) {
            $this->nombre = $nombre;
        }
    
        function setMarca_idmarca($marca_idmarca) {
            $this->marca_idmarca = $marca_idmarca;
        }
    
        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
    
        function setTipo_idtipo($tipo_idtipo) {
            $this->tipo_idtipo = $tipo_idtipo;
        }
    
        function setMarcaNombre($marcaNombre) {
            $this->marcaNombre = $marcaNombre;
        }
    
        function setTipoNombre($tipoNombre) {
            $this->tipoNombre = $tipoNombre;
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