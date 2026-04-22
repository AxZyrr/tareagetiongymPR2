<?php
class Plan extends Miembro{

    protected $duracion_meses;
    protected $precio;

    public function __construct($id, $nombres, $estado, $duracion_meses, $precio) {
        parent::__construct ($id, $nombres, $estado);
        $this->duracion_meses = $duracion_meses;
        $this->precio = $precio;
    }

    public function mostrarRecibo(){
        
    }

}