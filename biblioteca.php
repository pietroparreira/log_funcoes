<?php

namespace matematica {
    function somar($a, $b, $c)
    {
        return $a + $b + $c;
    }
    echo "Resultado: ", somar(10, 5, 5), "\n";


    function Subtrair($a, $b)
    {
        return $a - $b;
    }
    echo "Resultado: ", subtrair(10, 5), "\n";



    function dividir($a, $b)
    {
        return $a / $b;
    }
    echo "Resultado: ", dividir(10, 5), "\n";



    function multiplicar($a, $b)
    {
        return $a * $b;
    }
    echo "Resultado: ", multiplicar(10, 5), "\n";
}






namespace texto {
    function Concatenar($nome, $sobrenome)
    {
        return $nome . " " . $sobrenome;
    }
}

namespace logica {
    function verificaidade($idade)
    {
        if ($idade >= 18) {
            return "Maior de idade!";
        } else {
            return "Menor de idade!";
        }
    }
}

namespace logica {
    function verificaexercito($sexo, $idade)
    {
        if ($idade >= 18 && $sexo == "Masculino") {
            return "Voce esta apto a sservir ao Exercito";
        } else {
            return "voce não cumpre aos requisitos";
        }
    }
}
