<?php
    $tempoS = $_POST['tempoS'];
    $tempoMin = $tempoS / 60;
    $tempoHr = $tempoMin / 60;

    echo "Segundos: " .$tempoS. "s";
    echo "</br>";
    echo "Minutos: " .$tempoMin. "min";
    echo "</br>";
    echo "Horas: " .$tempoHr. "hrs";
?>