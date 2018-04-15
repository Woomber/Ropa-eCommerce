<?php

class Imagen {
    public $imagen;
    public $alto;
    public $ancho;
    public $tipo;

    public function set($imagen, $alto, $ancho, $tipo){
        $this->imagen = $imagen;
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->tipo = $tipo;
    }
}

?>