<?php
    require('classes/loader.php'); 
    $auth = new Auth();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
                <h1 class="page-header">Área do cliente
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Área do cliente</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <?php 
            if($auth->verificar() == 0) {
        ?>
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-6">
                <form class="form-signin" role="form" method="post" action="controle/autenticar.php">
                    <h2 class="form-signin-heading">Faça seu login</h2>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required autofocus> <br />
                        <input type="password" name="password" class="form-control" placeholder="Senha" required>
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                </form>   
            </div>

            <div class="col-lg-6">
                <form class="form-signin" role="form" method="post" action="controle/registrar.php">
                    <h2 class="form-signin-heading">Ainda não é registrado ?</h2>
                        <input type="text" name="nome" class="form-control" placeholder="Seu nome" required autofocus> <br />
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required> <br />
                        <input type="password" name="pass" class="form-control" placeholder="Sua senha" required>
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
                </form>   
            </div>
        </div>

        <?php 
            } else {
        ?>
        <div class="row">
            <div class="col-lg-6">
                <h2>Você já esta autenticado (<?php echo $auth->nome; ?>)</h2>
                <h3><a href='controle/logout.php'>(Desconectar)</a></h3>  
            </div>
        <?php
            }
        ?>
        <!-- /.row -->        



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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</body>

</html>
