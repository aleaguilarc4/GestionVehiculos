<?php
require_once 'Vehiculo.php';
class Coche extends Vehiculo {
    private int $numeroPuertas;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $numeroPuertas) {
        parent::__construct($marca, $modelo, $color);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function mover(): void {
        echo "El coche se está moviendo...\n";
    }

    public function detener(): void {
        echo "El coche se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Número de puertas: {$this->numeroPuertas}";
    }
}


class Coche extends Vehiculo {
    private int $numeroPuertas;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $numeroPuertas) {
        parent::__construct($marca, $modelo, $color);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function mover(): void {
        echo "El coche se está moviendo...\n";
    }

    public function detener(): void {
        echo "El coche se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Número de puertas: {$this->numeroPuertas}";
    }

    
    public function getNumeroPuertas(): int {
        return $this->numeroPuertas;
    }

   
    public function setNumeroPuertas(int $numeroPuertas): void {
        $this->numeroPuertas = $numeroPuertas;
    }
}