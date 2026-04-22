<?php
class Persona{

    protected $cedula;
    protected $nombres;
    protected $telefono;

    public function __construct($cedula, $nombres, $telefono) {
        $this->cedula = $cedula;
        $this->nombres = $nombres;
        $this->telefono = $telefono;
    }

    public function getCedula() { return $this->cedula; }
    public function getNombres() { return $this->nombres; }
    public function getTelefono() { return $this->telefono; }
}

