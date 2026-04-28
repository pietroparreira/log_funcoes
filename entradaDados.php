<?php

require_once "bibliotcaFuncoes";

use function conversao\dolarParareal;

echo "Dolar para real: ", dolarParareal(50, 5);

use function conversao\euroParareal;

echo "Euro para real: ", euroParareal(50, 5.85);

use function conversao\pesoParareal;

echo "Peso para real: ", Pesoparareal(50, 0.0035183);

use function conversao\libraparareal;

echo "Libra para real: ", libraParareal(50, 6.71);

use function conversao\ieneParareal;

echo "Ine para real: ", ieneParareal(50, 0.031);
