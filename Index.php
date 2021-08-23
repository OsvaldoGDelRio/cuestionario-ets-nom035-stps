<?php

/*
Ejemplos de uso
*/

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use src\{CuestionarioEts,AcontecimientoTraumaticoSevero, Afectacion, EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento, RecuerdosPersistentesSobreElAcontecimiento};

$ets = new AcontecimientoTraumaticoSevero('No','No','No','No','No','No');

$cuestionario = new CuestionarioEts(
    $ets,
    new RecuerdosPersistentesSobreElAcontecimiento($ets,'Sí', 'No'),
    new EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento($ets,'Sí','No','No','No','No','No','No'),
    new Afectacion($ets,'Sí','No','No','No','No')
);
echo '<pre>';
var_dump($cuestionario);