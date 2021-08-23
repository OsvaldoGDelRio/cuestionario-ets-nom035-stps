<?php

/*
Ejemplos de uso
*/

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use src\{CuestionarioEts,AcontecimientoTraumaticoSevero, Afectacion, EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento, RecuerdosPersistentesSobreElAcontecimiento};

$cuestionario = new CuestionarioEts(
    new AcontecimientoTraumaticoSevero('No','No','No','No','No','No'),
    new RecuerdosPersistentesSobreElAcontecimiento('No', 'No'),
    new EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento('No','No','No','No','No','No','No'),
    new Afectacion(new AcontecimientoTraumaticoSevero('No','No','No','No','No','No'),'Sí','No','No','No','No')
);
echo '<pre>';
var_dump($cuestionario);