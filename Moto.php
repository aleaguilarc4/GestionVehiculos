<?php
require_once 'Vehiculo.php';

class Moto extends Vehiculo {
    private int $cilindrada;

    public function __construct(string $marca, string $modelo, string $color = "Negro", int $cilindrada) {
        parent::__construct($marca, $modelo, $color);
        $this->cilindrada = $cilindrada;
    }

    public function mover(): void {
        echo "La moto se está moviendo...\n";
    }

    public function detener(): void {
        echo "La moto se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada} cc";
    }
}

<?php
class Moto extends Vehiculo {
    private bool $tieneSidecar;

    public function __construct(string $marca, string $modelo, string $color = "Negro", bool $tieneSidecar = false) {
        parent::__construct($marca, $modelo, $color);
        $this->tieneSidecar = $tieneSidecar;
    }

    public function mover(): void {
        echo "La moto se está moviendo...\n";
    }

    public function detener(): void {
        echo "La moto se ha detenido.\n";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Tiene sidecar: " . ($this->tieneSidecar ? "Sí" : "No");
    }

    // Métodos get
    public function getTieneSidecar(): bool {
        return $this->tieneSidecar;
    }

    // Métodos set
    public function setTieneSidecar(bool $tieneSidecar): void {
        $this->tieneSidecar = $tieneSidecar;
    }
}
?>