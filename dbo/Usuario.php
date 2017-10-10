<?php

class Usuario{
    var $idusuario;
    var $nombre;
    var $apellido_paterno;
    var $apellido_materno;
    var $password;
    var $email;
    var $busquedas;
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido_paterno() {
        return $this->apellido_paterno;
    }

    function getApellido_materno() {
        return $this->apellido_materno;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getBusquedas() {
        return $this->busquedas;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido_paterno($apellido_paterno) {
        $this->apellido_paterno = $apellido_paterno;
    }

    function setApellido_materno($apellido_materno) {
        $this->apellido_materno = $apellido_materno;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setBusquedas($busquedas) {
        $this->busquedas = $busquedas;
    }


}