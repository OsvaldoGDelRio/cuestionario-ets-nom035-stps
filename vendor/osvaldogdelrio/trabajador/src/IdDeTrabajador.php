<?php
namespace src;

use Exception;

class IdDeTrabajador
{
    private string $_idDeTrabajador;

    public function __construct(string $idDeTrabajador)
    {
        $this->_idDeTrabajador = $this->setIdDeTrabajador($idDeTrabajador);
    }

    public function idDeTrabajador(): string
    {
        return $this->_idDeTrabajador;
    }

    private function setIdDeTrabajador(string $idDeTrabajador): string
    {
        if(strlen($idDeTrabajador) >= 1)
        {
            return $idDeTrabajador;
        }
        
        throw new Exception("Error en ID de Trabajador", 1);
        
    }
}