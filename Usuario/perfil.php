<?php

  session_start();
 // $_SESSION['alerta']=false;
  if(!isset($_SESSION['email'])){
    header('Location: ../index.php');
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

    <title>Ingressos Jhama - Editar Perfil</title>

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
                                        <li ><a href="#">Vender</a></li>
                                    </ul>
                                </li>
                                <li><a href="area_user.php">Perfil</a>
                                    <ul>
                                        <li><a href="publicacao.php">Minhas Publicações</a></li>
                                        <li><a href="comprar.php">Lista de Ingressos</a></li>
                                        <!-- <li><a href="perfil.php">Editar Perfil</a></li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="perfil.php">
                                        <i class="fa fa-user"> <?php echo $_SESSION['first']; ?> </i>
                                    </a>
                                    <ul>  <li class="active"><a href="perfil.php">Editar Perfil</a></li>  </ul>
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
                        <h2>Perfil</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Veja seus dados pessoais e edite se for necessário.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->



    <br><br>

    <?php
 
        require_once('../BD/db.class.php');
                        
        //$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $id = $_SESSION['id_user'];
        $objDb = new db();
        $link = $objDb->conecta_mysql();
        $sql="SELECT * FROM usuarios where id = '$id';"; 
        $resultado_id = mysqli_query($link, $sql);
       
        if($resultado_id){                 
            $dados_usuario=array() ;
            $quant_linha=0;

            while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                $quant_linha++;
                $dados_usuario[] = $linha;
            }
         
        }
    ?>
  
        




    <!--== Perfil Start ==-->
    <section id="help-desk-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                  
                    <div class="alert alert-success" id ="alerta" role="alert">
                        Publicação realizada com sucesso!!!!
                    </div>
                      

                    <div class="team-content">

                 

                            <!-- Team Tab Menu start -->
                            <!-- <div class="col-lg-8"> -->
                                <div class="team-member-info text-center">
                                    <form  action="../BD/edit_user.php"  id="form_user" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo  $dados_usuario[0]['id']; ?>">
                                        <div class="row">
                                            <div class="col-md-6"><div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">Primeiro nome</span>
                                                <input type="text" class="form-control" id="first"  name="first" value="<?php echo  $dados_usuario[0]['first']; ?>">
                                            </div></div>
                                            <div class="col-md-6"><div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">Ultimo nome</span>
                                                <input type="text" class="form-control" id="last"  name="last" value="<?php echo  $dados_usuario[0]['last']; ?>">
                                            </div></div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">Email</span>
                                                            <input type="email" class="form-control" id="email"  name="email" value="<?php echo  $dados_usuario[0]['email']; ?>">
                                                 </div>
                                            </div>
                                            <div class="col-md-6">
                                                 <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">Senha</span>
                                                            <input type="password" class="form-control" id="senha"  name="senha" value="<?php echo  $dados_usuario[0]['senha']; ?>">
                                                 </div>
                                             </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- <a href="javascript:window.history.go(-1)"> -->
                                                    <a href="area_user.php">
                                                    <button type="button" class="btn btn-danger btn-page" id="Voltar"> 
                                                      <span class="fa fa-ban" aria-hidden="true"></span> Cancelar
                                                  </button>
                                              </a>
                                              
                                              <button type="submit" class="btn btn-success" id="salvar"> <span class="fa fa-save" aria-hidden="true"> Salvar </span> </button>
                                          </div>
                                       </div>


                                    </form>
                                </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Perfil End ==-->
              
           
      
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
    <script src="../assets/js/jquerymask.min.js"></script>
      <script src="../assets/js/sweetalert.js"></script>

   

   <script type="text/javascript">
      

      $(document).ready(function(e) { 
     
      
        $('#salvar').click(function(e) {
         e.preventDefault();
         
            document.getElementById('form_user').submit();
            alert('FUNCIONÁRIO ATUALIZADO COM SUCESSO!!');
         
         
         });      
      });

 
    </script>