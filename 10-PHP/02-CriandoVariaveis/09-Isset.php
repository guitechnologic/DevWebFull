<?php
    $_nome      = "Guilherme";
    $_telefone  = "41424344";
    $_fumante   = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php
            echo isset($$_nome)     .   "<br>";
            echo isset($_telefone)  .   "<br>";
            echo isset($_fumante)   .   "<br>";
            echo isset($_email)     .   "<br>";

        ?>

    </body>
</html>