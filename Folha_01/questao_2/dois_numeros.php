<?php
    $n1 = $_POST ['n1'];
    $n2 = $_POST ['n2'];
    $quociente = $n1 / $n2;
    $resto = $n1 % $n2;

    echo "Dividendo: " .$n1;
    echo "<br/>";
    echo "Divisor: " .$n2;
    echo "<br/>";
    echo "Quociente: " .$quociente;
    echo "<br/>";
    echo "Resto: " .$resto;
?>