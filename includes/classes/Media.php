<?php
	class Media {

		private $conex;
        private $id;
        private $dadosMysqli;
        private $titulo;
        private $lecionadorID;
        private $cursoID;
        private $materias;
        private $duracao;
        private $caminho;

		public function __construct($conex, $id) {
			$this->conex = $conex;
			$this->id = $id;

			$query = mysqli_query($this->conex, "SELECT * FROM media WHERE id='$this->id'");
            $this->dadosMysqli = mysqli_fetch_array($query);
            $this->titulo = $this->dadosMysqli['titulo'];
            $this->lecionadorID = $this->dadosMysqli['lecionador'];
            $this->cursoID = $this->dadosMysqli['curso'];
            $this->materias = $this->dadosMysqli['materias'];
            $this->duracao = $this->dadosMysqli['duracao'];
            $this->caminho = $this->dadosMysqli['caminho'];
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getLecionador() {
            return new Lecionador($this->conex, $this->lecionadorID);
        }

        public function getCurso() {
            return new Curso($this->conex, $this->cursoID);
        }

        public function getCaminho() {
            return $this->caminho;
        }

        public function getDuracao() {
            return $this->duracao;
        }

        public function getDadosMysqli() {
            return $this->dadosMysqli;
        }

        public function getMaterias() {
            return $this->materias;
        }

    }
?>