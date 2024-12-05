<?php
require_once 'Vehiculo.php';

class Camion extends Vehiculo {
    private float $capacidadCarga;

    public function __construct(string $marca, string $modelo, string $color = "Negro", float $capacidadCarga) {
        parent::__construct($marca, $modelo, $color);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function mover(): void {
        echo "El camión se está moviendo...\n";
    }

    public function detener(): void {
        echo "El camión se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Capacidad de carga: {$this->capacidadCarga} toneladas";
    }
}

class Camion extends Vehiculo {
    private float $capacidadCarga;

    public function __construct(string $marca, string $modelo, string $color = "Negro", float $capacidadCarga) {
        parent::__construct($marca, $modelo, $color);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function mover(): void {
        echo "El camión se está moviendo...\n";
    }

    public function detener(): void {
        echo "El camión se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Capacidad de carga: {$this->capacidadCarga} toneladas";
    }

    // Métodos get
    public function getCapacidadCarga(): float {
        return $this->capacidadCarga;
    }

    // Métodos set
    public function setCapacidadCarga(float $capacidadCarga): void {
        $this->capacidadCarga = $capacidadCarga;
    }
}