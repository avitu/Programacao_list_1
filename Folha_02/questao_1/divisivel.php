<?php
    $n1 = $_POST ['n1'];
    $n2 = $_POST ['n2'];

    if ($n1 % $n2 == 0) {
        echo "A e divisivel por B";
    } 
    else {
        echo "A nao e divisivel por B";
    }
    
?>