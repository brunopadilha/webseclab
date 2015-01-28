<?php
header('Content-Type: text/html; charset=utf-8');
require('../classes/loader.php');
$noticia_id = $_POST['noticia_id'];
$usuario_id = $_POST['usuario_id'];
$comentario = $_POST['comentario'];

$db = new db();
$referer = $_SERVER['HTTP_REFERER'];

if($noticia_id != "" && $comentario != "") {
	$consulta_id = $db->conexao->query("SELECT usuario_id FROM usuario WHERE codigo = $usuario_id ");
	$data = mysqli_fetch_array($consulta_id);
	$usuario_id = $data['usuario_id'];

	$insert = Comentario::postarComentarios($usuario_id, $noticia_id, $comentario);
	
	if($insert) {
			echo utf8_encode("<script>
				alert('Seu comentario foi inserido com sucesso!');
				location.href='$referer';
			</script>");
			exit(1);
	} else {
			echo utf8_encode("<script>
				alert('Erro ao inserir seu comentario!');
				location.href='$referer';
			</script>");
			exit(1);	
	}
}
?>