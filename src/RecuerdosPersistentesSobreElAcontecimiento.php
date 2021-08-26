<?php
namespace src;

use Exception;
use src\AcontecimientoTraumaticoSevero;

class RecuerdosPersistentesSobreElAcontecimiento
{
    private $_acontecimientoTraumaticoSevero;
    private $_pregunta7;
    private $_pregunta8;
    
    public function __construct
    (
        AcontecimientoTraumaticoSevero $AcontecimientoTraumaticoSevero,
        string $pregunta7,
        string $pregunta8
    )
    {
        $this->_acontecimientoTraumaticoSevero = $AcontecimientoTraumaticoSevero;
        $this->_pregunta7 = $this->setPregunta($pregunta7);
        $this->_pregunta8 = $this->setPregunta($pregunta8);
    }

    public function pregunta7(): string
    {
        return $this->_pregunta7;
    }

    public function pregunta8(): string
    {
        return $this->_pregunta8;
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