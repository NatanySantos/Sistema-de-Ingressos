<?php
	

	require_once('db.class.php');

	$objDb = new db();
 	$link = $objDb->conecta_mysql();


   

	$evento = $_POST["evento"] ; //faz a associação atravez dos name do outro Documento
	$data = $_POST["data"];
	$preco = $_POST["preco"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$info = $_POST["info"];


	$sql = "insert into venda  (evento, data, preco, telefone, email, info) values ( '$evento','$data','$preco','$telefone', '$email', '$info' ) ";

	//executar query

	//mysqli_query(conexão, Query)
	if(mysqli_query($link, $sql))
	{
		// echo 'Publicacao realizada com sucesso';
		header('Location: ../index.html');
	}
	else {
		echo 'Falha ao publicar. Tente novamente!';
	}
  

?>