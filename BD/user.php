<?php
	

	require_once('db.class.php');

	$objDb = new db();
 	$link = $objDb->conecta_mysql();

 	$first = $_POST["first"];
 	$last = $_POST["last"];
 	$email = $_POST["email"];
 	$senha = $_POST["senha"];

 	$insert = $conectar->prepare("INSERT INTO users (first, last, email, senha) VALUES (first, last, usuario, senha)");

 	if(mysqli_query($link, $insert))
	{
		// echo 'Funcionario registrado com sucesso';
		header('Location: ../register.php');
	}
	else {
		echo 'Falha ao registrar. Tente novamente!';
	}
  }