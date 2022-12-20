<?php
    $servidor   =   "localhost";
    $usuario    =   "root";
    $senha      =   "1234";
    $banco      =   "andes";
    $conecta    = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(    mysqli_connect_errno()  )   {
        die("conexão falhou: " . mysqli_connect_errno() );
    }

?>