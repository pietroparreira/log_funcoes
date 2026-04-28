<?php

namespace conversao {
    function dolarParareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function euroParareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function pesoParareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function libraParareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
    function ieneParareal($valor, $cotacao)
    {
        return $valor * $cotacao;
    }
}

namespace geometria {
    function areaQuadrado($lado)
    {
        return $lado * $lado;
    }
    function areaRetangulo($base, $altura)
    {
        return $base * $altura;
    }
    function areaTriangulo($base, $altura)
    {
        return $base * $altura / 2;
    }
    function areaCirculo($raio, $pi)
    {
        return $raio ** 2 * $pi;
    }
    function areaTrapezio($baseMaior, $baseMenor, $altura)
    {
        return $baseMaior + $baseMenor * $altura / 2;
    }
}
