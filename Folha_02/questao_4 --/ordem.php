<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 04</title>
    </head>
    <body>
        <?php
            $nx = $_POST ['nx'];
            $ny = $_POST ['ny'];
            $nz = $_POST ['nz'];

            echo "Decrescente:";
            if ($nx > $ny && $nz) {
                echo " $nx";
            } 
            if ($ny > $nx && $nz) {
                echo " $ny";
          }
            if ($nz > $nx && $ny) {
                echo " $nz";
            }
        ?>
    </body>
</html>