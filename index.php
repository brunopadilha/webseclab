<?php require('classes/loader.php'); ?>
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

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080/333333/428BCA/&text=WebSec LAB');"></div>
                <div class="carousel-caption">
                    <h3 style="color: #ccc">Desenvolvido por Bruno Padilha</h3>
                </div>
            </div>
        </div>

    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    OFICINA: prevenção e detecção de vulnerabilidades em sistemas WEB
                </h1>
            </div>
        </div>


        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p><strong>"The best way to predict your future is to create it"</strong></p>
                </div>
            </div>
        </div>

        <hr>

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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

    <!-- 
        Eu vou gozar a vida hoje em 24 horas
        O mulherio já sabe que essa noite é toda nossa
        Caçar e ser caçado na balada só gostosas
        DJ turbine o som que o LP já tá na roda
        A zona continua

        After party
        No pool party
        As minas todas nuas
        As latinetes de topless e de bumbum pra lua
        E eu na captura virando uma presa sua
        Ninguém me segura

        É despedida de solteiro
        Amanhã talvez eu vá casar
        Eu tô chapado
        Tô muito louco
        E a ressaca vai me matar
        Eu ligo um "dane-se"
        Eu quero só beijar, brincar de te laçar, laçar

        Laçar, puxar, beijar
        Vou te pegar
        Laçar, puxar, beijar
        Pra galopar
        Só pra galopar

        Te lacei
        Vem cá, meu peixe grande
        Baby baby, keep cool
        Eu tô eletrizante
        Amanhã é o "Dia D"
        Preciso aproveitar
        Convida as amigas pra gente zoar, galopar, galopar
    -->
</html>
