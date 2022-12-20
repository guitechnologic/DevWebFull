<?php 
    $salario = 7000;
    $meses   = 2;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $salario * $meses . "</br>";
            echo $salario / $meses . "</br>";

            // Exponencial
            echo "Exponencial: " . pow(15,2) . "</br>";
            
            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(225). "</br>";

            // Randômico Generica
            echo "Randomico: " . rand(999,99999) . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo " . rand(10,50) . "</br>";
            
            // Valor absoluto
            echo "Valor Absoluto: " . abs(-50). "</br>";
            
        ?>
    </body>
</html>