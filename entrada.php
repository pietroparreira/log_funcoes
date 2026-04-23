<?php

require_once "biblioteca.php";

use function matematica\somar;
use function texto\Concatenar;
use function logica\verificaidade;
use function logica\verificaexercito;

echo "Soma: ", somar(1, 1, 1), "\n";
echo "nome completo: ", Concatenar("João", "Silva"), "\n";
echo "Status: ", verificaidade(19);
echo "Status: ", verificaexercito("Masculino", 19);
