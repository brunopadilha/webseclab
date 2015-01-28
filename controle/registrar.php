<?php
header('Content-Type: text/html; charset=utf-8');
require('../classes/loader.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pass'];

$db = new db();
	if( $nome != "" && $email != "" && $senha != "" ) {

		$codigo = mt_rand();
		$query = $db->conexao->query("INSERT INTO usuario VALUES ('', '$nome', '$email', '$senha', '$codigo') ");
		if($query) {
			$auth = new Auth();
			$auth->autenticar($email, $senha, '../index.php');
		}
		else 
		{
			echo utf8_encode("<script>
					alert('Ocorreu um erro durante o registro. Tente novamente');
					location.href='../area_cliente.php';
				</script>");
		}

	} else {
	echo utf8_encode("<script>
			alert('Ocorreu um erro durante o registro. Tente novamente');
			location.href='../area_cliente.php';
		</script>");
	}
?>