<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        
        $_agenda    =   array   (   "nome"  =>  "Guilherme",
                                    "telefone"  =>  "2345-6789",
                                    "salario"  =>  1000.00);
                                    
        foreach (   $_agenda    as  $_contatos  =>  $_valor )   {
            echo    $_contatos  .   ":  "   .   $_valor .   "<br>"  ;
        }
    ?>
</body>
</html>