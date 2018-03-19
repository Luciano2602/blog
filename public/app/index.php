<?php 
    require_once("../../Conexao/conexao.php");
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
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        
        
        
    </head>

    <body>
        
                
        <div class="container">
            
            <!-- Menu -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#elementoCollapsel">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    
                    <a href="#" class="navbar-brand">Key Solution.com</a>
                                        
                </div>
                
                <div class="collapse navbar-collapse" id="elementoCollapsel">  
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#quemSomos">Quem Somos</a></li>
                        <li><a href="#equipe">Equipe</a></li>
                        
                    </ul>
                                        
                    <form class="navbar-form navbar-right" role="search" >
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Busca" />
                        </div>
                        <input onclick="minhaFuncao()" type="submit" value="Ok" class="btn btn-primary" />
                        
                    </form>
                                        
                    <form class="form-group navbar-right frmLogin" action="login.php" method="get">
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
                            
            </div>
        </nav>
        <!-- fim menu -->  
            
        <!-- corpo  -->
        <div class="row meuCorpo" id="autores">              
            <div class="col-md-4 text-center">
				<h1> 
                    <?php echo "PHP Sou de Mais" ?>                        
                </h1>
                <h4>
                    massa magna, vulputate nec bibendum nec, posuere nec lacus. Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.
                </h4>
                    
                <p>
					Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
				</p>
                    
                <img alt="Einsten " src="../img/einstein.jpg" class="img-responsive img-circle img-thumbnail" />
				<blockquote>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</p> 
                    <small>
                        Someone famous 
                        <cite>
                            Source Title
                        </cite>
                    </small>
				</blockquote>
					
			</div>
			<div class="col-md-4 text-center">
                <h1> 
                    Uma noticia semplis                        
                </h1>
                <h4>
                    massa magna, vulputate nec bibendum nec, posuere nec lacus. Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.
                </h4>
                
                <p>
					Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
				</p>
                    
				<img  alt="Marko" src="../img/bill.jpg" class="img-responsive img-circle img-thumbnail" />
				<blockquote>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</p> 
                    <small>
                        Someone famous 
                        <cite>
                            Source Title
                        </cite>
                        
                    </small>
				</blockquote>
				
			</div>
			<div class="col-md-4 text-center">
                <h1> 
                    Uma noticia semplis                        
                </h1>
                <h4>
                    massa magna, vulputate nec bibendum nec, posuere nec lacus. Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.
                </h4>
                    
                <p>
					Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
				</p>
				<img  alt="Mark" src="../img/einstein.jpg" class="img-responsive img-circle img-thumbnail" />
				<blockquote>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
					</p> 
                    <small>
                        Someone famous 
                        <cite>
                            Source Title
                        </cite>
                    </small>
				</blockquote>
				
			</div>
			
			           
            
                 
        </div>
        <!--fim corpo-->
        
        
        
        <!--Equipe -->
            <div class="row clsMargem" id="equipe">
                <div class="col-md-12">
                    <h1>Nosso Time</h1>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content 
                        here', making it look like readable English. Many desktop publishing packages and web page
                        editors now use Lorem
                        It is a long established fact that a reader will be distracted by the readable content
                        of a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content 
                        here', making it look like readable English. Many desktop publishing packages and web page
                        editors now use Lorem
                        
                    </p>
                </div>
                
				
				<div class="col-md-6 text-center">
					<img  alt="Luciano Miguel" src="../img/luciano.jpg" class="img-responsive img-circle img-thumbnail" />
					
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class="col-md-6 text-center clsNossoTimeR">
					<img  alt="Luciano Miguel" src="../img/luciano.jpg" class="img-responsive img-circle img-thumbnail" />
					
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
        <!-- Fim Equipe-->
        
        <!--Quem Somos -->
        <div class="row clsMargem" id="quemSomos">
                
             <div class="col-md-12">
                 <h2>Quem Somos</h2>
                 <p>
                         
                    Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                     Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum.</small>
                        
                </p>
            </div>
            
                
        </div>    
            
        <!-- Fim quem somos-->
        
        <!-- Roda pe -->
            
        <nav class="navbar navbar-default navbar-fixed-bottom " role="navigation">
             <div class="container-fluid">
                <div class="row">
                        <div class="col-xs-5 largura-footer">
                            
                            <p class="text-rodape-p visible-xs-block visible-sm-block">
                                keysolution.com.br
                            </p>
                            
                            <p class="text-rodape-p visible-md-block visible-lg-block font-lg-p rodaPeLeft">
                                keysolution.com.br
                            </p>
                            
                            
                        </div>
                        <!-- offset- empurra a esquerda os blocos -->
                        <div class="col-xs-7 col-xs-offset largura-footer">
                            
                            <p class="text-rodape-p text-rodape-p-dir visible-xs-block visible-sm-block">
                                Contato@keysolution.com.br
                            </p>
                            
                            <p class="text-rodape-p text-rodape-p-dir visible-md-block visible-lg-block font-lg-p rodaPeRight">
                                Contato@keysolution.com.br
                            </p>

                       </div>
                </div>
            </div>
        </nav>        
            
        
        <!-- //Roda pe -->
        
        </div>    
        <!-- Fim do seu codigo -->
        
        <script src="_JS/scripit.js"></script>
        
    </body>
   
</html>
        
<?php 
    //fechando a conexao
    mysqli_close($conexao);
?>