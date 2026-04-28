<?php
$IDs = [101, 102, 105, 110, 120, 150];
$cont = count($IDs);
$buscando = 110;

for ($i = 0; $i < $cont; $i++) {
    if ($IDs[$i] == $buscando) {
        echo "[$i] Autenticado: ", $IDs[$i], "\n";
    } else {
        echo "[$i] Não corresponde: ", $IDs[$i], "\n";
    }
}
