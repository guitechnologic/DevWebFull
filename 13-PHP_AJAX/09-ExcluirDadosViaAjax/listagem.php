<?php
    // Criar objeto de conexao
    $conecta = mysqli_connect("localhost","root","1234","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    // tabela de transportadoras
    $tr = "SELECT * FROM transportadoras ";
    $consulta_tr = mysqli_query($conecta, $tr);
    if(!$consulta_tr) {
        die("erro no banco");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>        
        <main>  
            <div id="janela_transportadoras">
                <?php
                    while($linha = mysqli_fetch_assoc($consulta_tr)) {
                ?>
                <ul>
                    <li><?php echo ($linha["nometransportadora"]) ?></li>
                    <li><?php echo ($linha["cidade"]) ?></li>
                    <li><a href="" class="excluir" title="<?php $linha["nometransportadoraID"] ?>">Excluir</a></li>
                </ul>
                <?php
                    }
                ?>
            </div>
        </main>

        
        <script src="jquery.js"></script>
        <script>
            $('#janela_transportadora ul li a.excluir').click(function(e){
                e.preventDefault();
                //
                var id = $(this).attr("title");
                var elemento = $(this).parent().parent();
                $.ajax({
                    type:"POST",
                    data:"transportadoraID=" + id, 
                    url:"exclusao.php",
                    async:false
                }).done(function(data){
                    $sucesso = $.parseJSON(data)["sucesso"];
                    if($sucesso){
                        $(elemento).fadeOut();
                    }else{
                        console.log("Erro na exclusao");
                    }
                    
                }).fail(function(){

                });
            })
        </script>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>