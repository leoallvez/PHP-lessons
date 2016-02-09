<?php
	include "classe-animal.php"; 

	class Mamifero extends Animal{

		private $alimento;
		private $som;

		function __construct($especie, $peso, $cor, $alimento, $som){
			#Chamando contrutor da classe pai.
			parent::__construct($especie, $peso, $cor);
			$this->alimento = $alimento;
			$this->som = $som;
		}
		#Essa função reecreve a função da classe Pai.
		public function mostra(){
			#Chamando função da classe pai.
	    	parent::mostra();
	    	echo "Alimento: ".$this->alimento."</br>";
	    	echo "Som: ".$this->som."</br>";
	    }
	}

?>