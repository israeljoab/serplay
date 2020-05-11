<?php
	class Conta {

		private $conex;
		private $erroArray;

		public function __construct($conex) {
			$this->conex = $conex;
			$this->erroArray = array();
		}

		public function registrar ($mat, $nomCom, $em, $em2, $sen, $sen2) {
			$this->validarMatricula($mat);
			$this->validarNomeCompleto($nomCom);
			$this->validarEmails($em, $em2);
			$this->validarSenhas($sen, $sen2);

			if(empty($this->erroArray) == true) {
				return $this->inserirDetalhesUsuario($mat, $nomCom, $em, $sen);

			}
			else {
				return false;
			}

		}

		public function getErro($erro) {
			if(!in_array($erro, $this->erroArray)) {
				$erro = "";
			}
			return "<span class='errorMessage'>$erro</span>";
		}

		private function inserirDetalhesUsuario($mat, $nomCom, $em, $sen) {
			$segurancaSen = md5($sen);
			$imagemPerfil = "assets/imagens/imagens-perfil/perfil1.png";
			$date = date("Y-m-d");

			$resultado = mysqli_query($this->conex, "INSERT INTO usuarios VALUES ('', '$mat', '$nomCom', '$em', '$segurancaSen', '$date', '$imagemPerfil')");
			return $resultado;
		}

		private function validarMatricula($mat) {

			if(strlen($mat) > 25 || strlen($mat) < 5) {
				array_push($this->erroArray, Constantes::$matriculaTamanho);
				return;
			}

		}

		private function validarNomeCompleto($nomCom) {
			if(strlen($nomCom) > 25 || strlen($nomCom) < 3) {
				array_push($this->erroArray, Constantes::$nomeCompleto);
				return;
			}
		}

		private function validarEmails($em, $em2) {
			if($em != $em2) {
				array_push($this->erroArray, Constantes::$emailsDiferentes);
				return;
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->erroArray, Constantes::$emailInvalido);
				return;
			}

		}

		private function validarSenhas($sen, $sen2) {
			
			if($sen != $sen2) {
				array_push($this->erroArray, Constantes::$senhasDiferentes);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $sen)) {
				array_push($this->erroArray, Constantes::$senhasAlfanumericas);
				return;
			}

			if(strlen($sen) > 30 || strlen($sen) < 5) {
				array_push($this->erroArray, Constantes::$senhasTamanho);
				return;
			}

		}


	}
?>