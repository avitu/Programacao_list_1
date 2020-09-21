<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 06</title>
    </head>
    <body>
        <?php
            $produto = $_POST ['produto'];
            $preço = $_POST ['preço'];
            $pagamento = $_POST ['pagamento'];
            
            //váriaveis para os calculos
            $desconto = ($preço * (5/100));
            $acrescimo = ($preço * (3/100));
            $avista = ($preço - $desconto);
            $aprazo = ($preço + $acrescimo);

            echo "Nome do produto: $produto </br>";
            echo "Valor inicial do produto: R$$preço </br>";
            echo "Metódo de pagamento: $pagamento </br>";      
            
            if ($pagamento == à_vista) {
                echo "Valor final: R$$avista,00 </br>";
                echo "O comprador recebeu 5% de desconto!";
            }
            if ($pagamento === a_prazo) {
                echo "Valor final: R$$aprazo,00 </br>";
                echo "O produto teve 3% de acréscimo!";
            } 
        ?>
    </body>
</html>
   