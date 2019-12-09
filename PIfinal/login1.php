<!DOCTYPE html>




<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de Estacionamento</title>
    <link rel="icon" href="img/favicon.png">
    
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo5.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

    <nav class="navbar navbar-inverse  navbar-transparente">
      <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" 
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">Alterar Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="http://www.fametro.com.br/" class="navbar-brand"><img src="img/logo.png" class="img-responsive"></a>
        </div>

        <div class="collapse navbar-collapse" id="barra-navegacao">
          
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="index.php">Página Inicial</a> </li>
            <li> <a href="http://www.fametro.com.br/noticias/">Notícias</a> </li>
            <li> <a href="http://www.fametro.com.br/institucional/comissao-propria-de-avaliacao/">CPA</a> </li>
            <li> <a href="http://www.fametro.com.br/contato/">Contato</a> </li>

          </ul>

        </div>
      
      </div>

    </nav>
   
    <div class="capa">
      
      <div class="texto-capa ">
          <h1>Unidade I</h1>
      </div>

       <div class="col-sm-12" align="center">
       </br>
              
                <form method="POST" action="" id="box" class="modal-sm">
                  <h3 class="log">Formulário de Login:</h3>
                    <div class="form-group">
                        <input type="text" name="login" class="form-control" id="tnome" placeholder="Digite seu nome" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type="password" name="senha" class="form-control" id="psenha" placeholder="Digite sua senha">
                    </div>

                    <button type="submit" name="enviar" class="btn btn-logar">Logar</button>

                     <input type="reset" class="btn btn-reset"
                              data-toggle="modal" data-target="#janela">
                                  
                      </button>
                      

<?php

if(isset($_POST['enviar'])) {
include ("conexao.php");

$login=$_POST['login'];
$senha=$_POST['senha'];

$resultado_recebido=mysqli_query($con, "SELECT * FROM usuarioum WHERE nome='$login' AND senha='$senha'");
$resultado_confirmar=mysqli_affected_rows($con);

if($resultado_confirmar > 0){
$num=rand(100000, 600000);
session_start();
$_SESSION['numLogin'] = $num;
$_SESSION['usuario'] = $login;

header("Location:monitorar1.php?session=$num");

}else{
  
  echo"<p style='color: black; margin-top:5px;'>Login ou senha Inválidos.<p>";
  
  //$redirect = "index.php";
  //header("location:$redirect");
} 

mysqli_close($con);
}
?>
                </form>
              </div>

      

    </div>
    <br>
    <br>

    
    <footer id="rodape">
      <div class="container">
        <div class="row">

          <div class="col-md-2">
             <span class="img-logo"></span>
          </div>

          <div class="col-md-2">
            <h4 align="center">Campi</h4>
            <ul align="center" class="nav">
              <li><a href="">Fortaleza</a></li>
              <li><a href="">Maracanaú</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h4 align="center">Graduação</h4>
            <ul align="center" class="nav">
              <li><a href="">Bacharelado</a></li>
              <li><a href="">Licenciatura</a></li>
              <li><a href="">Tecnólogo</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h4 align="center">Extensão</h4>
            <ul align="center" class="nav">
              <li><a href="">Programa Expandir</a></li>
              <li><a href="">Cursos de Extensão</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="nav">
              <li class="rede-social"><a href=""><img src="img/facebook.png"></a></li>
              <li class="rede-social"><a href=""><img src="img/instagram.png"></a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </footer>

   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>