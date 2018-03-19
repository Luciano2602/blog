<?php require_once("../../Conexao/conexao.php"); ?>
<?php include_once("_incluir/funcao.php"); ?>

<?php
// não esquecer de incluir a funcao para cadastrar a imagem 
    
    //dando star na variavel de sessao
    session_start();
    
    //verificando se não tem um susario conectado, sendo assim volta a tela de login 
    if ( !isset($_SESSION["user_portal"])){
        header("location:login.php");
        //break;
    }
    
    
    // conferir se a navegacao veio pelo preenchimento do formulario
    if( isset($_POST["titulo"]) ) {
        
       /*
        
       echo "Ola mundo" ;
         
        echo "<pre>";
            print_r($_FILES['foto_grande']);
        echo "</pre>";
         $nomeArquivo = $resultado1['name'];
       $mensagem1 = $resultado[0]; 
        
        echo "<p>";
            echo $mensagem1 . " --- " . $imagem;
        echo "</p>";
        
        */
        
        
        $resultado1 = publicarImagem($_FILES['foto_grande']);
        $mensagem1 = $resultado1[0];
        $imagem = $resultado1[1];
                
        
        $titulo         = utf8_decode($_POST['titulo']);
        $sub_titulo     = utf8_decode($_POST['sub_titulo']);
        $texto          = utf8_decode($_POST['texto']);
        $fotoAutor      = $imagem;
        $fraseQualquer  = utf8_decode($_POST['fraseQualquer']);
        $textoCurto     = utf8_decode($_POST['textoCurto']);
        $idAutor        = $_POST['idAutor'];
        
        // Insercao no banco
        $inserir = "INSERT INTO post ";//imagem
        $inserir .="(id_autor, titulo, sub_titulo,noticia,fraseAutor,textoCurto,imagem) ";
        $inserir .="VALUES "; 
        $inserir .="($idAutor,'$titulo','$sub_titulo', '$texto','$fraseQualquer','$textoCurto','$fotoAutor')";
        
        $qInserir = mysqli_query($conexao,$inserir);
        
        if(!$qInserir) {
            die("Erro na insercao " );   
        } else {
            $mensagem = "Inserção ocorreu com sucesso.";
        }
        
       
    }
    
    

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>blog Cadastro Posts</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--
        <link href="../../BootStrep/css/._bootstrap.min.css" rel="stylesheet">
        -->
        <link href="_CSS/estilo.css" rel="stylesheet">
        <link href="_CSS/estilo1.css" rel="stylesheet">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </head>

    <body>
                
        <div class="container">
            <div class="row"> 
                <h1>Cadastro Posts</h1>
                <div class="col-xs-6">
                    
                    <!--
                        class="form-inline" deixa o forme um ao lado do outro
                    -->
                    <!--form-horizontal habilita o uso da class col no form -->
                    <form class="form-horizontal" action="cadastrarPost.php" method="post" enctype="multipart/form-data"> 
                        
                        <div class="form-group">
                            <!--control-label esta avisando o boostrap que é um label-->
                            <label for="titulo" class="col-xs-3 control-label" >Titulo:</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="titulo" placeholder="Titulo:" />
                            </div>
                            
                        </div>
                         
                        <div class="form-group">
                            <!--control-label esta avisando o boostrap que é um label-->
                            <label for="sub_titulo" class="col-xs-3 control-label" >Sub Titulo:</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" id="frm-msg" name="sub_titulo" placeholder="Sub Titulo:" />
                            </div>
                            
                        </div> 
                        
                        <div class="form-group">
                            <!--control-label esta avisando o boostrap que é um label-->
                            <label for="texto" class="col-xs-3 control-label" >Texto:</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" id="frm-Txt" name="texto" placeholder="Texto:" />
                            </div>
                            
                        </div>
                          
                        <!-- foto -->
                        
                        <!--
                    	<input type="hidden" name="MAX_FILE_SIZE" value="614400">
                        <div class="form-group">
                            <label for="foto" class="col-xs-3 control-label">Foto:</label>
                            <div>
                                <input class="form-control" id="abrirArquivo" type="file" name="foto_grande">
                            </div>                            
                          
                          
                        </div>
                        -->
                        <!-- campo de estoque -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="614400">
                    
                        <!-- campo de foto grande -->
                        <label>Foto </label>
                        <input type="file"   name="foto_grande">
                        <span class="">
                            <?php
                                if( isset($mensagem1) ) {
                                    echo $mensagem1;
                                }    
                            ?>
                        </span>
                            
                      
                        
                        
                        <!-- fim foto -->
                            
                        <div class="form-group">
                            <!--control-label esta avisando o boostrap que é um label-->
                            <label for="fraseQualquer" class="col-xs-3 control-label" >Frase:</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" id="frm-msg" name="fraseQualquer" placeholder="Frase:" />
                            </div>
                            
                        </div> 
                        
                        <div class="form-group">
                            <!--control-label esta avisando o boostrap que é um label-->
                            <label for="textoCurto" class="col-xs-3 control-label" >Texto Curto:</label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" id="frm-msg" name="textoCurto" placeholder="Texto Curto:" />
                            </div>
                            
                        </div> 
                        
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-6">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <a href="index3.php" class="btn btn-default">Home</a>
                            </div>
                        </div>
                        
                        <?php
                            if( isset($mensagem) ) {
                                echo "<p>" . $mensagem . "</p>";
                            }
                        ?>     
                        
                        
                        <!-- campo escondido com o id do Autor-->
                        <input type="hidden" name="idAutor" value="<?php echo $_SESSION["user_portal"]; ?>">
                    </form>
                    
                </div>    
            </div>
        </div>
        
        
        
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>