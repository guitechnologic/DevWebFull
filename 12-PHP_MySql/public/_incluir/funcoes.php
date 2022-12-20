<?php
    function gerarCodigoUnico(){
        $alfabeto   =   "23456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $tamanho    =   10;
        $letra      =   "";
        $resultado  =   "";

        for ($i = 1; $i < $tamanho ; $i++ ) {
            $letra = substr( $alfabeto, rand(0,23) , 1);
            $resultado .=$letra;
        }

        
        date_default_timezone_set('America/Sao_Paulo');
        $agora = getdate();

        $codigo_data = $agora['year'] . "_" . $agora['yday'];
        $codigo_data .= $agora['hours'] . $agora['minutes'] . $agora['seconds'];

        return "foto_" . $codigo_data . "_" . $resultado;
    }

    function getExtensao($nome) {
        return strrchr($nome,".");
    }

    function publicarImagem($imagem) {
        $arquivo_temporario =   $imagem['temp_name'];
        $nome_original      =   $imagem['name'];
        $nome_novo          =   gerarCodigoUnico() . getExtensao($nome_original);
        $nome_completo      =   "images/product_images/" . $nome_novo;

        if(move_uploaded_file($arquivo_temporario, $nome_completo)){
            return array ("imagem publicada com sucesso", $nome_completo);
        }   else   {
            return array(retornarErro($imagem['error']),"");
        }
    }

?>