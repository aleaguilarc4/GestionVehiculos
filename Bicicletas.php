<?php

require_once 'Vehiculo.php';

final class Bicicleta extends Vehiculo {
    

    public function __construct(string $marca, string $modelo, string $color = "Negro", string $tipo = "Urbana") {
        parent::__construct($marca, $modelo, $color);
        
    }

    public function pedalear(): void {
        echo "La bicicleta está pedaleando...\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion();
    }

 
    
}
?>