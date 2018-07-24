<?php

	session_start();

	if(!isset($_SESSION['email'])){
		header('Location: ../login.php');
	}
	
	require_once('db.class.php');

	$objDb = new db();
 	$link = $objDb->conecta_mysql();


	$evento = $_POST["evento"] ; 
	$data = $_POST["data"];
	$preco = $_POST["preco"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$info = $_POST["info"];
	$user = $_POST['id_user'];
	$status = 'disponivel';
	$id_publi = $_POST['id_publi'];

		$sql = "update venda  set evento='$evento', data='$data', preco='$preco', telefone='$telefone', email='$email', info='$info', id_user='$user', status='disponivel' where id= '$id_publi'; ";

		if(mysqli_query($link, $sql))
			{
				header('Location: ../Usuario/editar_publi.php?id='.$id_publi );
			}
			else {
				echo 'Falha ao registrar. Tente novamente!';
			}

 ?>