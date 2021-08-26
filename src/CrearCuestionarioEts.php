<?php
namespace src;

use src\FactoryClassInterface;

use src\{
    CuestionarioEts,
    AcontecimientoTraumaticoSevero,
    RecuerdosPersistentesSobreElAcontecimiento,
    EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento,
    Afectacion
};

class CrearCuestionarioEts implements FactoryClassInterface
{
    public function crear(array $array): CuestionarioEts
    {
        $acontecimientoTraumaticoSevero = new AcontecimientoTraumaticoSevero(
            $array['pregunta1'],
            $array['pregunta2'],
            $array['pregunta3'],
            $array['pregunta4'],
            $array['pregunta5'],
            $array['pregunta6']
        );

        return new CuestionarioEts(
            $acontecimientoTraumaticoSevero,
            new RecuerdosPersistentesSobreElAcontecimiento(
                $acontecimientoTraumaticoSevero,
                $array['pregunta7'],
                $array['pregunta8'],
            ),
            new EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento(
                $acontecimientoTraumaticoSevero,
                $array['pregunta9'],
                $array['pregunta10'],
                $array['pregunta11'],
                $array['pregunta12'],
                $array['pregunta13'],
                $array['pregunta14'],
                $array['pregunta15']
            ),
            new Afectacion(
                $acontecimientoTraumaticoSevero,
                $array['pregunta16'],
                $array['pregunta17'],
                $array['pregunta18'],
                $array['pregunta19'],
                $array['pregunta20']
            )
        );
    }
}