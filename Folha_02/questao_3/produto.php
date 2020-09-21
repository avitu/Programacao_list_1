<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 03</title>
    </head>
    <body>
        <?php
            $p1 = $_POST ['p1'];
            $p2 = $_POST ['p2'];
            $p3 = $_POST ['p3'];

            if ($p1 < $p2 && $p1 < $p3) {
                echo "Decisão: Você deve comprar o produto A, ele é o mais barato!";
            } 
            if ($p2 < $p1 && $p2 < $p3) {
                echo "Decisão: Você deve comprar o produto B, ele é o mais barato!";
          }
            if ($p3 < $p1 && $p3 < $p2) {
            echo "Decisão: Você deve comprar o produto C, ele é o mais barato!";
            }
        ?>
    </body>
</html>