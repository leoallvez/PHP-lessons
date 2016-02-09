<?php

class Calculo{
	protected $m1; #nota m1.
	protected $nd; #nota dicliplina.
	protected $ni; #nota integrada.
	protected $m2; #nota m2.
	protected $me; #média final.

	public function __construct($m1, $nd, $ni){
		$this->$m1 = $m1;
		$this->$nd = $nd;
		$this->$ni = $ni;
	}

	#essa função calcula a nota da m2.
	public function calculaM2($nd, $ni){
		$this->m2 = number_format((($nd * 0.70 )+( $ni * 0.30)),1);
	}

	public function getM2(){
		return $this->m2;
	}
	# essa função tem uma simula uma sobrecarga de 
	public function calculaMedia(){
		$n = func_num_args(); #quantiade de parametros.
		$a = func_get_args(); #array dos parametros.
		if($n == 0){
			$this->me = number_format((($this->m1 + ($this->m2 * 2)) / 3),1);
		}elseif($n = 1){
			return = number_format((($this->m1 + ($a[0] * 2)) / 3),1);		
		}else{
			echo "quantiade de parametros invalidos";
		}
		return = 0;
	}

	public function calculaMedia2($m2){
		$this->me = number_format((($this->m1 + ($m2 * 2)) / 3),1);	
	}

	public function getMedia(){
		return $this->me;
	}
	#Essa função rertona quando o aluno tem que tirar na diciplina e integrada para passar.
	function falta(){
		$m2 = 0;
		while(true){
			$n = calculaMedia($m2);
			if($n == 5){
				return $m2;
			}
			$m2 = $m2 + 0.1;
		}
	}
}#fim da classe Calculo.



?>