<?php

class pessoa{

public $nome;

public function falar(){

return "O meu nome é ".$this->nome;

}


}
$Claudio = new pessoa();
$Claudio ->nome = "Claudio Alves Duarte Filho";
echo $Claudio->falar();

?>