<?php
namespace src;

use Exception;
use stdClass;

use src\Trabajador;

class ValoresParaBaseDeDatosTrabajador
{
    public $atributos = 
    array(
        'sexo',
        'edad',
        'rangoDeEdad',
        'estadoCivil',
        'nivelDeEstudios',
        'ocupacion',
        'departamento',
        'tipoDePuesto',
        'tipoDeContratacion',
        'tipoDePersonal',
        'tipoDeJornada',
        'realizaRotacion',
        'rangoTiempoEnPuesto',
        'rangoExperienciaLaboral',
    );

    public $sexo = 
    array(
        'Hombre' => 1,
        'Mujer' => 2
    );

    public $rangoDeEdad = 
    array(
        '15-19' => 1,
        '20-24' => 2,
        '25-29' => 3,
        '30-34' => 4,
        '35-39' => 5,
        '40-44' => 6,
        '45-49' => 7,
        '50-54' => 8,
        '55-59' => 9,
        '60-64' => 10,
        '65-69' => 11,
        '70-99' => 12
    );
    
    public $estadoCivil = 
    array(
        'Casado' => 1,
        'Soltero' => 2,
        'Unión libre' => 3,
        'Divorciado' => 4,
        'Viudo' => 5
    );

    public $nivelDeEstudios = 
    array(
        'Sin información' => 1,
        'Primaria' => 2,
        'Secundaria' => 3,
        'Bachillerato' => 4,
        'Técnico superior' => 5,
        'Licenciatura' => 6,
        'Maestría' => 7,
        'Doctorado' => 8
    );
    
    public $tipoDePuesto =
    array(
        'Operativo' => 1, 
        'Profesional o técnico' => 2,
        'Supervisor' => 3, 
        'Gerente' => 4
    );

    public $tipoDeContratacion =
    array(
        'Por obra o proyecto' => 1,
        'Por tiempo determinado (temporal)' => 2,
        'Tiempo indeterminado' => 3,
        'Honorarios' => 4
    );
    
    public $tipoDePersonal = 
    array(
        'Sindicalizado' => 1, 
        'Confianza' => 2,
        'Ninguno' => 3
    );
    
    public $tipoDeJornada = 
    array(
        'Fijo nocturno (entre las 20:00 y 6:00 hrs)' => 1,
        'Fijo diurno (entre las 6:00 y 20:00 hrs' => 2,
        'Fijo mixto (combinación de nocturno y diurno)' => 3
    );
    
    public $realizaRotacion =
    array(
        'Sí' => 1,
        'No' => 2
    );

    public $rangoTiempoEnPuesto = 
    array(
        'Menos de 6 meses' => 1,
        'Entre 6 meses y 1 año' => 2,
        'Entre 1 a 4 años' => 3,
        'Entre 5 a 9 años' => 4,
        'Entre 10 a 14 años' => 5,
        'Entre 15 a 19 años' => 6,
        'Entre 20 a 24 años' => 7,
        '25 años o más' => 8
    ); 

    public $rangoExperienciaLaboral = 
    array(
        'Menos de 6 meses' => 1,
        'Entre 6 meses y 1 año' => 2,
        'Entre 1 a 4 años' => 3,
        'Entre 5 a 9 años' => 4,
        'Entre 10 a 14 años' => 5,
        'Entre 15 a 19 años' => 6,
        'Entre 20 a 24 años' => 7,
        '25 años o más' => 8
    );
    
    public function cambiarTodosDeTextoANumero(Trabajador $Trabajador): object
    {
        $datos = new stdClass;

        foreach ($this->atributos as $atributo)
        {
            if($atributo == 'ocupacion' || $atributo == 'departamento' || $atributo == 'edad')
            {
                $datos->{$atributo} = $Trabajador->{$atributo}();
            }
            else
            {
                $datos->{$atributo} = $this->textoANumero($atributo, $Trabajador->{$atributo}());
            }
            
        }

        return $datos;
    }

    public function cambiarTodosDeNumeroATexto(object $datosDeTrabajador): object
    {
        $datos = new stdClass;

        foreach ($datosDeTrabajador as $key => $valor)
        {
            if($key == 'ocupacion' || $key == 'departamento' || $key == 'edad')
            {
                $datos->{$key} = $valor;
            }
            else
            {
                $datos->{$key} = $this->numeroATexto($key, $valor);
            }
        }

        return $datos;
    }
    
    public function textoANumero(string $atributo, string $valor): int
    {
        foreach ($this->{$atributo} as $key => $value)
        {
            if($key == $valor)
            {
                return $value;
            }
        }

        throw new Exception("Error procesando el cambio de texto a número en datos de ".$atributo, 1);
        
    }

    public function numeroATexto(string $atributo, int $valor): string
    {
        foreach ($this->{$atributo} as $key => $value)
        {
            if($value == $valor)
            {
                return $key;
            }
        }

        throw new Exception("Error procesando el cambio de número a texto en datos de ".$atributo, 1);
    }
}