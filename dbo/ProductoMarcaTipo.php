<?php

class Producto {
    
        var $idproducto;
        var $nombre;
        var $marca_idmarca;
        var $descripcion;
        var $tipoIdtipo;
        
        
        function getIdproducto() {
            return $this->idproducto;
        }
    
        function getNombre() {
            return $this->nombre;
        }
    
        function getmarca_idmarca() {
            return $this->marca_idmarca;
        }
    
        function getDescripcion() {
            return $this->descripcion;
        }
    
        function getTipoIdtipo() {
            return $this->tipoIdtipo;
        }
    
        function setIdproducto($idproducto) {
            $this->idproducto = $idproducto;
        }
    
        function setNombre($nombre) {
            $this->nombre = $nombre;
        }
    
        function setmarca_idmarca($marca_idmarca) {
            $this->marca_idmarca = $marca_idmarca;
        }
    
        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
    
        function setTipoIdtipo($tipoIdtipo) {
            $this->tipoIdtipo = $tipoIdtipo;
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