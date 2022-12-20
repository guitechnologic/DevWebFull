<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 

            $_dia = "sabado";

            if (    $_dia   ==  "sabado"    ||  $_dia   ==  "domingo")  {
                echo    "pode descansar";
            }   else    {
                echo    "dia de trabalhar";
            }

        ?>
<br>
<br>
<br>
        <?php 

            $_idade = 18;
            $_sexo = "feminino";

            if (    $_idade   >=  18    ||  $_sexo   ==  "feminino")  {
                echo    "pode entrar";
            }   else    {
                echo    "nao pode entrar";
            }

        ?>
    </body>
</html>