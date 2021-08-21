<?php
namespace src;

use src\Edad;

class RangoDeEdad
{
    private string $_rangoDeEdad;

    public function __construct(Edad $Edad)
    {
        $this->_rangoDeEdad = $this->setRangoDeEdad($Edad->edad());
    }

    public function rangoDeEdad(): string
    {
        return $this->_rangoDeEdad;
    }

    private function setRangoDeEdad(int $edad): string
    {
        $rango = '';
        
        if($edad >= 15 && $edad <= 19)
        {
            $rango = "15-19";
        }

        if($edad >= 20 && $edad <= 24)
        {
            $rango = "20-24";
        }

        if($edad >= 25 && $edad <= 29)
        {
            $rango = "25-29";
        }

        if($edad >= 30 && $edad <= 34)
        {
            $rango = "30-34";
        }

        if($edad >= 35 && $edad <= 39)
        {
            $rango = "35-39";
        }

        if($edad >= 40 && $edad <= 44)
        {
            $rango = "40-44";
        }

        if($edad >= 45 && $edad <= 49)
        {
            $rango = "45-49";
        }

        if($edad >= 50 && $edad <= 54)
        {
            $rango = "50-54";
        }

        if($edad >= 55 && $edad <= 59)
        {
            $rango = "55-59";
        }

        if($edad >= 60 && $edad <= 64)
        {
            $rango = "60-64";
        }

        if($edad >= 65 && $edad <= 69)
        {
            $rango = "65-69";
        }

        if($edad >= 70 && $edad <= 99)
        {
            $rango = "70-99";
        }

        return $rango;  
    }
}