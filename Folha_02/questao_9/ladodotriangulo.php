<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 09</title>
    </head>
    <body>
        <?php
            $ladoA = $_POST ['ladoA'];
            $ladoB = $_POST ['ladoB'];
            $ladoC = $_POST ['ladoC'];
            $somadedoislados = $ladoA + $ladoB;
            if ($somadedoislados > $ladoC) {
                echo "Segundo os dados informados, foi confirmado um triângulo! </br>";
                if ($ladoA == $ladoB && $ladoA == $ladoC) {
                    echo "Tipo: Equilátero.";
                } elseif ($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC) {
                    echo "Tipo: Isósceles.";
                }else {
                    echo "Tipo: Escaleno.";
                }
            } else {
                echo "Não é um triângulo!";
            }
        ?>
    </body>
</html>
