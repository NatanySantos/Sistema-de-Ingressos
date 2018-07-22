<?php 


class db{

	//host
	private $host = 'localhost';

	//usuario
	private $usuario = 'root';//administrador padrao dos mysql
	//senha
	private $senha =''; //senha padrao  é vazia

	 //banco de dados
	private $database = 'ingressos';


	public function conecta_mysql(){
		//criar conexão
		//this-> faz referencia a propriedade existente da propria classe

		$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);/**///espera 4 parametros 
		//mysqli_connect(localizacao do bd, usuario de acesso, senha, banco de dados);

		//ajustar o charset de comuniucação entre a aqplicação e o banco de dados
		mysqli_set_charset($con,'utf8');



		//verificar se houve erro de conexão

		if(mysqli_connect_errno()){
			echo 'Houve um erro ao tentar se conectar com o BD Mysql:'.mysqli_connect_error();
				
		}

		return $con;
	}


}



?>


