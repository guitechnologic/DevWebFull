<?php require_once("../../conexao/conexao.php"); ?>
<?php
    //inserção no banco
    if(isset($_POST["nometransportadora"])) {
        $nome = $_POST["nometransportadora"];
        $endereco = $_POST["endereco"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estados"];
        $cep = $_POST["cep"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];

        $inserir = "INSERT INTO transportadoras ";
        $inserir .= " (nometransportadora,endereco,telefone,cidade,estadoID,cep,cnpj) ";
        $inserir .= "VALUES ";
        $inserir .= "('$nome','$endereco','$telefone','$cidade',$estado,'$cep','$cnpj')"; //sequencia deve ser igual do banco de dados para inserção

        $operacao_inserir = mysqli_query($conecta,$inserir);
        if(!$operacao_inserir) {
            die("erro no banco");
        }
    }

    


    //seleçao de estados
        $select = "SELECT estadoID, nome ";
        $select .= " FROM estados ";
        $lista_estados = mysqli_query($conecta, $select);
        if(!$lista_estados){
            die("erro na base de dados");
        }
    ?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/crud.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?> 
        
        <main> 
            
            <div id="janela_formulario">

                <form action="inserir_transportadoras.php" method="post">
                    <input type="text" name="nometransportadora"    placeholder="Nome da transportadora">
                    <input type="text" name="endereco"              placeholder="Endereco">
                    <input type="text" name="telefone"              placeholder="Telefone">
                    <input type="text" name="cidade"                placeholder="Cidade">
                    <select name="estados">
                    <?php
                        while($linha = mysqli_fetch_assoc($lista_estados)){
                    ?>
                        <option value="<?php echo $linha["estadoID"];    ?>">
                            <?php echo $linha["nome"];    ?>
                        </option>
                    <?php
                        }
                    ?>
                    </select>
                    <input type="text" name="cep"                   placeholder="CEP">
                    <input type="text" name="cnpj"                  placeholder="CNPJ">
                    
                    <input type="submit" name="inserir"  >


                </form>

            </div>
            
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>