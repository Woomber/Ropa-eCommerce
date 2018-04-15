<?php

class Direccion {
    public $calle;
    public $numInt;
    public $numExt;
    public $colonia;
    public $ciudad;
    public $estado;
    public $cp;

    public function set($calle, $numInt, $numExt, $colonia, $ciudad, $estado, $cp){
        $this->calle = $calle;
        $this->numInt = $numInt;
        $this->numExt = $numExt;
        $this->colonia = $colonia;
        $this->ciudad = $ciudad;
        $this->estado = $estado;
        $this->cp = $cp;

    }
}

?>