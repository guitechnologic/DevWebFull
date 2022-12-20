<?php
    $servidor   =   "localhost";
    $usuario    =   "root";
    $senha      =   "1234";
    $banco      =   "andes";
    $conecta    = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(    mysqli_connect_errno()  )   {
        die("conexão falhou: " . mysqli_connect_errno() );
    }


    $consulta_produtos = "SELECT nomeproduto, precounitario, tempoentrega ";
    $consulta_produtos .= "FROM produtos";

    $produtos = mysqli_query($conecta, $consulta_produtos );

    if( !$produtos) {
        die("Falha na consulta ao banco de dados");
    }

?>




<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
    </head>

    <body>
        <?php 
        
        

        ?>
    </body>
</html>

<?php 

    mysqli_close($conecta)

        ?>