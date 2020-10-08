<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 08</title>
    </head>
    <body>
        <?php
            $salarioatual = $_POST ['salarioatual'];
            $menorque280 = (20/100);
            $maiorigual280menorque700 = (15/100);
            $maiorigual700menorque1500 = (10/100);
            $maiorque1500 = (5/100);
            $aumento = 0;
            $novosalario = 0;
            echo "Salário antes do reajuste: R$".$salarioatual.",00 reais </br>";
            if ($salarioatual < 280) {
               $aumento = $salarioatual * $menorque280;
               $novosalario = $aumento + $salarioatual;
               echo "O aumento aplicado foi de 20% </br>";
               echo "Valor do aumento: R$". $aumento.",00 </br>";
               echo "Valor do novo salário: R$". $novosalario.",00 </br>";
            }
            if ($salarioatual >= 280 && $salarioatual < 700) {
                $aumento = $salarioatual * $maiorigual280menorque700;
                $novosalario = $aumento + $salarioatual;
                echo "O aumento aplicado foi de 15% </br>";
                echo "Valor do aumento: R$". $aumento.",00 </br>";
                echo "Valor do novo salário: R$". $novosalario.",00 </br>";
            }
            if ($salarioatual >= 700 && $salarioatual < 1500) {
                $aumento = $salarioatual * $maiorigual700menorque1500;
                $novosalario = $aumento + $salarioatual;
                echo "O aumento aplicado foi de 10% </br>";
                echo "Valor do aumento: R$". $aumento.",00 </br>";
                echo "Valor do novo salário: R$". $novosalario.",00 </br>";
            }
            if ($salarioatual >= 1500) {
                $aumento = $salarioatual * $maiorque1500;
                $novosalario = $aumento + $salarioatual;
                echo "O aumento aplicado foi de 5% </br>";
                echo "Valor do aumento: R$". $aumento.",00 </br>";
                echo "Valor do novo salário: R$". $novosalario.",00 </br>";
            }
        ?> 
    </body>
</html>