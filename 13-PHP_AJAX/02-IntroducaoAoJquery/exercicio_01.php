<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <style>
            .curso
            {
                color:red; 
            }
            </style>
    </head>

    <body>

    <div class="curso"></div>
    <div class="curso"></div>
    <div class="curso"></div>
    
    <script src="Jquery.js"></script>
    
    <script>
        $('div.curso:first').load('dados.txt');
    </script>

    </body>
</html>