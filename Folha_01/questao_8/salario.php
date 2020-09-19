<?php
    $dinheiroporhora = $_POST ['dinheiroporhora'];
    $horastrabalhadas = $_POST ['horastrabalhadas'];
    $salario = $horastrabalhadas * $dinheiroporhora;

    echo "Seu salario R$ " .$salario. ",00"; //tirei o til de "salário" porque não aparece no browser
?>