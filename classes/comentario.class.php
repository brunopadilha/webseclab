<?php
	class Comentario {


		public static function exibirComentarios($noticia_id) {
			$db = new db();
			$query = $db->conexao->query("
				SELECT c.comentario, u.nome 
				FROM comentario c
				INNER JOIN usuario u
				ON c.usuario_id = u.usuario_id
				WHERE c.noticia_id = '$noticia_id' 
				ORDER BY c.comentario_id DESC");


			while($data = mysqli_fetch_array($query)) {
				echo    "<div class=\"media\">
		                    <div class=\"media-body\">
		                        <h4 class=\"media-heading\">".$data['nome']."</h4>
		                    	".utf8_encode($data['comentario'])."    
		                    </div>
		                </div>                
		                <hr>";
				}
		}


		public static function postarComentarios($usuario_id, $noticia_id, $comentario) {
			
			if(empty($usuario_id) || empty($noticia_id) || empty($comentario) )
			{
				echo "Não foi possível enviar seu comentário.";
				exit(1);
				return(0);
			}

			$db = new db();
			$comentario = utf8_decode($comentario);
			$query = $db->conexao->query("INSERT INTO comentario VALUES ('', '$usuario_id', '$noticia_id', '$comentario')");

			if($query) 
				return(1);
			
			return(0);
		}







	}
?>