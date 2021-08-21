<?php
namespace src;

use Exception;

class Edad
{
    private $_edad;

    public function __construct(int $edad)
    {
        $this->_edad = $this->setEdad($edad);
    }

    public function edad(): int
    {
        return $this->_edad;
    }

    private function setEdad(int $edad): int
    {
        if($edad > 14 && $edad < 100)
        {
            return $edad;
        }

        throw new Exception("Error en edad", 1);  
    }
}