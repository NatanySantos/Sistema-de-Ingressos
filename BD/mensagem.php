<?php

  // session_start();

  // if(!isset($_SESSION['email'])){
  //   header('Location: index.php');
  // }

  require_once('db.class.php');

  //$usuario = $_SESSION['usuario'];

  $objDb = new db();
  $link = $objDb->conecta_mysql();



  if (isset($_POST['nome']))
  $nome = $_POST['nome']; else $nome='';
 
  if (isset($_POST['email']))
  $email = $_POST['email']; else $email='';

  if (isset($_POST['texto']))
  $texto = $_POST['texto']; else $texto='';
  // $nome = $_POST['nome'];
  // $email = $_POST['email'];
  // $texto = $_POST['texto'];

  $sql = " INSERT INTO mensagem (nome, email, texto) values ('$nome', '$email','$texto');";

    $resultado = mysqli_query($link, $sql);


  if($resultado){

  header('Location: ../contact.php?alerta=1');
      
    }
 else {
  header('Location: ../contact.php?alerta=2');
      
    
  }

?>