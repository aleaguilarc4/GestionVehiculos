<?php
class Vehiculo {
    protected string $marca;
    protected string $modelo;
    protected string $color;

    public function __construct(string $marca, string $modelo, string $color = "Negro") {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function __toString(): string {
        return "Vehículo: Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
    }


    public function __get(string $name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        throw new Exception("La propiedad '{$name}' no existe.");
    }


    public function getMarca(): string {
        return $this->marca;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setMarca(string $marca): void {
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
    }
}