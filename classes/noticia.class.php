<?php
	class Noticia {


		// LISTAR A NOTICIA PARA USUARIOS
		public static function listarNoticias() {
			$db = new db();
			$tem_noticia = 0;

			$query = $db->conexao->query("SELECT * FROM noticia ORDER BY noticia_id DESC"); 
			
			
			// Coloca os resultados no HTML e exibe na tela
			while($data = mysqli_fetch_array($query)) {
				$tem_noticia = 1;	
		        echo "<div class=\"row\">
		            <div class=\"col-md-5\">
		                <a href=\"ler_noticia.php?id=".$data['noticia_id']."\">
		                    <img class=\"img-responsive img-hover\" src=\"img/noticias/".$data['img']."\" alt=\"\">
		                </a>
		            </div>
		            <div class=\"col-md-6\">
		                <h3><a href=\"ler_noticia.php?id=".$data['noticia_id']."\">".utf8_encode($data['titulo'])."</a>
		                </h3>
		                <p>
		                ".substr(utf8_encode($data['texto']), 0, 155)."
		                </p>
		                <a class=\"btn btn-primary\" href=\"ler_noticia.php?id=".$data['noticia_id']."\">Leia mais  <i class=\"fa fa-angle-right\"></i></a>
		            </div>
		        </div><hr>";
		        
			}

			/* TODO: controle de paginação */
		}	

		// PROCURA A NOTICIA E EXIBE NA TELA
		public static function lerNoticia($id) {
				$db = new db();
				$query = $db->conexao->query("SELECT titulo, texto, img FROM noticia WHERE noticia_id = $id ");
				if(mysqli_num_rows($query) == 0 ) {
					echo "Essa notícia não existe!";
					exit(1); 
				}
				$data = mysqli_fetch_array($query);

			    echo "

                <h2>".utf8_encode($data['titulo'])."</h2>

                <hr>

                <!-- Preview Image -->
                <img class=\"img-responsive\" src=\"img/noticias/".$data['img']."\" alt=\"\">

                <hr>

                <p class=\"lead\">
                ".utf8_encode($data['texto'])."
                </p>

                <hr>";
		}

	}
?>