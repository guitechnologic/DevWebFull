<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
     
        <script>
            function retornarProdutos(data) {
                console.log(data);
            }
        </script>
    </head>

    <body>


        <script src="http://localhost:81/ProjetoWeb/DevWebFull/13-PHP_AJAX/06-PrepararArquivoParaUsoDoCallBack/gerar_json.php?callback=retornarProdutos"></script>
    </body>
</html>