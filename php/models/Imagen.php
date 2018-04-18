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

    public function getUri(){
        return ("data:" . $this->tipo . ";base64," . base64_encode($this->imagen));
    }
}

?>