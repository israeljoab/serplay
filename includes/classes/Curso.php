<?php
	class Curso {

		private $conex;
		private $id;
		private $titulo;
		private $lecionadorId;
		private $materias;
		private $caminhoCapa;

		public function __construct($conex, $id) {
			$this->conex = $conex;
			$this->id = $id;

			$query = mysqli_query($this->conex, "SELECT * FROM cursos WHERE id='$this->id'");
			$curso = mysqli_fetch_array($query);

			$this->titulo = $curso['titulo'];
			$this->lecionadorId = $curso['lecionador'];
			$this->materias = $curso['materias'];
			$this->caminhoCapa = $curso['caminhoCapa'];
		}

		public function getTitulo() {
			return $this->titulo;
		}

		public function getLecionador() {
			return new Lecionador($this->conex, $this->lecionadorId);
		}

		public function getMaterias() {
			return $this->materias;
		}

		public function getCaminhoCapa() {
			return $this->caminhoCapa;
        }
        
        public function getQtdMedia() {
			$query = mysqli_query($this->conex, "SELECT id FROM media WHERE curso='$this->id'");
			return mysqli_num_rows($query);
		}
		
		public function getMediaIds() {
			$query = mysqli_query($this->conex, "SELECT id FROM media WHERE curso='$this->id' ORDER BY
			 ordemCurso ASC");

			 $array = array();

			 while($row = mysqli_fetch_array($query)) {
				 array_push($array, $row['id']);
			 }

			 return $array;
		}
    }
?>