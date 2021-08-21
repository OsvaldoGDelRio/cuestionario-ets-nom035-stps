<?php
namespace src;

use Exception;

class NivelDeEstudios
{
    private string $_nivelDeEstudios;

    public function __construct(string $nivelDeEstudios)
    {
        $this->_nivelDeEstudios = $this->setNivelDeEstudios($nivelDeEstudios);
    }

    public function nivelDeEstudios(): string
    {
        return $this->_nivelDeEstudios;
    }

    private function setNivelDeEstudios(string $nivelDeEstudios): string
    {
        if(
            $nivelDeEstudios == 'Sin información' || 
            $nivelDeEstudios == 'Primaria' ||
            $nivelDeEstudios == 'Secundaria' || 
            $nivelDeEstudios == 'Bachillerato' ||
            $nivelDeEstudios == 'Técnico superior' ||
            $nivelDeEstudios == 'Licenciatura' ||
            $nivelDeEstudios == 'Maestría' ||
            $nivelDeEstudios == 'Doctorado'
        )
        {
            return $nivelDeEstudios;
        }

        throw new Exception("Error en Nivel de Estudios", 1);  
    }
}