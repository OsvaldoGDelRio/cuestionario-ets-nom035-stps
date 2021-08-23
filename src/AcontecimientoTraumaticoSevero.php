<?php
namespace src;

use Exception;

class AcontecimientoTraumaticoSevero
{
    private $_pregunta1;
    private $_pregunta2;
    private $_pregunta3;
    private $_pregunta4;
    private $_pregunta5;
    private $_pregunta6;

    public function __construct
    (
        string $pregunta1,
        string $pregunta2,
        string $pregunta3,
        string $pregunta4,
        string $pregunta5,
        string $pregunta6
    )
    {
        $this->_pregunta1 = $this->setPregunta($pregunta1);
        $this->_pregunta2 = $this->setPregunta($pregunta2);
        $this->_pregunta3 = $this->setPregunta($pregunta3);
        $this->_pregunta4 = $this->setPregunta($pregunta4);
        $this->_pregunta5 = $this->setPregunta($pregunta5);
        $this->_pregunta6 = $this->setPregunta($pregunta6);
    }

    public function pregunta1(): string
    {
        return $this->_pregunta1;
    }

    public function pregunta2(): string
    {
        return $this->_pregunta2;
    }

    public function pregunta3(): string
    {
        return $this->_pregunta3;
    }

    public function pregunta4(): string
    {
        return $this->_pregunta4;
    }

    public function pregunta5(): string
    {
        return $this->_pregunta5;
    }

    public function pregunta6(): string
    {
        return $this->_pregunta6;
    }

    private function setPregunta(string $respuesta): string
    {
        if($this->verificarRespuesta($respuesta))
        {
            return $respuesta;
        }

        throw new Exception("Error procesando respuesta", 1);
        
    }

    private function verificarRespuesta(string $respuesta): bool
    {
        if($respuesta == 'Sí' || $respuesta == 'No')
        {
            return true;
        }

        return false;
    }
}