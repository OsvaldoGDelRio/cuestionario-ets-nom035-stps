<?php
namespace src;

use Exception;
use src\AcontecimientoTraumaticoSevero;

class Afectacion
{
    private $_acontecimientoTraumaticoSevero;
    private $_pregunta1;
    private $_pregunta2;
    private $_pregunta3;
    private $_pregunta4;
    private $_pregunta5;
   
    public function __construct
    (
        AcontecimientoTraumaticoSevero $AcontecimientoTraumaticoSevero,
        string $pregunta1,
        string $pregunta2,
        string $pregunta3,
        string $pregunta4,
        string $pregunta5
    )
    {
        $this->_acontecimientoTraumaticoSevero = $AcontecimientoTraumaticoSevero;
        $this->_pregunta1 = $this->setPregunta($pregunta1);
        $this->_pregunta2 = $this->setPregunta($pregunta2);
        $this->_pregunta3 = $this->setPregunta($pregunta3);
        $this->_pregunta4 = $this->setPregunta($pregunta4);
        $this->_pregunta5 = $this->setPregunta($pregunta5);
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