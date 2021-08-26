<?php
namespace src;

use Exception;
use src\AcontecimientoTraumaticoSevero;

class EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento
{
    private $_acontecimientoTraumaticoSevero;
    private $_pregunta9;
    private $_pregunta10;
    private $_pregunta11;
    private $_pregunta12;
    private $_pregunta13;
    private $_pregunta14;
    private $_pregunta15;

    public function __construct
    (
        AcontecimientoTraumaticoSevero $AcontecimientoTraumaticoSevero,
        string $pregunta9,
        string $pregunta10,
        string $pregunta11,
        string $pregunta12,
        string $pregunta13,
        string $pregunta14,
        string $pregunta15
    )
    {
        $this->_acontecimientoTraumaticoSevero = $AcontecimientoTraumaticoSevero;
        $this->_pregunta9 = $this->setPregunta($pregunta9);
        $this->_pregunta10 = $this->setPregunta($pregunta10);
        $this->_pregunta11 = $this->setPregunta($pregunta11);
        $this->_pregunta12 = $this->setPregunta($pregunta12);
        $this->_pregunta13 = $this->setPregunta($pregunta13);
        $this->_pregunta14 = $this->setPregunta($pregunta14);
        $this->_pregunta15 = $this->setPregunta($pregunta15);
    }

    public function pregunta9(): string
    {
        return $this->_pregunta9;
    }

    public function pregunta10(): string
    {
        return $this->_pregunta10;
    }

    public function pregunta11(): string
    {
        return $this->_pregunta11;
    }

    public function pregunta12(): string
    {
        return $this->_pregunta12;
    }

    public function pregunta13(): string
    {
        return $this->_pregunta13;
    }

    public function pregunta14(): string
    {
        return $this->_pregunta14;
    }

    public function pregunta15(): string
    {
        return $this->_pregunta15;
    }

    private function setPregunta(string $respuesta): string
    {
        if($this->existeRespuestaPositivaEnETS())
        {
            if($this->verificarRespuesta($respuesta))
            {
                return $respuesta;
            }
        }
        else
        {
            return 'No';
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

    /*
    Prevenir que si en la primer sección del cuestionario de ATS se responde con No a todo se pueda almacenar un sí en otros 
    */
    private function existeRespuestaPositivaEnETS(): bool
    {
        $respuestasETS = array(
            'pregunta1',
            'pregunta2',
            'pregunta3',
            'pregunta4',
            'pregunta5',
            'pregunta6'
        );
        
        foreach($respuestasETS as $respuesta)
        {
            if($this->_acontecimientoTraumaticoSevero->{$respuesta}() == 'Sí')
            {
                return true;
            }
        }
        
        return false;
    }
}