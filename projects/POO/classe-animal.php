<?php 
	class Animal{
		private $especie;
		private $peso;
		private $cor;

		public function __construct($especie, $peso, $cor){
			$this->especie = $especie;
			$this->peso = $peso;
			$this->cor = $cor;
		}

		public function getEspecie(){
			return $this->especie;
		}

	    public function mostra(){
	    	echo "Especie: ".$this->especie."</br>";
	    	echo "Peso: ".$this->peso."</br>";
	    	echo "Cor: ".$this->cor."</br>";
	    }
	}
?>