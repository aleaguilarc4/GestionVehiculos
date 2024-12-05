<?php
require_once 'Vehiculo.php';
require_once 'Coche.php';
require_once 'Camion.php';
require_once 'Tesla.php';
require_once 'Bicicletas.php';
require_once 'VehiculoElectrico.php';
require_once 'Concesionario.php';


$vehiculo = new Vehiculo("Toyota", "Corolla", "Rojo");
$coche = new Coche("Ford", "Focus", "Azul", 4);
$camion = new Camion("Mercedes", "Actros", "Blanco", 15.5);
$tesla = new Tesla("Tesla", "Model S", "Negro", 4, 80);
$bicicleta = new Bicicleta("Giant", "Escape 3", "Verde");


$concesionario = new Concesionario();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Vehículos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        .vehiculo {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Gestión de Vehículos</h1>

    <div class="vehiculo">
        <h2>Vehículo</h2>
        <p><?php echo $vehiculo->obtenerInformacion(); ?></p>
    </div>

    <div class="vehiculo">
        <h2>Coche</h2>
        <p><?php echo $coche->obtenerInformacion(); ?></p>
        <p><?php $coche->mover(); ?></p>
        <p><?php $coche->detener(); ?></p>
    </div>

    <div class="vehiculo">
        <h2>Camión</h2>
        <p><?php echo $camion->obtenerInformacion(); ?></p>
        <p><?php $camion->mover(); ?></p>
        <p><?php $camion->detener(); ?></p>
    </div>

    <div class="vehiculo">
        <h2>Tesla</h2>
        <p><?php echo $tesla->obtenerInformacion(); ?></p>
        <p><?php echo $tesla->estadoBateria(); ?></p>
        <p><?php $tesla->cargarBateria(); ?></p>
        <p><?php echo $tesla->estadoBateria(); ?></p>
    </div>

    <div class="vehiculo">
        <h2>Bicicleta</h2>
        <p><?php echo $bicicleta->obtenerInformacion(); ?></p>
        <p><?php $bicicleta->pedalear(); ?></p>
    </div>

    <div class="vehiculo">
        <h2>Concesionario</h2>
        <p><?php $concesionario->mostrarVehiculo($coche); ?></p>
        <p><?php $concesionario->mostrarVehiculo($camion); ?></p>
        <p><?php $concesionario->mostrarVehiculo($tesla); ?></p>
        <p><?php $concesionario->mostrarVehiculo($bicicleta); ?></p>
    </div>
</body>
</html>