<?php
require("classes/loader.php");
$auth = new Auth();
if($auth->verificar() == 1) {
    header("Location: controle/logout.php");
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

    <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-signin" role="form" action="controle/login.php" method="post">
          <h2 class="form-signin-heading">Área administrativa</h2>
          <input type="text" class="form-control" name="user" placeholder="Usuario" required autofocus><br />
          <input type="password" class="form-control" name="pass" placeholder="Senha" required><br />
          <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
