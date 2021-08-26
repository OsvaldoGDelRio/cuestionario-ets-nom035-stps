[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OsvaldoGDelRio/custionario-ets-nom035-stps/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/custionario-ets-nom035-stps/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/OsvaldoGDelRio/custionario-ets-nom035-stps/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/OsvaldoGDelRio/custionario-ets-nom035-stps/?branch=main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/OsvaldoGDelRio/custionario-ets-nom035-stps/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)

# custionario-ets-nom035-stps
Clase PHP para el CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A ACONTECIMIENTOS TRAUMÁTICOS SEVEROS

## composer
```shell
osvaldogdelrio/cuestionario-ets-nom035-stps
```

## Ejemplo de uso
```php
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
```