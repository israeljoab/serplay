<?php
	class Lecionador {

		private $conex;
        private $id;

		public function __construct($conex, $id) {
			$this->conex = $conex;
			$this->id = $id;
        }

        public function getNome() {
            $lecionadorQuery = (mysqli_query($this->conex, "SELECT nome FROM lecionadores WHERE id='$this->id'"));
            $lecionadores = mysqli_fetch_array($lecionadorQuery);
            return $lecionadores['nome'];
        }
        
    }

?>