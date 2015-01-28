<?php
	class Auth {

		public function autenticar($nome, $senha, $pagina) {
			$db = new db();
			$query = $db->conexao->query("SELECT codigo FROM administrador WHERE nome = '$nome' AND passwd = '$senha' ");

			// se a query retornar os dados, significa que esse usuario existe
			if(mysqli_num_rows($query) == 0) { return(0); }

			$data = mysqli_fetch_array($query);
			setcookie("adm", $nome, 0, "/");
			setcookie("code", $data['codigo'], 0, "/");
			Header("Location: $pagina");
		}

		public function verificar() {
			// Verifica se os cookies de autenticaçao foram definidos
			$db = new db();

			if(!isset($_COOKIE['adm']) && !isset($_COOKIE['adm'])) 
				return(0);
			
			// Busca pelo codigo de autenticaçao atraves do nome do adm
			$adm = $_COOKIE['adm'];
			$query = $db->conexao->query("SELECT codigo FROM administrador WHERE nome = '$adm'");
			
			// Se a busca nao retornar resultados, o usuario nao esta autenticado
			if(mysqli_num_rows($query) == 0)
				return(0);

			// Se a busca retornar, verifica se o codigo de autenticacao eh o mesmo informado
			$data = mysqli_fetch_array($query);
			if($data['codigo'] != $_COOKIE['code'])
				return(0);

			return(1);
		}

		public function desconectar() {
			setcookie("adm", 0, 0, "/");
			setcookie("code", 0, 0, "/");
			return(1);
		}



		
	}

?>