<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

            $_data1 =   new DateTime('2021-11-29');
            $_data2 =   new DateTime('2021-11-14');

            $_intervalo =   $_data1 ->  diff    ($_data2)   ;

        ?>

        <pre>

        <?php

            print_r($_intervalo);

        ?>

        <?php

            print_r($_intervalo->format('%a'))

        ?>


        </pre>
    </body>
</html>