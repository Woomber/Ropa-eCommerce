<?php

include("Producto.php");

class Categoria {
    public $id;
    public $nombre;
    public $productos;

    public function __construct(){
        $productos = array();
    }

    public function set($id, $nombre){
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function addProducto($producto){
        if(get_class($producto) == get_class(new Producto)){
            $this->productos[] = $producto;
            return true;
        }
        return false;
    }

}

?>