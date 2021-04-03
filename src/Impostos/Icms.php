<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Icms implements Imposto
{

    public function calcular(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
