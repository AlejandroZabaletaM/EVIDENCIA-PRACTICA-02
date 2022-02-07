<?php

//Herencia
class Carro extends Vehiculo
{
    private $tipodecarro;

    function __construct($marca,$modelo,$año,$color,$precio,$disponibilidad,$tipodecarro)
    {
        parent::__construct($marca,$modelo,$año,$color,$precio,$disponibilidad);
        $this->tipodecarro = $tipodecarro;
    }

    //Polimorfismo
    public function obtenerPropiedad(){
        $propiedadtipocarro = "Tipo de carro: $this->tipodecarro<br>";

        echo parent::obtenerPropiedad();
        echo $propiedadtipocarro;
    }


}


?>