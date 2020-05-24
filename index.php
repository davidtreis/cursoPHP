<?php
//criando Array das categorias
$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";
$categorias[] = "idoso";

//imprimindo Array
//print_r($categorias);


//criando variaveis nome  e idade
$nome = 'Eduardo';
$idade = 8;

//imprimindo o tipo de variável gerada
//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <=12)
{//verifica se infantil
	for($i = 0; $i < count($categorias);$i++)
	{
		if($categorias[$i] == "infantil")
			echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
	}
}
else if ($idade > 12 && $idade <= 18)
{//verifica se é adolescente
	for($i = 0; $i < count($categorias);$i++)
	{
		if($categorias[$i] == "adolescente")
			echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
	}
}
else
{//verifica se é adulto
	for($i = 0; $i < count($categorias);$i++)
	{
		if($categorias[$i] == "adulto")
			echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
	}
}

?>