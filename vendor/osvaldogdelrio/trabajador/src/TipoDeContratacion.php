<?php
namespace src;

use Exception;

class TipoDeContratacion
{
    private string $_tipoDeContratacion;

    public function __construct(string $tipoDeConsentratacion)
    {
        $this->_tipoDeContratacion = $this->setTipoDeContratacion($tipoDeConsentratacion);
    }

    public function tipoDeContratacion(): string
    {
        return $this->_tipoDeContratacion;
    }

    private function setTipoDeContratacion(string $tipoDeConsentratacion): string
    {
        if(
            $tipoDeConsentratacion == 'Por obra o proyecto' || 
            $tipoDeConsentratacion == 'Por tiempo determinado (temporal)' ||
            $tipoDeConsentratacion == 'Tiempo indeterminado' || 
            $tipoDeConsentratacion == 'Honorarios'
        )
        {
            return $tipoDeConsentratacion;
        }

        throw new Exception("Error en Tipo de Contratación", 1);  
    }
}