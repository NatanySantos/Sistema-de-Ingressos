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
	$user = 	$_SESSION['id_user'];
	$status = $_POST["status"];


	$sql = "insert into venda  (evento, data, preco, telefone, email, info, id_user, status) values ( '$evento','$data','$preco','$telefone', '$email', '$info' , '$user' ,'$status') ";


	//mysqli_query(conexão, Query)
	if(mysqli_query($link, $sql))
	{
		

		// echo "<script src='../assets/js/main.js'>alert('Publicação realizada com sucesso !!');</script>";
		//$_SESSION['alerta']=false;

		header('Location: ../Usuario/vender.php');
	}
	else {
		echo 'Falha ao publicar. Tente novamente!';
	//		$_SESSION['alerta']= false;

	}
  

?>