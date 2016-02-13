<?php
include "_php/class.calculo.php";
class CalculoRegular extends Calculo{

	protected $ni; #nota integrada.

	public function __construct($m1, $nd, $ni){
		parent::__construct($m1, $nd); # contrutor classe pai.
		$this->ni = $ni;
		$this->calculaM2();
		$this->calculaMe();
	}

	public function getM1(){
		return $this->m1;
	}

	public function getNd(){
		return $this->nd;
	}

	public function getNi(){
		return $this->ni;
	}

	#essa função calcula a nota da m2.
	public function calcularM2(){
		$this->m2 = number_format((($this->nd * 0.70 )+( $this->ni * 0.30)),2);
	}

	public function getM2(){
		return $this->m2;
	}
	# essa função tem uma simula uma sobrecarga de 
	public function calcularMe(){
		$n = func_num_args(); #quantiade de parametros.
		$a = func_get_args(); #array dos parametros.
		if($n == 0){
			$this->me = number_format((($this->m1 + ($this->m2 * 2)) / 3),1);
		}elseif($n = 1){
			return number_format((($this->m1 + ($a[0] * 2)) / 3),2);		
		}else{
			echo "quantiade de parametros invalidos";
		}
		return 0;
	}

	public function getMe(){

		return $this->me;
	}

	#Essa função rertona quando o aluno tem que tirar na diciplina e integrada para passar.
	public function calcularMin(){
		$m2 = 0;
		while(true){
			$n = $this->calculaMe($m2);
			if($n == 5.0){
				return number_format($m2,2);
			}
			$m2 = $m2 + 0.01;
		}
		return $m2;
	}

	public function calcularMinIntegrada(){
		$ni = 0;
		while(true){
			$m2 = number_format((($this->nd * 0.70 )+( $ni * 0.30)),2);
			$me = number_format((($this->m1 + ($m2 * 2)) / 3),2);
			if($me >= 5.00){
				return number_format($ni,1);
			}
			$ni = $ni + 0.01;
		}
		return $ni;
	}

	public function calcularMinDiciplina(){
		$nd = 0;
		while(true){
			$m2 = number_format((($nd * 0.70 )+( $this->ni * 0.30)),2);
			$me = number_format((($this->m1 + ($m2 * 2)) / 3),2);
			if($me >= 5.00){
				return number_format($nd,1);
			}
			$nd = $nd + 0.01;
		}
		return $nd;
	}

	public function mostrarStatus(){
		if($this->me >= 5){
			$s = "Aprovado";
		}elseif(($this->me >= 3) && ($this->me <= 4.9)){
			$s = "De exame";
		}else{
			$s = "Reprovado";
		}
		return $s;
	}
}
?>