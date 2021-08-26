<?php
namespace src;

use stdClass;

class CambiarValoresParaBaseDeDatosCuestionarioEts
{
    public function cambiarTodosLosValoresDeTextoANumero(array $datos): object
    {
        $resultado = new stdClass;

        foreach ($datos as $pregunta => $respuesta)
        {
            $resultado->{$pregunta} = $this->cambiarDeTextoANumero($pregunta, $respuesta);
        }

        return $resultado;
    }

    public function cambiarTodosLosValoresDeNumeroATexto(array $datos): object
    {
        $resultado = new stdClass;

        foreach ($datos as $pregunta => $respuesta)
        {
            $resultado->{$pregunta} = $this->cambiarDeNumeroATexto($pregunta, $respuesta);
        }

        return $resultado;
    }

    public function cambiarDeTextoANumero(string $pregunta, string $valor): int
    {
        $resultado = 2;
        
        if($valor == 'No')
        {
            $resultado = 1;
        }

        return $resultado;
    }

    public function cambiarDeNumeroATexto(string $pregunta, int $valor): string
    {
        $resultado = 'Sí';
        
        if($valor == 1)
        {
            $resultado = 'No';
        }

        return $resultado;
    }
}