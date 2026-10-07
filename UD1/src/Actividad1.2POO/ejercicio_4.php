<?php

class Estudiante extends Persona{
    private string $grado;
    

    public function __construct(string $nombre, int $edad, string $grado){
        return parent::__construct($nombre, $edad);
        $this->grado=$grado;
    }

    public function getGrado() : string {
        return $this->grado;
    }

    public function setGrado(string $grado) : Estudiante{
        $this -> grado = $grado;
        return $this;        
    }

    public function mostrarInformacion() : string{
        return "Nombre:" . $this->getNombre() .
        ", Edad: " . $this->getEdad() . 
        ", Grado: " . $this->getGrado();        
    }
}