<?php

    $_megasena = array(47,29,42,04,27,21);

    sort($_megasena);

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

    <pre>
        <?php
            echo min($_megasena). "<br>";
            echo max($_megasena). "<br>";
        ?>
    </pre>


    <pre>
        <?php 
            
            print_r($_megasena);

        ?>
    </pre>
    
    </body>
</html>