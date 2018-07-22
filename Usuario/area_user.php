<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Ingressos Jhama</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
     <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Diamantina/MG
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-search-plus"></i> Tudo que você procura
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-ticket"></i> Plataforma de Ingressos
                    </div>
                    <!--== Single HeaderTop End ==-->

                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../about.html">Sobre</a></li>
                                
                                <!-- <li><a href="index.html">Ingressos</a>
                                    <ul>
                                        <li><a href="comprar.php">Comprar</a></li>
                                        <li><a href="vender.php">Vender</a></li>
                                    </ul>
                                </li> -->
                                <li ><a href="login.php">Sair</a></li>
                                <!-- <li><a href="register.php">Registrar</a></li> -->
                                <li><a href="contact.html">Contato</a></li>
                                <li class="active"><a href="#">Perfil</a>
                                    <ul>
                                        <li><a href="publicacao.php">Minhas Publicações</a></li>
                                        <li><a href="comprar.php">Lista de Ingressos</a></li>
                                        <li><a href="perfil.php">Editar Perfil</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="service-page-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Service Start -->
                <a href="comprar.php" >
                    <div class="col-lg-6 text-center">
                        <div class="service-item">
                            <i class="fa fa-ticket"></i>
                            <h3>COMPRAR</h3>
                            <p>Clique aqui se desejar fazer uma compra</p>
                        </div>
                    </div>
                </a>
                <!-- Single Service End -->
                
                <!-- Single Service Start -->
                <a href="vender.php">
                    <div class="col-lg-6 text-center">
                        <div class="service-item">
                            <i class="fa fa-money"></i>
                            <h3>VENDER</h3>
                            <p>Clique aqui se desejar fazer uma venda</p>
                        </div>
                    </div>
                </a>
                <!-- Single Service End -->
            </div>
        </div>
    </section>
    <!--== Service Page Content End ==-->


    <!--== Suas Publicaçoes Start ==-->
    <section class="container-fluid text-center main-screen"> 
          <div class="content">
            <div class="container-fluid">
              <div class="row">  
                  <div class="col-md-12">
                  <div class="card">
                      <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped ">

                           <thead  bgcolor="#5F9EA0">
                             <th class=" text-center">Evento </th>
                              <th class=" text-center">Data </th>
                              <th class=" text-center">Preço </th>
                              <th class=" text-center">Telefone </th>
                              <th class=" text-center">Email </th>
                              <th class=" text-center">Editar</th>
                              <th class=" text-center">Deletar</th>
                              <th class=" text-center">Vendido</th>
                           </thead>

                           <<?php 
                                require_once "../BD/db.class.php";
    
                                $objDb = new db();
                                $link = $objDb->conecta_mysql();

                                $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
                                $email = filter_var($_GET['email']);
                                $cmd = "SELECT * FROM venda WHERE email = '$email;'"; 
                                $usuarios =  mysqli_query($link, $cmd);
                                  
                                $total = mysqli_num_rows($usuarios); 
                                $registros = 6; 
                                $numPaginas = ceil($total/$registros);
                                $inicio = ($registros*$pagina)-$registros;
                                $sql= "SELECT * FROM venda  order by data limit $inicio,$registros";
                                    
                                $resultado_id = mysqli_query($link, $sql);

                                if($resultado_id){
                                    $dados_usuario=array () ;
            
                                    $quant_linha=0;

                                    while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                                        $quant_linha++;
                                        $dados_usuario[] = $linha;
                                    }
        

                                    for($i=0; $i<$quant_linha; $i++){
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td> <?php echo  $dados_usuario[$i]['evento']; ?> </td>
                                                <td> <?php echo  $dados_usuario[$i]['data']; ?> </td>
                                                <td> <?php echo  $dados_usuario[$i]['preco']; ?> </td>
                                                <td>  <?php echo  $dados_usuario[$i]['telefone']; ?></td>
                                                <td>  <?php echo  $dados_usuario[$i]['email']; ?></td>

                                          
                                                <td class="text-center ">   
                                  
                                                    <a href="editar_publi.php?id=<?php echo $dados_usuario[$i]['id']; ?>">
                                                      <span class="glyphicon glyphicon-edit" aria-hidden="true" style="color: #4B0082;"></span>
                                                    </a> 
                                                 
                                                </td>

                                                <td class="text-center ">   
                                  
                                                    <a href="../BD/deletar_publi.php?id=<?php echo $dados_usuario[$i]['id']; ?>">
                                                      <span class="glyphicon glyphicon-trash" aria-hidden="true" style="color:black;" onclick="alert('Deletado com sucesso!')"></span>
                                                    </a> 
                                                 
                                                </td>

                                                <td class="text-center ">   
                                  
                                                    <a href="#">
                                                      <span class="glyphicon glyphicon-ok-circle" aria-hidden="true" style="color:black;" onclick="alert('Ingresso vendido!')"></span>
                                                    </a> 
                                                 
                                                </td>
                                            </tr>
                                <?php
                                    }}
                                ?>

                                        </tbody>
                        </table>
                         <?php
                        $anterior = (($pagina -1) == 0) ? 1 : $pagina - 1;
                        $posterior = (($pagina +1) >= $numPaginas) ? $numPaginas : $pagina+1; ?>



                        <div id="navegacao">
        
                        <?php

                            // O loop para exibir os valores à esquerda

                            for($i = $pagina-$registros; $i <= $pagina-1; $i++){
                                if($i > 0)
                                echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
                            }

                            echo '<a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

                            for($i = $pagina+1; $i < $pagina+$registros; $i++){
                                if($i <= $numPaginas)
                                echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
                            }


                        ?>
                           
        
    </section>
    <!--== Suas Publicaçoes End ==-->
