<?php
namespace src;

use 
src\
{Trabajador,
Sexo,
Edad,
RangoDeEdad,
EstadoCivil,
NivelDeEstudios,
Ocupacion, 
Departamento,
TipoDePuesto,
TipoDeContratacion,
TipoDePersonal,
TipoDeJornada,
RealizaRotacion,
RangoTiempoEnPuesto,
RangoExperienciaLaboral};

use src\FactoryClassInterface;

class CrearTrabajador implements FactoryClassInterface
{
    public function crear(array $array): Trabajador
    {
        $edad = $this->crearEdad($array['edad']);

        return new Trabajador(
            new Sexo($array['sexo']),
            $edad,
            new RangoDeEdad($edad),
            new EstadoCivil($array['estadoCivil']),
            new NivelDeEstudios($array['nivelDeEstudios']),
            new Ocupacion($array['ocupacion']),
            new Departamento($array['departamento']),
            new TipoDePuesto($array['tipoDePuesto']),
            new TipoDeContratacion($array['tipoDeContratacion']),
            new TipoDePersonal($array['tipoDePersonal']),
            new TipoDeJornada($array['tipoDeJornada']),
            new RealizaRotacion($array['realizaRotacion']),
            new RangoTiempoEnPuesto($array['rangoTiempoEnPuesto']),
            new RangoExperienciaLaboral($array['rangoExperienciaLaboral'])
        );
    }

    private function crearEdad(int $edad): Edad
    {
        return new Edad($edad);
    }
}