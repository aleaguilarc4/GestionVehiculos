<?php
require_once 'Vehiculo.php';
require_once 'VehiculoElectrico.php';

class Tesla extends Coche implements VehiculoElectrico {
    private int $nivelBateria;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $numeroPuertas, int $nivelBateria = 100) {
        parent::__construct($marca, $modelo, $color, $numeroPuertas);
        $this->nivelBateria = $nivelBateria;
    }

    public function cargarBateria(): void {
        $this->nivelBateria = 100; 
        echo "La batería ha sido cargada al 100%.\n";
    }

    public function estadoBateria(): string {
        return "Nivel de batería: {$this->nivelBateria}%";
    }


}

