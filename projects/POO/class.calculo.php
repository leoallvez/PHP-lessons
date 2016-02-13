<?php

abstract class Calculo{
	protected $m1; #nota m1.
	protected $nd; #nota discliplina.
	protected $m2; #nota m2.
	protected $me; #média final.

	public function __construct($m1, $nd){
		$this->m1 = $m1;
		$this->nd = $nd;
	}

	protected abstract function calcularMe();

	protected abstract function calcularMinima();
	
	protected abstract function mostrarStatus();
}
?>