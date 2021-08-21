<?php
namespace src;

use Exception;

class TipoDePersonal
{
    private string $_tipoDePersonal;

    public function __construct(string $tipoDePersonal)
    {
        $this->_tipoDePersonal = $this->setTipoDePersonal($tipoDePersonal);
    }

    public function tipoDePersonal(): string
    {
        return $this->_tipoDePersonal;
    }

    private function setTipoDePersonal(string $tipoDePersonal): string
    {
        if(
            $tipoDePersonal == 'Sindicalizado' || 
            $tipoDePersonal == 'Confianza' ||
            $tipoDePersonal == 'Ninguno'
        )
        {
            return $tipoDePersonal;
        }

        throw new Exception("Error en Tipo de Personal", 1);  
    }
}