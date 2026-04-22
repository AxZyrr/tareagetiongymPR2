<?php
require_once 'Persona.php';

class Miembro extends Persona{

private $email;
private $estado;

    public function __construct($cedula, $nombres, $telefono, $email,) {
        parent::__construct ($cedula, $nombres, $telefono); 
        $this->email = $email;
        $this->estado = "Activo";
    }

    public function getEmail() { return $this->email; }
    public function getEstado() { return $this->estado; }
    
    // Polimorfismo: Un método que devuelve un resumen del objeto
    public function obtenerResumen() {
        return "Miembro: {$this->nombres} | C.I: {$this->cedula} | Status: {$this->estado}";
    }

}