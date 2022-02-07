<?php

//Herencia
class Moto extends Vehiculo
{
    private $tipodemoto;

    function __construct($marca,$modelo,$año,$color,$precio,$disponibilidad,$tipodemoto)
    {
        parent::__construct($marca,$modelo,$año,$color,$precio,$disponibilidad);
        $this->tipodemoto = $tipodemoto;
    }

    //Poimorfismo
    public function obtenerPropiedad(){
        $propiedadtipomoto = "Tipo de moto: $this->tipodemoto<br>";

        echo parent::obtenerPropiedad();
        echo $propiedadtipomoto;
    }


}


?>