<?php
namespace src;

use Exception;

class Sexo
{
    private $_sexo;

    public function __construct(string $sexo)
    {
        $this->_sexo = $this->setSexo($sexo);
    }

    public function sexo(): string
    {
        return $this->_sexo;
    }

    private function setSexo(string $sexo): string
    {
        if($sexo == 'Hombre' || $sexo == 'Mujer')
        {
            return $sexo;
        }

        throw new Exception("Error en sexo", 1);  
    }
}