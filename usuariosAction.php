<?php

if(isset($_GET["action"]))
    $action = $_GET["action"];

if(isset($_GET["nombre"]))
    $nombre = $_GET["nombre"];

if(isset($_GET["apellidoP"]))
    $apellidoP = $_GET["apellidoP"];

if(isset($_GET["apellidoM"]))
    $apellidoM = $_GET["apellidoM"];

if(isset($_GET["email"]))
    $email = $_GET["email"];

if(isset($_GET["password"]))
    $password = md5($_GET["password"]);

require_once('dao\UsuariosDao.php');

try{
    
        $usuariosDao = new UsuariosDao();
    
        if(isset($action)){
            
            if($action == "registrar"){
                $usuariosDao->registrarUsuario($nombre, $apellidoP, $apellidoM, $email, $password);
            }

            if($action == "ingresar"){
                $usuario = $usuariosDao->getUsuario($email, $password);

                //iniciamos sesion

                if($usuario){
                    session_start();
                    $_SESSION["id"] = $usuario->idusuario;
                    $_SESSION["nombre"] = $usuario->nombre;
                    $_SESSION["apellido_paterno"] = $usuario->apellido_paterno;
                    $_SESSION["apellido_materno"] = $usuario->apellido_materno;
                    $_SESSION["email"] = $usuario->email;
                    $_SESSION["busquedas"] = $usuario->busquedas;
                    echo "Sesion iniciada. Welcome " . $usuario->nombre . "!";
                }else{
                    echo "No se encuentra usuario para el email " . $email . ".";
                }
            }
        }
    
    }catch(Exception $e){
        echo "Hubo un problema con los datos. Try again.";
    }