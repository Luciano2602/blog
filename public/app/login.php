<?php require_once("../../Conexao/conexao.php"); ?>
<?php 
    //addd variavel de seccao
    session_start();

    if( isset($_POST["usuario"]) ){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        $login = "SELECT id_autor, login, senha "; 
        $login .= "FROM login a INNER JOIN autorlogin b "; 
        $login .= "ON a.id_login = b.id_login "; 
        $login .= "WHERE login = '{$usuario}' AND senha= '{$senha}' "; 
        
        
        
        /*
        select a.id_login, a.login, a.senha, c.nome, c.id_autor
        from login a inner join autorlogin b
        on a.id_login = b.id_login
        inner join autor c
        on c.id_autor = b.id_autor;
        
        select 
        id_autor, login, senha
        from login a inner join autorlogin b
        on a.id_login = b.id_login
        where login ='admin' and senha='123'
        */
        $acesso = mysqli_query($conexao, $login);
        
        if (!$acesso){
            die("Falha na consulta");
        }
        
        $informacao = mysqli_fetch_assoc($acesso);
        
        //verifica se tem elemento
        if( empty($informacao) ){
            $mensagem = "Login sem sucesso";
        }else{
            $_SESSION["user_portal"] = $informacao["id_autor"];
            header("Location: index3.php");
        }
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>blog login</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        
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
                <div class="col-xs-6">
                    
                    <!--
                        class="form-inline" deixa o forme um ao lado do outro
                    -->
                    <!--form-horizontal habilita o uso da class col no form -->
                    <h2>Tela de Login</h2>
                    <form class="form-horizontal" action="login.php" method="post"> 
                        
                        <div class="form-group">
                            <!--control-label esta avisando o boostrap que é um label-->
                            <label for="login" class="col-xs-2 control-label" >Login: </label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" name="usuario" placeholder="Login:" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <!--control-label esta avisando o boostrap que é um label-->
                            <label for="senha" class="col-xs-2 control-label" >Senha: </label>
                            <div class="col-xs-10">
                                <input type="password" class="form-control" name="senha" placeholder="Senha:" />
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" value="login" class="btn btn-default btn-primary">Logar</button>
                            </div>
                        </div>
                        
                    </form>
                    <?php 
                        //verificando se exite mensagem, se tiver mostra
                        if (isset($mensagem)){
                    ?>
                    <p>
                        <?php echo $mensagem ?>
                    </p>
                    <?php 
                        }
                    ?>
                    
                </div>    
                
                
            </div>
        </div>
          
        
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>