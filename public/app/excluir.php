<?php require_once("../../Conexao/conexao.php"); ?>
<?php
    
    //dando star na variavel de sessao
    session_start();
    
    //verificando se não tem um susario conectado, sendo assim volta a tela de login 
    if ( !isset($_SESSION["user_portal"])){
        header("location:login.php");
        //break;
    }

    //verificando se tem id
    if(isset($_GET['id_post'])){
        $id_post = $_GET['id_post'];
        
        $post = "select id_post, id_autor, titulo, sub_titulo, noticia, imagem,fraseAutor,textoCurto ";
        $post .= "from post ";
        $post .= "where id_post = '{$id_post}' ";
        
        $resultadoPost = mysqli_query($conexao, $post);
        
        $listaPost = mysqli_fetch_assoc($resultadoPost);
        
        if(!$resultadoPost){
            die("Falha na consulta");
        }
    }

    if(isset($_POST['titulo'])){
        
       $id_post = $_POST["id_post"];
        
        
        $delete = "delete from post ";
        $delete .= "where  id_post = {$id_post} ";
        
        
        $deletendoDB = mysqli_query($conexao, $delete);
        
        if(!$deletendoDB){
            die("Erro na alteração");
        }else{
            header("location:index3.php");
        }
    }

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--
        <link href="../../BootStrep/css/._bootstrap.min.css" rel="stylesheet">
        -->
        <link href="_CSS/estilo.css" rel="stylesheet">
        <link href="_CSS/estilo1.css" rel="stylesheet">
        <link href="_CSS/estiloAlterarPost.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        
        
        
    </head>

    <body>
        
                
        <main class="container">
        
        <div class="row">  
            <h2>Exclusão</h2>
            <form action="excluir.php" method="post">
                <div class="input-group">
                    <label for="titulo">titulo</label>
                    <input type="text" class="form-control" placeholder="Search" 
                           value="<?php echo utf8_encode($listaPost['titulo']) ?>" 
                           name="titulo" 
                    >
                </div>
                <div class="input-group">
                    <label for="sub_titulo">Sub Titulo</label>
                    <input class="form-control" placeholder="Search"
                           type="text" value="<?php echo utf8_encode($listaPost['sub_titulo']) ?>" 
                           name="sub_titulo" 
                    >
                </div>
                <div class="input-group">
                    <label for="noticia">Noticia</label>
                    <input class="form-control" placeholder="Search"
                           type="text" value="<?php echo utf8_encode($listaPost['noticia']) ?>" 
                           name="noticia" 
                    >
                </div>
                <div class="input-group">
                    <img alt="" src="<?php echo $listaPost['imagem'] ?>" class="img-responsive img-circle img-thumbnail" />
                </div>
                
                <div class="input-group">
                    <label for="fraseAutor">Frase Autor</label>
                    <input class="form-control" placeholder="Search"
                           type="text" value="<?php echo utf8_encode($listaPost['fraseAutor']) ?>" 
                           name="fraseAutor" 
                    >
                </div>
                <div class="input-group">
                    <label for="textoCurto">Texto Curto</label>
                    <input class="form-control" placeholder="Search"
                           type="text" value="<?php echo utf8_encode($listaPost['textoCurto']) ?>" 
                           name="textoCurto" 
                    >
                </div>    
                
                <!-- campo escondido -->
                <input type="hidden" name="id_post" value="<?php echo $listaPost['id_post'] ?>">
                
                <div class="input-group">    
                    <button type="submit" class="btn btn-warning">Excluir</button>
                </div>
                
            </form>
               					                
			
          
        </div>
       
        <!--fim corpo-->
        </main>
        
        <script src="_JS/scripit.js"></script>
        
    </body>
   
</html>
        
<?php 
    //fechando a conexao
    mysqli_close($conexao);
?>