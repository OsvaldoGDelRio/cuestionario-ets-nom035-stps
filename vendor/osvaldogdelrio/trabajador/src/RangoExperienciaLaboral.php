<?php
namespace src;

use Exception;

class RangoExperienciaLaboral
{
    private string $_rangoExperienciaLaboral;

    public function __construct(string $rangoExperienciaLaboral)
    {
        $this->_rangoExperienciaLaboral = $this->setRangoExperienciaLaboral($rangoExperienciaLaboral);
    }

    public function rangoExperienciaLaboral(): string
    {
        return $this->_rangoExperienciaLaboral;
    }

    private function setRangoExperienciaLaboral(string $rangoExperienciaLaboral): string
    {
        if(
            $rangoExperienciaLaboral == 'Menos de 6 meses' || 
            $rangoExperienciaLaboral == 'Entre 6 meses y 1 año' ||
            $rangoExperienciaLaboral == 'Entre 1 a 4 años' || 
            $rangoExperienciaLaboral == 'Entre 5 a 9 años' ||
            $rangoExperienciaLaboral == 'Entre 10 a 14 años' || 
            $rangoExperienciaLaboral == 'Entre 15 a 19 años' ||
            $rangoExperienciaLaboral == 'Entre 20 a 24 años' || 
            $rangoExperienciaLaboral == '25 años o más'
        )
        {
            return $rangoExperienciaLaboral;
        }

        throw new Exception("Error en Rango Experiencia Laboral", 1);   
    }
}