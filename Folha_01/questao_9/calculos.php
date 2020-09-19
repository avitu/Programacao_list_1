<?php
    $n1 = $_POST ['n1'];
    $n2 = $_POST ['n2'];
    $n3 = $_POST ['n3'];

    $letraA = ($n1 * 2) + ($n2 / 2);
    $letraB = (($n1 * 3)+ $n3);
    $letraC = ($n3 ** 3);
    
    echo "a) " .$letraA;
    echo "</br>";
    echo "b) " .$letraB;
    echo "</br>";
    echo "c) " .$letraC;
?>