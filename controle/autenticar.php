<?php
header('Content-Type: text/html; charset=utf-8');
require('../classes/loader.php');
/* recurso nao recomendavel, apenas implementei desse modo para economizar tempo */
$page = $_SERVER['HTTP_REFERER']; 
$auth = new Auth();
$return = $auth->autenticar($_POST['email'], $_POST['password'], $page); 
if($return == 0)
	echo "<script> alert('Verifique seu e-mail / senha'); location.href='../index.php'; </script>";
?>