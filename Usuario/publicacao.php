<?php

session_start();

if(!isset($_SESSION['email'])){
 header('Location: ../login.php');
}


?>

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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="../assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="../assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="../assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="../assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="../assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="../style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="../assets/css/responsive.css" rel="stylesheet">


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
                <img src="../assets/img/ingressos.gif" alt="JSOFT">
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
                        <a href="index.php" class="logo">
                            <img src="../assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="../about.php">Sobre</a></li>
                                <li><a href="../contact.php">Contato</a></li>
                                <li><a href="area_user.php">Ingressos</a>
                                    <ul>
                                        <li><a href="comprar.php">Comprar</a></li>
                                        <li><a href="vender.php">Vender</a></li>
                                    </ul>
                                </li>
                                <li><a href="area_user.php">Perfil</a>
                                    <ul>
                                        <li class="active"><a href="publicacao.php">Minhas Publicações</a></li>
                                        <li><a href="comprar.php">Lista de Ingressos</a></li>
                                        <!-- <li><a href="perfil.php">Editar Perfil</a></li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="perfil.php">
                                        <i class="fa fa-user"> <?php echo $_SESSION['first']; ?> </i>
                                    </a>
                                    <ul>  <li><a href="perfil.php">Editar Perfil</a></li>  </ul>
                                </li>
                                <li ><a href="logout.php">Sair<i class="fa fa-sign-out" aria-hidden="true"></i></a>
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

        <!--== Page Title Area Start ==-->
        <section id="page-title-area" class="section-padding overlay">
            <div class="container">
                <div class="row">
                    <!-- Page Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h2>Minhas publicações</h2>
                            <span class="title-line"><i class="fa fa-car"></i></span>
                            <p>Confira todas as publicações que você já fez.</p>
                        </div>
                    </div>
                    <!-- Page Title End -->
                </div>
            </div>
        </section>
        <!--== Page Title Area End ==-->

        <?php
        $alert = isset($_GET['alert']) ? $_GET['alert'] : 0; 
        if($alert == 1){
            ?>
            <div class="alert alert-success" id ="alert" role="alert" style="text-align: center; margin: 50px;">
                Publicação excluída com sucesso!!!!
            </div>
            <?php
        }else if($alert ==2){
            ?>
            <div class="alert alert-danger" id ="alert" role="alert">
                Nao foi possível excluir sua publicação... Tente novamente mais tarde!
            </div>
            <?php
        }

        ?>


        <!--== Suas Publicaçoes Start ==-->
        <section class="container-fluid text-center main-screen" style="margin-top: 30px; margin-bottom: 30px"> 
          <div class="content">
            <div class="container-fluid">
              <div class="row">  
                  <div class="col-md-12">
                      <div class="card">
                          <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped " >

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

                           <?php 
                           require_once "../BD/db.class.php";

                           $objDb = new db();
                           $link = $objDb->conecta_mysql();

                           $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
                                //$email = filter_var($_GET['email']);
                           $user= $_SESSION['id_user'];
                           $cmd = "SELECT * FROM venda WHERE id_user = '$user'"; 
                           $usuarios =  mysqli_query($link, $cmd);

                           $total = mysqli_num_rows($usuarios); 
                           $registros = 6; 
                           $numPaginas = ceil($total/$registros);
                           $inicio = ($registros*$pagina)-$registros;
                           $sql= "SELECT * FROM venda  WHERE id_user = '$user' order by data limit $inicio,$registros ";

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
                                              <span style="color: #4B0082;">
                                                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                              </span>
                                          </a> 




                                      </td>

                                      <td class="text-center ">   

                                        <a href="../BD/delete_publi.php?id=<?php echo $dados_usuario[$i]['id']; ?>">

                                          <span  style="color:black;" onclick="vender()"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                          </span>
                                      </a> 

                                  </td>

                                  <td class="text-center ">   

                                                    <!-- <a href="#">

                                                      <span style="color:green;" onclick="alert('Ingresso vendido!')">
                                                           <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                      </span>
                                                   </a>  -->

                                                  <div class="form-group">
                                                    <span><?php echo $dados_usuario[$i]['status']; ?></span>
                                                    <button>
                                                         <a href="../BD/atualizar.php?id=<?php echo $dados_usuario[$i]['id']; ?>"> ok </a>
                                                    </button>
                                                    
                                              </div>



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


                        <!--== Footer Area Start ==-->
                        <section id="footer-area">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget-area">
                                <div class="container">
                                    <div class="row">
                                        <!-- Single Footer Widget Start -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-footer-widget">
                                                <h2>Sobre nós</h2>
                                                <div class="widget-body">
                                                    <i class="fa fa-ticket fa-5x" style="color: #ffd000"></i>Ingressos Jhama 
                                                    <br><br>
                                                    <p>Dedicamos nosso tempo para entregar a melhor experiência para todos os nossos clientes.</p>


                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Footer Widget End -->

                                        <div class="col-lg-4 col-md-6"></div>

                                        <!-- Single Footer Widget Start -->
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-footer-widget">
                                                <h2>Entre em contato</h2>
                                                <div class="widget-body">
                                                    <p>Para maiores informações</p>

                                                    <ul class="get-touch">
                                                        <li><i class="fa fa-map-marker"></i> 5000 Rodovia MGT 367 - Km 583 Alto da, Diamantina - MG, 39100-000</li>
                                                        <li><i class="fa fa-envelope"></i>jn.ufvjm@gmail.com</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Footer Widget End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Bottom Start -->
                            <div class="footer-bottom-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Bottom End -->
                        </section>
                        <!--== Footer Area End ==-->

                        <!--== Scroll Top Area Start ==-->
                        <div class="scroll-top">
                            <i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i>
                        </div>
                        <!--== Scroll Top Area End ==-->

                        <!--=======================Javascript============================-->
                        <!--=== Jquery Min Js ===-->
                        <script src="../assets/js/jquery-3.2.1.min.js"></script>
                        <!--=== Jquery Migrate Min Js ===-->
                        <script src="../assets/js/jquery-migrate.min.js"></script>
                        <!--=== Popper Min Js ===-->
                        <script src="../assets/js/popper.min.js"></script>
                        <!--=== Bootstrap Min Js ===-->
                        <script src="../assets/js/bootstrap.min.js"></script>
                        <!--=== Gijgo Min Js ===-->
                        <script src="../assets/js/plugins/gijgo.js"></script>
                        <!--=== Vegas Min Js ===-->
                        <script src="../assets/js/plugins/vegas.min.js"></script>
                        <!--=== Isotope Min Js ===-->
                        <script src="../assets/js/plugins/isotope.min.js"></script>
                        <!--=== Owl Caousel Min Js ===-->
                        <script src="../assets/js/plugins/owl.carousel.min.js"></script>
                        <!--=== Waypoint Min Js ===-->
                        <script src="../assets/js/plugins/waypoints.min.js"></script>
                        <!--=== CounTotop Min Js ===-->
                        <script src="../assets/js/plugins/counterup.min.js"></script>
                        <!--=== YtPlayer Min Js ===-->
                        <script src="../assets/js/plugins/mb.YTPlayer.js"></script>
                        <!--=== Magnific Popup Min Js ===-->
                        <script src="../assets/js/plugins/magnific-popup.min.js"></script>
                        <!--=== Slicknav Min Js ===-->
                        <script src="../assets/js/plugins/slicknav.min.js"></script>

                        <!--=== Mian Js ===-->
                        <script src="../assets/js/main.js"></script>

                        <script type="text/javascript" > 

                            $('#status').click(function(e) {
                               e.preventDefault();

                 //var evento= $("#evento").val();
                 alert("OK");
             }); 


 //função pra pegar o click de excluir usuario
 // function desativar(id){

 //    if(confirm("Realmente deseja desativar esse usuário?"))
 //    {
 //      window.location= "desativar/"+id;

 //    }
 //    else
 //    {
 //     alert("Ação cancelada");    
 //   }
 //  }


 // function ativar(id){

 //    if(confirm("Realmente deseja ativar esse usuário?"))
 //    {
 //      window.location= "ativar/"+id;

 //    }
 //    else
 //    {
 //     alert("Ação cancelada");    
 //   }
 //  }
</script>

</body>

</html>