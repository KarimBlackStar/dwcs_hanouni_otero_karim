<?php
class Direccion{
    private string $calle;
    private string $ciudad;
    private string $codigoPostal;

    public function __construct(string $calle, string $ciudad, string $codigoPostal){
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->codigoPostal = $codigoPostal;
    }

    public function getCalle(): string{
        return $this->calle;
    }
    public function getCiudad(): string{
        return $this->ciudad;
    }
    public function getCP(): string{
        return $this->codigoPostal;
    }

    public function direccionCompleta():string{
        return "{$this->calle},{$this->ciudad},{$this->codigoPostal}";
    }
}