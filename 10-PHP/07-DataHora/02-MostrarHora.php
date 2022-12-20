<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

            date_default_timezone_set   ('US/Eastern')  ;

            $_agora =   getdate() ;
            
            $_segundo   =   $_agora ["seconds"];
            $_minuto    =   $_agora ["minutes"];
            $_hora      =   $_agora ["hours"];

            echo    "<br>"  .    $_hora  .   ":" .   $_minuto    .   ":" .   $_segundo   .   "<br>";


            $_dia   =   $_agora ["mday"];
            $_mes    =   $_agora ["mon"];
            $_ano      =   $_agora ["year"];

            echo    "<br>"  .    $_dia  .   "/" .   $_mes    .   "/" .   $_ano   .   "<br>";

        ?>
    </body>
</html>