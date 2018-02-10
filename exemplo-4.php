		<?php

		class carro{


		private $modelo;
		private $motor;
		private $ano;


		public function getModelo(){

		return $this->modelo;

		}


		public function setModelo($modelo){

		$this->modelo = $modelo;

		}

		public function getMotor():float{

			return $this->motor;

		}


		public function setMotor($motor){

			$this->motor = $motor;
		}


		public function getAno():int{

			return $this->ano;
		}

		public function setAno($ano){

			$this->ano = $ano;
		}

		Public function exibir(){

	     return array(
	         "modelo"=>$this->getModelo(),
	         "motor"=>$this->getMotor(),
	         "ano"=>$this->getAno()

	     	);

		}

		}

		$gol = new carro();
		$gol->setModelo("Gol-GT");
		$gol->setMotor("1.8");
		$gol->setAno("1990");

	var_dump($gol->exibir());

		?>