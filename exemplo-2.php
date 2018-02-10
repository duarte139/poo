<?php




class pessoas{

	public $nome;


	function falar(){

		return "O meu nome é " .$this->nome;



	}
	
}

$Claudio = new pessoas();
$Claudio->nome = "Claudio Duarte Filho";
echo $Claudio->falar();

?>











