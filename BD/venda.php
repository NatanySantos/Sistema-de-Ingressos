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


	$sql = "insert into venda  (evento, data, preco, telefone, email, info) values ( '$evento','$data','$preco','$telefone', '$email', '$info' ) ";


	//mysqli_query(conexão, Query)
	if(mysqli_query($link, $sql))
	{
		// echo 'Publicacao realizada com sucesso';
		header('Location: ../area_usuario.php');
	}
	else {
		echo 'Falha ao publicar. Tente novamente!';
	}
  

?>