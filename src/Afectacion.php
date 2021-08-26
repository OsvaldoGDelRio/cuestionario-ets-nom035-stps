<?php
namespace src;

use Exception;
use src\AcontecimientoTraumaticoSevero;

class Afectacion
{
    private $_acontecimientoTraumaticoSevero;
    private $_pregunta16;
    private $_pregunta17;
    private $_pregunta18;
    private $_pregunta19;
    private $_pregunta20;
   
    public function __construct
    (
        AcontecimientoTraumaticoSevero $AcontecimientoTraumaticoSevero,
        string $pregunta16,
        string $pregunta17,
        string $pregunta18,
        string $pregunta19,
        string $pregunta20
    )
    {
        $this->_acontecimientoTraumaticoSevero = $AcontecimientoTraumaticoSevero;
        $this->_pregunta16 = $this->setPregunta($pregunta16);
        $this->_pregunta17 = $this->setPregunta($pregunta17);
        $this->_pregunta18 = $this->setPregunta($pregunta18);
        $this->_pregunta19 = $this->setPregunta($pregunta19);
        $this->_pregunta20 = $this->setPregunta($pregunta20);
    }

    public function pregunta16(): string
    {
        return $this->_pregunta16;
    }

    public function pregunta17(): string
    {
        return $this->_pregunta17;
    }

    public function pregunta18(): string
    {
        return $this->_pregunta18;
    }

    public function pregunta19(): string
    {
        return $this->_pregunta19;
    }

    public function pregunta20(): string
    {
        return $this->_pregunta20;
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