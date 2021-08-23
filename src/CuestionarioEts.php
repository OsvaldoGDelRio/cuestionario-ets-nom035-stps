<?php

namespace src;

use src\{
    AcontecimientoTraumaticoSevero,
    RecuerdosPersistentesSobreElAcontecimiento,
    EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento,
    Afectacion
};

class CuestionarioEts
{
    private $_acontecimientoTraumaticoSevero;

    private $_recuerdosPersistentesSobreElAcontecimiento;

    private $_esfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento;

    private $_afectacion;
    
    public function __construct
    (
        AcontecimientoTraumaticoSevero $AcontecimientoTraumaticoSevero,
        RecuerdosPersistentesSobreElAcontecimiento $RecuerdosPersistentesSobreElAcontecimiento,
        EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento $EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento,
        Afectacion $Afectacion
    )
    {
        $this->_acontecimientoTraumaticoSevero = $AcontecimientoTraumaticoSevero;
        $this->_recuerdosPersistentesSobreElAcontecimiento = $RecuerdosPersistentesSobreElAcontecimiento;
        $this->_esfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento = $EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento;
        $this->_afectacion = $Afectacion;
    }

    public function acontecimientoTraumaticoSevero(): AcontecimientoTraumaticoSevero
    {
        return $this->_acontecimientoTraumaticoSevero;
    }

    public function recuerdosPersistentesSobreElAcontecimiento(): RecuerdosPersistentesSobreElAcontecimiento
    {
        return $this->_recuerdosPersistentesSobreElAcontecimiento;
    }

    public function esfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento(): EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento
    {
        return $this->_esfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento;
    }

    public function afectacion(): Afectacion
    {
        return $this->_afectacion;
    }

}