<?php

include("Imagen.php");

class Producto {
    public $id;
    public $nombre;
    public $descripcion;
    public $precio;
    public $imagen;
    public $marca;

    public function set($id, $nombre, $descripcion, $precio, $marca){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->marca = $marca;
    }

     public function setNew($nombre, $descripcion, $precio, $marca){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->marca = $marca;
    }

    public function setImagen($imagen){
        if(get_class($imagen) == get_class(new Imagen)){
            $this->imagen = $imagen;
            return true;
        }
        return false;
    }

    public function getImagen(){
        return $this->imagen->getUri();
    }
}

?>