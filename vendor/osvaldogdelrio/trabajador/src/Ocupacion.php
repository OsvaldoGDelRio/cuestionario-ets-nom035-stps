<?php
namespace src;

class Ocupacion
{
    private $_ocupacion;

    public function __construct(string $ocupacion)
    {
        $this->_ocupacion = $this->setOcupacion($ocupacion);
    }

    public function ocupacion(): string
    {
        return $this->_ocupacion;
    }

    private function setOcupacion(string $ocupacion): string
    {
        return $ocupacion;
    }
}