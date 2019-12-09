<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de estacionamento</title>
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
          <h1>Vagando</h1>
          <h3>Campus Conselheiro Estelita</h3>
      </div>
      <br>

     <section>
        <div class="row" >
        <div class="col-md-12">
          <h2 class="estih2">Total de vagas</h2>

	 	<?php

	include ('conexao.php');
	$consultar_bd = "SELECT * FROM unidadetres";
	$consulta_recebida = mysqli_query($con, $consultar_bd);
	?>

<?php while($linhas_recebidas = mysqli_fetch_assoc($consulta_recebida)){ ?>
	<?php echo "<h3 class='estih3'>"?>
	<?php echo $linhas_recebidas['vagast']; ?>
	<?php echo " de 40" ?>
	<?php echo "</h3>"?>
<?php } ?>
<br>
          <a href="index.php" class="btn btn-warning">Voltar</a>      
      
      </div>
     </section>


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
	 