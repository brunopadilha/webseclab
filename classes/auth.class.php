<?php
	class Auth {
		public $nome;


		public function autenticar($email, $senha, $pagina) {
			$db = new db();
			$query = $db->conexao->query("SELECT codigo FROM usuario WHERE email = '$email' AND passwd = '$senha' ");

			// se a query retornar os dados, significa que esse usuario existe
			if(mysqli_num_rows($query) == 0) { return(0); }

			$data = mysqli_fetch_array($query);
			setcookie("usuario", $email, 0, "/");
			setcookie("codigo", $data['codigo'], 0, "/");
			Header("Location: $pagina");
		}

		public function verificar() {
			// Verifica se os cookies de autenticaçao foram definidos
			$db = new db();

			if(!isset($_COOKIE['usuario']) && !isset($_COOKIE['codigo'])) 
				return(0);
			
			// Busca pelo codigo de autenticaçao atraves do email
			$email = $_COOKIE['usuario'];
			$query = $db->conexao->query("SELECT nome, codigo FROM usuario WHERE email = '$email'");
			
			// Se a busca nao retornar resultados, o usuario nao esta autenticado
			if(mysqli_num_rows($query) == 0)
				return(0);

			// Se a busca retornar, verifica se o codigo de autenticacao eh o mesmo informado
			$data = mysqli_fetch_array($query);
			if($data['codigo'] != $_COOKIE['codigo'])
				return(0);

			$this->nome = $data['nome'];

			return(1);
		}

		public function desconectar() {
			setcookie("usuario", 0, 0, "/");
			setcookie("codigo", 0, 0, "/");
			return(1);
		}



		
	}

?>