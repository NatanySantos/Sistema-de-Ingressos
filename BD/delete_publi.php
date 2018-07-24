<?php
	

	require_once('db.class.php');

   $excluir = $_GET["id"];

	$objDb = new db();

 	$link = $objDb->conecta_mysql();



 	if($excluir){ 

		$sql = "delete from venda where id = '$excluir'; ";


		if(mysqli_query($link, $sql))
		{

  			header('Location: ../Usuario/publicacao.php?alert=1');
      
    	}else {
  			header('Location: ../Usuario/publicacao.php?alert=2');
      	}
      	
  	}


?>