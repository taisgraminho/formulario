<?php

	$nome = $_POST['nome'];
	$lp[] = $_POST['lp'];
	$bio = $_POST['bio'];
	$curso[] = $_POST['curso'];
	$sexo[] = $_POST['sexo'];
	$data = $_POST['data'];
	$hora = $_POST['hora'];
	$idade = $_POST['idade'];

	echo "Nome: " .$nome .'<br>'; 
	echo "Bio: " .$bio .'<br>'; 
	
	foreach($sexo as $sexo){
		echo "Sexo: " .$sexo .'<br>';  	
	}
	
	echo "Data: " .$data .'<br>';
	echo "Hora: " .$hora .'<br>';
	echo "Idade: " .$idade .'<br>';

	foreach($curso as $curso_escolhido) {
		echo $curso_escolhido .'<br>';
	}

	foreach($lp as $linguagem){
		echo $linguagem .'<br>';
	}
	
	
?>