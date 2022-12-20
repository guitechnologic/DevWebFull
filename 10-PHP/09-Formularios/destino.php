<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 


        <?php

        $_nome  =   isset($_POST["nome"])   ?   $_POST["nome"]  :   $_POST["sem definicao"];

        $_nome  =   isset($_POST["email"])  ?   $_POST["email"] :   $_POST["sem definicao"];

            echo    "nome:  "   .   $_POST["nome"]  .   "<br>";
            
            echo    "email: "   .   $_POST["email"] .   "<br>"; 

        ?>

    </body>
</html>