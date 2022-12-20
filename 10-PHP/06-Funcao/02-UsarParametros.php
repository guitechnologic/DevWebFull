<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function    retornarDiaria($_salario    ,   $_dias  )    {
            return  number_format   (   $_salario   /   $_dias    ,    2   )   ;
        }

        echo    retornarDiaria(2500 ,   15)    .   "<br>"    ;
        echo    retornarDiaria(7500 ,   10)    .   "<br>"    ;
    ?>
</body>
</html>