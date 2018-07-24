<?php

	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: ../login.php');
	}
	
	require_once('db.class.php');

	$objDb = new db();
 	$link = $objDb->conecta_mysql();

 	$first = $_POST["first"];
 	$last = $_POST["last"];
 	$email = $_POST["email"];
 	$senha = $_POST["senha"];
 	$user = $_POST['id'];

 	$senha = sha1($senha.$email);


		$sql = "update usuarios set first='$first', last='$last', email='$email', senha='$senha' where id= '$user'; ";

		if(mysqli_query($link, $sql))
			{
				header('Location: ../Usuario/perfil.php');
			}
			else {
				echo 'Falha ao registrar. Tente novamente!';
			}

 ?>