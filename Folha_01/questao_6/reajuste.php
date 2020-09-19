<?php
    $saldo = $_POST ['saldo'];
    $reajuste = ($saldo *(3/100));
    $saldoatualizado = $saldo + $reajuste;

    echo "Novo saldo R$ " .$saldoatualizado. ",00";
?>