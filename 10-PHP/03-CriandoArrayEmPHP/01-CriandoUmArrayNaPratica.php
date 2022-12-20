<?php
    $_salada = array("maça","laranja","abacaxi","melao");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Criando Um Array Na Pratica</title>
    </head>

    <body>
        <?php 

            echo $_salada[0]. "<br>";
            echo $_salada[1]. "<br>";
            echo $_salada[2]. "<br>";
            $_salada[] ="abacate" . "<br>";
            $_salada[] ="morango" . "<br>";

            echo $_salada[5]. "<br>";

            echo count($_salada);

        ?>

        <pre>
        <?php

            print_r($_salada)

        ?>
        </pre>



    </body>
</html>