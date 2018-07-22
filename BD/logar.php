<?php
	//validar acesso
	session_start();
	require_once('db.class.php');

	$email = $_POST['email'];
	$senha   = $_POST['senha'];

	//Cria a sql de consulta se há usuário cadastrado
	$sql=" SELECT email, senha FROM usuarios WHERE  email='$email' AND senha='$senha' ";
	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	$resultado_id = mysqli_query($link, $sql);
	
	if($resultado_id){
		//retorn um array com os dados da pesquisa
		$dados_usuario= mysqli_fetch_array($resultado_id); 	

		if(isset($dados_usuario['email'])){//	echo 'Usuário existe';
				
				$_SESSION['email'] = $dados_usuario['email'];
				$_SESSION['senha'] = $dados_usuario['senha'];
                header('Location: ../Usuario/area_user.php');
		}
		else{//echo 'Usuário não existe';
			//$_SESSION['loginErro'] = "Email ou senha inválido" ;
			header('Location: ../login.php?erro=1');//forçando a redirecionamento da pagina		

		}

	}
	else {
			echo('Erro. Tente novamente');
		}
?>