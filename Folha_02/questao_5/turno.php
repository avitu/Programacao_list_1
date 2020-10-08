<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quest&atilde;o 05</title>
    </head>
    <body>
        <?php
           $turno = $_POST['turno'];

        if ($turno == "M" || $turno == "m") {
            echo "Bom Dia!";
        }
        if ($turno == "V" || $turno == "v") {
            echo "Boa Tarde!";
        }
        if ($turno == "N" || $turno == "n") {
            echo "Boa Noite!";
        }
        elseif ($turno <> "M" && $turno <> "V" && $turno <> "N" && $turno <> "m" && $turno <> "v") {
            echo "Valor inválido!";
        }   
        ?>
    </body>
</html>