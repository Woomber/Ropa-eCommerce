<?php

class Tarjeta {
    public $numero;
    public $cvv;
    public $mm;
    public $yy;

    public function set($numero, $cvv, $mm, $yy){
        $this->numero = $numero;
        $this->cvv = $cvv;
        $this->mm = $mm;
        $this->yy = $yy;
    }
}

?>