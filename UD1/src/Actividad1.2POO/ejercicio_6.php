<?php
class Profesor extends Persona{
    private string $especialidad;


    public function __construct(string $nombre, int $edad, string $especialidad){
        parent::__construct($nombre, $edad);
        $this->especialidad=$especialidad;
    }

    public function getEspecialidad():string{
        return $this->especialidad;
    }

    public function setEspecialidad(string $especialidad):Profesor{
        $this->especialidad=$especialidad;
        return $this;
    }
    public function mostrarInformacion():string{
        return "Profesor: " . $this->getNombre() . 
        ", Edad: " . $this->getEdad() . 
        ", Especialidad: " . $this->especialidad;
    }
}
