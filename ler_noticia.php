<?php 
require('classes/loader.php'); 
$auth = new Auth();
@ $id = $_GET['id'];
if(!isset($_GET['id']) or $_GET['id'] == '')
echo "<script> location.href='index.php'; </script>";

$db = new db();
$request = $_SERVER['REQUEST_URI'];
$db->conexao->query("INSERT INTO debug VALUES ('', '$request') ");



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--
        Hoje contei pras paredes
        Coisas do meu coração
        Passeei no tempo
        Caminhei nas horas
        Mais do que passo a paixão
        É um espelho sem razão
        Quer amor fique aqui?

        Meu peito agora dispara
        Vivo em constante alegria
        É o amor que está aqui
        
        for(i = 0; i < 8; i++) {
            if(i == 3 || i == 7)
                AAAAAmoor i love yoooou
            else
                Amor I love you
        }
    -->
    <title>OFICINA: prevenção e detecção de vulnerabilidades em sistemas WEB </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.php"><strong>WEBSEC LAB</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                    $menu = new Menu();
                ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <ol class="breadcrumb">
                    <li><a href="noticias.php">Notícias</a>
                    </li>
                    <li class="active">Lendo notícia</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-12">


                <?php
                    Noticia::lerNoticia($id);
                ?>  


                <div class="well">
                    <h4>Deixe um comentário</h4>
                    <form role="form" method="post" action="controle/postar.php">
                    <?php if($auth->verificar() == 1) { ?>
                        <div class="form-group">
                            <textarea class="form-control" name="comentario" rows="3"></textarea>
                            <input type="hidden" value="<?php echo $id; ?>" name="noticia_id" />
                            <input type="hidden" value="<?php echo $_COOKIE['codigo']; ?>" name="usuario_id" />
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    <?php } else { ?>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" disabled>Apenas usuários registrados podem comentar!</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Enviar</button>
                    <?php } ?>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->
                <?php
                    Comentario::exibirComentarios($id);
                ?>


            </div>


        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; WebSec Lab</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
