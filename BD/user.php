<?php
	
	require_once('db.class.php');

	$objDb = new db();
 	$link = $objDb->conecta_mysql();

 	$first = $_POST["first"];
 	$last = $_POST["last"];
 	$email = $_POST["email"];
 	$senha = $_POST["senha"];

 	//preciso verificar se o email ja existe no banco
 	//if($email == )

 	$sql = "INSERT INTO usuarios (first, last, email, senha) VALUES ('$first', '$last', '$email', '$senha')";


 	if(mysqli_query($link, $sql))
	{
		// echo 'Funcionario registrado com sucesso';
		header('Location: ../Usuario/area_user.php');
	}
	else {
		echo 'Falha ao registrar. Tente novamente!';
	}
 ?>