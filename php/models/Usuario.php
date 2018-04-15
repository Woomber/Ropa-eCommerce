<?php

include("Tarjeta.php");
include("Direccion.php");

class Usuario {
    public $usuario;
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $telefono;
    public $email;
    public $rfc;
    public $razon;
    public $tipo;

    public $tarjeta;
    public $direcciones;

    public function __construct(){
        $direcciones = array();
    }

    public function set($usuario, $nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $email, $rfc, $razon, $tipo){
        $this->$usuario = $usuario;
        $this->$nombre = $nombre;
        $this->$apellidoPaterno = $apellidoPaterno;
        $this->$apellidoMaterno = $apellidoMaterno;
        $this->$telefono = $telefono;
        $this->$email = $email;
        $this->$rfc = $rfc;
        $this->$razon = $razon;
        $this->$tipo = $tipo;
    }

    public function setTarjeta($tarjeta){
          if(get_class($tarjeta) == get_class(new Tarjeta)){
            $this->tarjeta = $tarjeta;
            return true;
        }
        return false;
    }

    public function addDireccion($direccion){
          if(get_class($direccion) == get_class(new Direccion)){
            $this->direcciones[] = $direccion;
            return true;
        }
        return false;
    }
}

?>