<?php
header('Content-Type: text/html; charset=utf-8');
require("../classes/loader.php");
define("DIR", "../../img/noticias/");

$titulo = $_POST['titulo'];
$noticia = $_POST['noticia'];
$arquivo = DIR . $_FILES['img']['name'];


if(move_uploaded_file($_FILES['img']['tmp_name'], $arquivo)) {
	$return = Noticia::inserirNoticia( $titulo, $noticia, $_FILES['img']['name'] );
	if ($return == 1) {
		echo "<script> alert('Notícia enviada com sucesso!'); location.href='../inserir.php'; </script>";	
		exit(1);
	} else {
		echo "<script> alert('Erro ao enviar notícia!'); location.href='../inserir.php'; </script>";
		exit(1);
	} 
}

echo "<script> alert('Erro ao enviar notícia!'); location.href='../inserir.php'; </script>";
exit(1);


?>