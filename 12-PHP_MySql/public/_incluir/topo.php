<header>
    <div id="header_central">

        <?php
            if ( isset($session["user_portal"]) ){
                $user = $_SESSION["user_portal"];

                $saudacao = "SELECT nomecompleto ";
                $saudacao .= " FROM clientes ";
                $saudacao .= " WHERE clienteID = ${user} ";

                $saudacao_login = mysqli_query($conecta,$saudacao);
                if(!$saudacao_login) { 
                    die("falha no banco");
                  }

                  $saudacao_login = mysqli_fetch_assoc($saudacao_login);
                  $nome = $saudacao_login["nomecompleto"]

        ?>

        <div id="header_saudacao">
            <h5>bem vindo, 
                <?php echo $nome ?> - Sair
                    <a href="sair.php">
                    </a>
            </h5>
        </div>
        

        <?php
            }
        ?>

        <img src="../_assets/logo_andes.gif">
        <img src="../_assets/text_bnwcoffee.gif">
    </div>
</header>