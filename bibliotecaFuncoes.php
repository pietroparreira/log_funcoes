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

namespace saude {
    function  calcularImc($peso, $altura)
    {
        return $peso / $altura ** 2;
    }
    function valorIdealAgua($peso)
    {
        return $peso * 0.35;
    }
    function frequenciaCardiacaMaxima($idade)
    {
        return $idade - 0.220;
    }
    function converterLibrasParaQuilo($libras)
    {
        return $libras * 0.4536;
    }
    function calcularCaloriasBasais($peso, $altura, $idade, $sexo)
    {
        if ($sexo = "masculino") {
            return 66.5 + (13.75 * $peso) + (5.003 * $altura) - (6.75 * $idade);
        } else {
            ($sexo = "feminino");
            return 655.1 + (9.563 * $peso) + (1.850 * $altura) - (4.676 * $idade);
        }
    }
}
