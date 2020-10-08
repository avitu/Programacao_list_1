<DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 07</title>
    </head>
    <body>
        <?php
            $setor = $_POST ["setor"];
            $horas = $_POST ["horas"];
            $produção = 10;
            $administrativo = 12;
            $calculo = 0;

            if ($setor == "Produção") {
                $calculo = $produção * $horas;
                echo "O salário final a receber será: R$".$calculo.",00 reais.";
            }
            if ($setor == "Administrativo") {
                $calculo = $administrativo * $horas;
                echo "O salário final a receber será: R$".$calculo.",00 reais.";
            }
        ?>
    </body>
</html>