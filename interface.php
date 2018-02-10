<?php 

interface Cliente{

Public function localTrabalho($empresa);


}


interface Profissao{

	Public function quantiaSalario($salario);
}



 class Pessoa implements Cliente, Profissao{

Public function localTrabalho($empresa){

echo $empresa."<br>";


}

Public function quantiaSalario($salario){

	echo $salario;
}



}

$claudio = new Pessoa();

$claudio->localTrabalho("Cipatex");
$claudio->quantiaSalario("22525,10");

 ?>