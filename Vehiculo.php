<?php
//Abstracción
class Vehiculo {
    //Encapsulamiento con las variables privadas para que no sean modificadas fuera de la clase.
    private $marca;
    private $modelo;
    private $año;
    private $color;
    private $precio;
    private $disponibilidad=false;

    function __construct($marca,$modelo,$año,$color,$precio,$disponibilidad)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->color = $color;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
    }

    public function obtenerPropiedad()
    {
        $Propiedad = "<br>{$this->marca}  modelo <b>{$this->modelo}</b> del año {$this->año} <br>
                    Color: {$this->color}<br>
                    Precio: {$this->precio}<br>";

                    if($this->disponibilidad >0){
                        $Propiedad .= "Disponible en esta agencia<br>";
                    }else{
                        $Propiedad .= "No esta disponible en esta agencia<br>";
                    }
        return $Propiedad;
    }
}

?>