<?php
$algoritimo = ["Teclado", "Mouse", "Monitor", "Headset", "Gabinete"];
$cont = count($algoritimo);
$buscando = "Monitor";

for ($i = 0; $i < $cont; $i++) {
    if ($algoritimo[$i] == $buscando) {
        echo "[$i] Encontrado valor de: ", $algoritimo[$i], "\n";
    } else {
        echo "[$i] não encontrado! encontramos o valor de: ", $algoritimo[$i], "\n";
    }
}
