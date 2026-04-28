<?php
$catalogo = ["Fiat", "Ford", "Toyota", "Honda", "BMW", "Audi", "Tesla"];
$cont = count($catalogo);
$buscando = "Tesla";

for ($i = 0; $i < $cont; $i++) {
    if ($catalogo[$i] == $buscando) {
        echo "[$i] modelo elétrico: ", $catalogo[$i], "\n";
    } else {
        echo "[$i] modelo a combustão: ", $catalogo[$i], "\n";
    }
}
