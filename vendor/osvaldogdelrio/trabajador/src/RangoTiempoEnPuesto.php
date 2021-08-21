<?php
namespace src;

use Exception;

class RangoTiempoEnPuesto
{
    private string $_rangoTiempoEnPuesto;

    public function __construct(string $rangoTiempoEnPuesto)
    {
        $this->_rangoTiempoEnPuesto = $this->setRangoTiempoEnPuesto($rangoTiempoEnPuesto);
    }

    public function rangoTiempoEnPuesto(): string
    {
        return $this->_rangoTiempoEnPuesto;
    }

    private function setRangoTiempoEnPuesto(string $rangoTiempoEnPuesto): string
    {
        if(
           $rangoTiempoEnPuesto == 'Menos de 6 meses' || 
           $rangoTiempoEnPuesto == 'Entre 6 meses y 1 año' ||
           $rangoTiempoEnPuesto == 'Entre 1 a 4 años' || 
           $rangoTiempoEnPuesto == 'Entre 5 a 9 años' ||
           $rangoTiempoEnPuesto == 'Entre 10 a 14 años' || 
           $rangoTiempoEnPuesto == 'Entre 15 a 19 años' ||
           $rangoTiempoEnPuesto == 'Entre 20 a 24 años' || 
           $rangoTiempoEnPuesto == '25 años o más'
        )
        {
            return $rangoTiempoEnPuesto;
        }

        throw new Exception("Error en Rango de tiempo en puesto", 1);   
    }
}