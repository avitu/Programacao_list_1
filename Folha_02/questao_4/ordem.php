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

            echo "Decrescente: ";
            if ($nx < $ny && $nx < $nz) {
                if ($ny < $nz) {
                    echo $nz.", ".$ny.", ".$nx.";";
                } else {
                    echo $ny.", ".$nz.", ".$nx.";";
                }   
            } elseif ($ny < $nx && $ny < $nz) {
                if ($nx < $nz){
                    echo $nz.", ".$nx.", ".$ny.";";
                } else {
                    echo $nx.", ".$nz.", ".$ny.";";
                }
            } elseif ($nz < $nx && $nz < $ny) {
                echo $ny.", ".$nx.", ".$nz.";";
            }
        ?>
    </body>
</html>