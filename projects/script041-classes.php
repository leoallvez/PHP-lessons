<?php 
	class Pessoa{
		private $nome;
		private $idade;
		private $sexo;

		function __construct($nome, $idade, $sexo){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->sexo = $sexo;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function getSexo(){
			return $this->idade;
		}

		public function mostra(){
			echo "Nome: ".$this->nome."</br>";
			echo "idade: ".$this->idade."</br>";
			echo "Sexo: ".$this->sexo."</br>";
			echo"</br>";
		}
	}
?>