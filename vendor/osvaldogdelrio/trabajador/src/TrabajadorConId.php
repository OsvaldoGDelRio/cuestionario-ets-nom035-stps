<?php
namespace src;

use src\{Trabajador,IdDeTrabajador};

class TrabajadorConId
{
    public $_trabajador;

    public $_idDeTrabajador;

    public function __construct(Trabajador $Trabajador, IdDeTrabajador $IdDeTrabajador)
    {
        $this->_trabajador = $Trabajador;
        $this->_idDeTrabajador = $IdDeTrabajador;
    }

    public function idDeTrabajador(): string
    {
        return $this->_idDeTrabajador->idDeTrabajador();
    }

    public function sexo(): string
    {
        return $this->_trabajador->sexo();
    }

    public function edad(): int
    {
        return $this->_trabajador->edad();
    }

    public function rangoDeEdad(): string
    {
        return $this->_trabajador->rangoDeEdad();
    }

    public function estadoCivil(): string
    {
        return $this->_trabajador->estadoCivil();
    }

    public function nivelDeEstudios(): string
    {
        return $this->_trabajador->nivelDeEstudios();
    }

    public function ocupacion(): string
    {
        return $this->_trabajador->ocupacion();
    }
    
    public function departamento(): string
    {
        return $this->_trabajador->departamento();
    }

    public function tipoDePuesto(): string
    {
        return $this->_trabajador->tipoDePuesto();
    }

    public function tipoDeContratacion(): string
    {
        return $this->_trabajador->tipoDeContratacion();
    }

    public function tipoDePersonal(): string
    {
        return $this->_trabajador->tipoDePersonal();
    }

    public function tipoDeJornada(): string
    {
        return $this->_trabajador->tipoDeJornada();
    }

    public function realizaRotacion(): string
    {
        return $this->_trabajador->realizaRotacion();
    }

    public function rangoTiempoenPuesto(): string
    {
        return $this->_trabajador->rangoTiempoenPuesto();
    }

    public function rangoExperienciaLaboral(): string
    {
        return $this->_trabajador->rangoExperienciaLaboral();
    }
}