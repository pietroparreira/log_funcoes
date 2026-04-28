<?php
$status = ["Pendente", "Pago", "Cancelado", "Pago", "Enviado"];
$cont = count($status);
$buscando = "Pago";

for ($i = 0; $i < $cont; $i++) {
    if ($status[$i] == $buscando) {
        echo "[$i] Transação Aprovada: ", $status[$i], "\n";
    } else {
        echo "[$i] Status é irrelevante no momento: ", $status[$i], "\n";
    }
}
