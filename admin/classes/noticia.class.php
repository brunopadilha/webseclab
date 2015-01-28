<?php
	class Noticia {

		public static function inserirNoticia($titulo, $noticia, $img) {
			$db = new db();
			$noticia = utf8_decode($noticia);
			$titulo = utf8_decode($titulo);
			$query = $db->conexao->query("INSERT INTO noticia VALUES ('', '$titulo', '$noticia', '$img') ");
			if($query)
				return(1);

			return(0);
		}



		public static function listarNoticias() {
			$db = new db();
			$query = $db->conexao->query("SELECT * FROM noticia ORDER BY noticia_id DESC");
			

			echo "<ul>";
			while($data = mysqli_fetch_array($query)) 
				echo "<li>".utf8_encode($data['titulo'])."</li>";
			echo "</ul>";

		}


	}
?>