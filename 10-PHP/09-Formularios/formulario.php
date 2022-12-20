<?php

    if(isset($_POST["formulario"])) {
        
        $_nome  =   isset($_POST["nome"])   ?   $_POST["nome"]  :   $_POST["sem definicao"];

        $_nome  =   isset($_POST["email"])  ?   $_POST["email"] :   $_POST["sem definicao"];



    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>

    <?php   if(!isset($_POS["formulario"]))   {    ?>

            <form action="formulario2.php" method="post">

                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                
                <input type="submit"    name="formulario" value="Enviar Cadastro">

            </form>

        <?php   }   else    {
                    echo    "nome:  "   .   $_nome  .   "<br>";
            
                    echo    "email: "   .   $_email  .   "<br>";
        }   ?>

    </body>
</html>