<?php

require_once('conexion/AleEagleDAO.php');
require_once('dbo/Usuario.php');
class UsuariosDao extends AleEagleDAO{

    public function registrarUsuario($nombre, $aPaterno, $aMaterno, $email, $password){

        try{
            $pdo = $this->getPDO();
            
            $sql = "INSERT INTO usuario 
            (nombre, apellido_paterno, apellido_materno, password, email, busquedas)
            VALUES ('$nombre', '$aPaterno', '$aMaterno', '$password', '$email', 5)";

            if($pdo->query($sql)){
                echo "Usuario registrado correctamente";
            }

        }catch(Exception $e){
            echo "Hubo un problema al registrar usuario:" . $e->getMessage();
        }

    }

    public function getUsuario($email, $password){
        try{
            $pdo = $this->getPDO();

            $sql = "SELECT * FROM usuario WHERE email = '$email' AND password = '$password'";

            $q = $pdo->query($sql);

            $res = $q->fetchAll(PDO::FETCH_CLASS, "Usuario");
            
           
            return $res[0];

        }catch (Exception $e) {
            echo "Hubo un problema al obtener datos de usuario:" . $e->getMessage();
        }
    }

    public function getBusquedas($idUsuario){
        try{
            $pdo = $this->getPDO();

            $sql = "SELECT busquedas FROM usuario WHERE idusuario = '$idUsuario'";

            $q = $pdo->query($sql);

            $res = $q->fetchAll(PDO::FETCH_CLASS, "Usuario");
            
           
            return $res[0];

        }catch (Exception $e) {
            echo "Hubo un problema al obtener datos de usuario:" . $e->getMessage();
        }
    }

    public function updateBusquedas($userId){
        try{
            $pdo = $this->getPDO();

            $busquedas = $this->getBusquedas($userId)->busquedas;

            $busquedas--;

            $sql = "UPDATE usuario SET busquedas = $busquedas";

            if($pdo->query($sql)){
                echo "Te quedan $busquedas consultas.";
            }


        }catch (Exception $e) {
            echo "Hubo un problema al obtener datos de usuario:" . $e->getMessage();
        }
    }

}