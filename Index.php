<?php

/*
Ejemplos de uso
*/

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use src\{CuestionarioEts,AcontecimientoTraumaticoSevero, Afectacion, EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento, RecuerdosPersistentesSobreElAcontecimiento};

use src\CrearCuestionarioEts;

use src\CambiarValoresParaBaseDeDatosCuestionarioEts;

$ets = new AcontecimientoTraumaticoSevero('No','No','No','No','No','No');

$cuestionario = new CuestionarioEts(
    $ets,
    new RecuerdosPersistentesSobreElAcontecimiento($ets,'Sí', 'No'),
    new EsfuerzoPorEvitarCircunstanciasParecidasOAsociadasAlAcontecimiento($ets,'Sí','No','No','No','No','No','No'),
    new Afectacion($ets,'Sí','No','No','No','No')
);
echo '<h1>Crear Cuestionario a partir de forma regular</h1>';
echo '<pre>';
var_dump($cuestionario);

echo '<h1>Crear Cuestionario a partir de Factory con array</h1>';
/*
Crear cuestionario con factory proveniente de un array con datos
*/
$cuestionario = new CrearCuestionarioEts;
$datos = array(
    'pregunta1' => 'No',
    'pregunta2' => 'No',
    'pregunta3' => 'No',
    'pregunta4' => 'No',
    'pregunta5' => 'No',
    'pregunta6' => 'No',
    'pregunta7' => 'No',
    'pregunta8' => 'No',
    'pregunta9' => 'No',
    'pregunta10' => 'No',
    'pregunta11' => 'No',
    'pregunta12' => 'No',
    'pregunta13' => 'No',
    'pregunta14' => 'No',
    'pregunta15' => 'No',
    'pregunta16' => 'No',
    'pregunta17' => 'No',
    'pregunta18' => 'No',
    'pregunta19' => 'No',
    'pregunta20' => 'No',
);

$cuestionario = $cuestionario->crear($datos);

var_dump($cuestionario);

$convertir = new CambiarValoresParaBaseDeDatosCuestionarioEts;

/*
Cambiar valores de texto a número
*/
echo '<h1>Cambiar valores de texto a número</h1>';
var_dump($convertir->cambiarTodosLosValoresDeTextoANumero($datos));

echo '<h1>Cambiar valores de número a texto</h1>';
var_dump($convertir->cambiarTodosLosValoresDeNumeroATexto((array) $convertir->cambiarTodosLosValoresDeTextoANumero($datos)));
