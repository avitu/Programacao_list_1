<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 01</title>
    </head>
    <body>
        <?php
            $n1 = $_POST ['n1'];
            $n2 = $_POST ['n2'];

            if ($n1 % $n2 == 0) {
                echo "A é divisível por B";
            } 
            else {
                echo "A não é divisível por B";
            }
    
        ?>
    </body>
</html>