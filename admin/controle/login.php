<?php
require('../classes/loader.php');

$auth = new Auth();
$return = $auth->autenticar($_POST['user'], $_POST['pass'], '../home.php'); 
if($return == 0)
	echo "<script> alert('Verifique seu e-mail / senha'); location.href='../index.php'; </script>";
?>

?>