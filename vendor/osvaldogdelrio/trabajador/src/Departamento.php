<?php
namespace src;

class Departamento
{
    private $_departamento;

    public function __construct(string $departamento)
    {
        $this->_departamento = $this->setDepartamento($departamento);
    }

    public function departamento(): string
    {
        return $this->_departamento;
    }

    private function setDepartamento(string $departamento): string
    {
        return $departamento;
    }
}