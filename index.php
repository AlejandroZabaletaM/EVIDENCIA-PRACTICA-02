<?php
require "Vehiculo.php";
require "Moto.php";
require "Carro.php";

$vehiculo1 = new Vehiculo(
    "Nissan",
    "Versa",
    "2021",
    "Azul",
    "$286,500 MXN",
    false
);

$vehiculo2 = new Carro(
    "Volkswagen",
    "Vento",
    "2022",
    "Gris",
    "$250,000 MXN",
    true,
    "Sedan"
);

$vehiculo3 = new Moto(
    "Italika",
    "D150",
    "2022",
    "Gris",
    "$25,999 MXN",
    true,
    "Cross"
);

echo $vehiculo1->obtenerPropiedad();
echo $vehiculo2->obtenerPropiedad();
echo $vehiculo3->obtenerPropiedad();

?>