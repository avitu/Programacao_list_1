
<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 10</title>
    </head>
    <body>
        <?php
            $morango = $_POST ['morango'];
            $maca = $_POST ['maca'];
            $morangoate5 = 2.50;
            $morangoacimade5 = 2.20;
            $macaate5 = 1.80;
            $macaacimade5 = 1.50;
            $totaldemorango = 0;
            $totaldemaca = 0;
            $totaldepreço = 0;
            $valortotalfinal = 0;
            
            //Calculo do peso em Kg da maçã e do morango
            if ($morango <=5){
                $totaldemorango = $morangoate5 * $morango;

            } else {
                $totaldemorango = $morangoacimade5 * $morango;
            }
            if ($maca <= 5) {
                $totaldemaca = $macaate5 * $maca;
            } else {
                $totaldemaca = $macaacimade5 * $maca;
            } 
            $totalemkg = $maca + $morango;
            $totaldepreço = $totaldemorango + $totaldemaca; 
            if ($totalemkg > 8 or $totaldepreço > 25) {
                $desconto = 10 * ($totaldepreço/100);
                $valortotalfinal = $totaldepreço - $desconto;
                echo "Valor total a ser pago: R$ ". $valortotalfinal."0</br>";
                echo "O cliente recebeu o desconto de 10%";
            } else {
                echo "Valor total a ser pago: R$ ". $valortotalfinal."0";
            }
        ?>
    </body>
</html>
