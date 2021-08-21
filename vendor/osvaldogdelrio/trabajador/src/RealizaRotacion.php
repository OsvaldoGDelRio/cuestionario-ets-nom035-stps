<?php
namespace src;

use Exception;

class RealizaRotacion
{
    private $_realizaRotacion;

    public function __construct(string $realizaRotacion)
    {
        $this->_realizaRotacion = $this->setRealizaRotacion($realizaRotacion);
    }

    public function realizaRotacion(): string
    {
        return $this->_realizaRotacion;
    }

    private function setRealizaRotacion(string $realizaRotacion): string
    {
        if($realizaRotacion == 'Sí' || $realizaRotacion == 'No')
        {
            return $realizaRotacion;
        }

        throw new Exception("Error en Realiza Rotación", 1);  
    }
}