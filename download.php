<?php
header("Content-type: text/html; charset=utf-8");


// Verifica se algum arquivo foi solicitado 
if(!isset($_GET['file']) || $_GET['file'] == '') { 
	echo "Você não especificou nenhum arquivo."; 
	exit(); 
}

$arquivo = $_GET['file'];
$file =str_replace(' ','',$arquivo);
header("Content-Disposition: attachment; filename=$file");
readfile($file);

?>