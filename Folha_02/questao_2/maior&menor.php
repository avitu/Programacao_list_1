<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 02</title>
    </head>
    <body>
        <?php
            $n1 = $_POST ['n1'];
            $n2 = $_POST ['n2'];
            $n3 = $_POST ['n3'];

            if ($n1 > $n2 && $n1 > $n3) {
                echo "O número A ($n1) é maior";
            } 
            if ($n2 > $n1 && $n2 > $n3) {
                echo "O número B ($n2) é maior";
          }
            if ($n3 > $n1 && $n3 > $n2) {
            echo "O número C ($n3) é maior";
      }
            echo "</br>";
            if ($n1 < $n2 && $n1 < $n3) {
                echo "O número A ($n1) é menor";
            } 
            if ($n2 < $n1 && $n2 < $n3) {
                echo "O número B ($n2) é menor";
          }
            if ($n3 < $n1 && $n3 < $n2) {
            echo "O número C ($n3) é menor";
      }
        ?>
    </body>
</html>