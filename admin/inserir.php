<?php
require("classes/loader.php");
$auth = new Auth();
if($auth->verificar() == 0) {
    header("Location: index.php");
    exit(1);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MINICURSO: Entendendo e prevenindo vulnerabilidades em sistemas web </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><strong>WEBSEC LAB</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a href="inserir.php"><strong>Inserir notícia</strong></a>
                  </li>
                  <li>
                      <a href="noticia.php"><strong>Listar notícias</strong></a>
                  </li>
                  <li>
                      <a href="controle/logout.php"><strong>Sair</strong></a>
                  </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

          <h1>Inserir notícia</h1>
          <hr />
            <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="form" enctype="multipart/form-data" role="form" method="post" action="controle/inserir_noticia.php">
                       <input type="text" name="titulo" class="form-control" placeholder="Título da notícia" required autofocus> <br />
                       <textarea cols="69" rows="10" name="noticia" placeholder="Texto da notícia" required></textarea> <br /><br />
                        <input type="file" name="img" title="Adicione uma imagem para sua notícia" required><br /><br />    
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Inserir</button>
                </form>   
            </div>
        </div>


    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.file-input.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    $('input[type=file]').bootstrapFileInput();
    </script>

</body>

</html>
