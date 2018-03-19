<?php
    function gerarCodigoUnico() {
        
        //parte 1
        $alfabeto   = "23456789ABCDEFJGHJKMNPQRS";
        $tamanho    = 30;
        $letra      = "";
        $resultado  = "";

        for ($i = 1; $i < $tamanho ; $i++ ) {
            $letra      = substr( $alfabeto, rand(0,23), 1); 
            $resultado  .= $letra;
        }
        
        //parte 2
        
        date_default_timezone_set('America/Sao_Paulo');
        //date_default_timezone_set('America/Recife');
        $agora = getdate();

        //parte 3
        $codigo_data = $agora['year'] . "_" . $agora['yday'];
        $codigo_data .= $agora['hours'] . $agora['minutes'] . $agora['seconds'];
        
        /*
        essa funcao na vdd, é para gerar nome de arquivos, onde não se repitam
        
        parte 1 -> o código é gerado a partir da string alfabeto, no rand ele sortei numeros dinamicos, e o substr pega apenas 1 caracter por
        vez e vai concatenando essa letra na variavel resultado
        
        parte 2 -> eu seto a localidade onde estou, 
        
        parte 3 -> agora, a variavel $codigo_data, pega o ano, o dia do ano, horas, minutos e segundos
        
        por fim, eu retorno foto _ano-dia-hrs-min-sec  _valor gerado pelo rand
        */
        
        return "foto_" . $codigo_data . "_" . $resultado;
    }

    function getExtensao($nome) {
        return strrchr($nome,".");
    }

    function publicarImagem($imagem) {
        $arquivo_temporario = $imagem['tmp_name'];
        $nome_original      = $imagem['name'];
        $nome_novo          = gerarCodigoUnico() . getExtensao($nome_original);
        $nome_completo      = "img/img_autor/" . $nome_novo;
        
        if(move_uploaded_file($arquivo_temporario, $nome_completo)) {
            return array("Imagem publicada com sucesso",$nome_completo);   
        } else {
            return array(retornarErro($imagem['error']),"");            
        }        
    }

    function retornarErro($numero_erro) {
            $array_erro = array(
            UPLOAD_ERR_OK =>            "Sem erro.",
            UPLOAD_ERR_INI_SIZE =>      "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
            UPLOAD_ERR_FORM_SIZE =>     "O arquivo excede o limite máximo de 600Kb.",
            UPLOAD_ERR_PARTIAL =>       "O upload do arquivo foi feito parcialmente.",
            UPLOAD_ERR_NO_FILE =>       "Nenhum arquivo foi enviado.",
            UPLOAD_ERR_NO_TMP_DIR =>    "Pasta temporária ausente.",
            UPLOAD_ERR_CANT_WRITE =>    "Falha em escrever o arquivo em disco.",
            UPLOAD_ERR_EXTENSION =>     "Uma extensão do PHP interrompeu o upload do arquivo."
        ); 
        
        return $array_erro[$numero_erro];
    }
    
?>