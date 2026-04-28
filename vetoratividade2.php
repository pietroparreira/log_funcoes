<?php
$temp = [22.5, 30.1, 18.9, 25.0, 31.5];
$cont = count($temp);
$buscando = 31.5;

for ($i = 0; $i < $cont; $i++) {
    if ($temp[$i] == $buscando) {
        echo "[$i] Alerta! temperatura critica: ", $temp[$i], "\n";
    } else {
        echo "[$i] Temperatura estável: ", $temp[$i], "\n";
    }
}
