<?php

require_once "bibliotecaFuncoes.php";

use function conversao\dolarParareal;

echo "Dolar para real: ", dolarParareal(50, 5), "\n";

use function conversao\euroParareal;

echo "Euro para real: ", euroParareal(50, 5.85), "\n";

use function conversao\pesoParareal;

echo "Peso para real: ", Pesoparareal(50, 0.0035183), "\n";

use function conversao\libraparareal;

echo "Libra para real: ", libraParareal(50, 6.71), "\n";

use function conversao\ieneParareal;

echo "Ine para real: ", ieneParareal(50, 0.031), "\n";
