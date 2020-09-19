<?php
    $temperaturaF = $_POST ['temperaturaF'];
    $temperaturaC = (5 * ($temperaturaF-32) / 9);

    echo "Temperatura em graus Celsius: " .$temperaturaC. "°C";
?>