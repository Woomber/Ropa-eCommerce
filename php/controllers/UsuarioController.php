<?php
require("Controller.php");
@include("php/models/Usuario.php");
@include("models/Usuario.php");

class UsuarioController extends Controller {
    private $tabla = "clientes";
    private $fields = array(
        "usuario" => "Nombre_Usuario",
        "password"  => "Password",
        "desc" => "descripcion",
        "precio" => "precio",
        "marca" => "marca"
    );

    public function checkLogin($nombre_usuario, $contrasena){
        if(!$this->start()) {
            $this->stop();
            return false;
        }

        $result = $this->query("SELECT Nombre_Usuario FROM clientes 
  WHERE Nombre_Usuario = '".$nombre_usuario."' AND Password ='".$contrasena."'");

        if($result) $this->status = 200;
        else $this->status = 404;

        $this->stop();
        return $result->fetch_array() != false; 
    }

        public function checkExists($nombre_usuario){
        if(!$this->start()) {
            $this->stop();
            return false;
        }

        $result = $this->query("SELECT Nombre_Usuario FROM clientes 
  WHERE Nombre_Usuario = '".$nombre_usuario."'");

        if($result) $this->status = 200;
        else $this->status = 404;

        $this->stop();
        return $result->fetch_array() != false; 
    }


    function sendClientInfo($usr, $pwd, $nombre, $ap, $am, 
        $tel, $email, $rfc, $razon, $tipo){

        if(!$this->start()) {
            $this->stop();
            return false;
        }


  $result = $this->query("INSERT INTO clientes VALUES (" .
    "'". $usr . "', ".
    "'". $nombre . "', ".
    "'". $ap . "', ".
    "'". $am . "', ".
    "'". $tel . "', ".
    "'". $email . "', ".
    "'". $pwd . "', ".
    "'". $rfc . "', ".
    "'". $razon . "', ".
    $tipo . ")");

        if($result) $this->status = 200;
        else $this->status = 404;

        $this->stop();
        return $result != false; 

}

function sendCCInfo($usr, $num, $cvv, $mm, $yy){
    if(!$this->start()) {
            $this->stop();
            return false;
    }

  
  $result = $this->query("INSERT INTO tarjeta VALUES (" .
    "'". $usr . "', ".
    "'". $num . "', ".
    "'". $cvv . "', ".
    "'". $mm . "', ".
    "'". $yy . "')");
 if($result) $this->status = 200;
        else $this->status = 404;

        $this->stop();
        return $result != false; 
}

function sendDireccionInfo($usr, $fact, $calle, $nint, $next,
$colonia, $ciudad, $edo, $cp){
      if(!$this->start()) {
            $this->stop();
            return false;
        }
  
 $result = $this->query("INSERT INTO direcciones VALUES (" .
    "'". $usr . "', ".
    $fact . ", ".
    "'". $calle . "', ".
    "'". $nint . "', ".
    "'". $next . "', ".
    "'". $colonia . "', ".
    "'". $ciudad . "', ".
    "'". $edo . "', ".
    "'". $cp . "')");
 if($result) $this->status = 200;
        else $this->status = 404;

        $this->stop();
        return $result != false; 
}

}

?>