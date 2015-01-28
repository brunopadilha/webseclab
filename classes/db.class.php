<?php
	class db {
		public $conexao;
		
		public function __construct($server = 'localhost', $user = 'root' , $pass = 'yourdbpassword' , $db = 'webseclab') {
			$this->conexao = new mysqli($server, $user, $pass, $db);
			if (mysqli_connect_errno())
			{
				echo "Não foi possível conectar com o banco de dados.";
				exit(1);
			}
		}

		public function __destruct() {
			mysqli_close($this->conexao);
		}

	}
?>
