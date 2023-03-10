<?php require_once("../../conexao/conexao.php"); ?>

<?php

    session_start();

    $_SESSION["usuario"] = "Guilherme"

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>

        <?php
                if( isset($_SESSION["usuario"]) ){
                    echo $_SESSION["usuario"];
                }
                
            ?>

            <a href="logout.php">Logout</a>

        </main>

        <?php include_once("../_incluir/rodape.php"); ?> 
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>