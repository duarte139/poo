<?php
class carro{
	Private $cor;


	Public  function getCor(){

		return $this->cor;

	}

	Public function setCor($cor){

		$this->cor = $cor;
	}
	

	Public function andar(){

		return "A cor do carro é " .$this->cor;
	}

}

$fusca = new carro();
$fusca->getCor = "azul anil";
echo $fusca->andar();


?>













