<?php

  session_start();

  if(isset($_SESSION['email'])){
 //   header('Location: Usuario/area_user.php');
  }

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

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
                <img src="assets/img/ingressos.gif" alt="JSOFT">
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
                            <!-- <img src="assets/img/logoyes.jpg" alt="JSOFT" width="80px" height="50px"> -->
                            <i class="fa fa-ticket fa-5x" style="color: #ffd000"></i>Ingressos Jhama
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->

                     <?php
                        if(!isset($_SESSION['email'])){
                                 
                     ?>
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about.php">Sobre</a></li>
                                
                                <li><a href="login.php">Ingressos</a>
                                    <ul>
                                        <li><a href="login.php">Comprar</a></li>
                                        <li><a href="login.php">Vender</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Registrar</a></li>
                                <li><a href="contact.php">Contato</a></li>
                            </ul>
                        </nav>
                    </div>
                    <?php
                        }else{

                            ?>
                            <div class="col-lg-8 d-none d-xl-block">
                                <nav class="mainmenu alignright">
                                    <ul>
                                        <li class="active"><a href="index.php">Home</a></li>
                                        <li><a href="about.php">Sobre</a></li>
                                        <li><a href="contact.php">Contato</a></li>
                                        <li><a href="Usuario/area_user.php">Ingressos</a>
                                            <ul>
                                                <li><a href="Usuario/comprar.php">Comprar</a></li>
                                                <li><a href="Usuario/vender.php">Vender</a></li>
                                            </ul>
                                        </li>
    
                                        <li><a href="Usuario/area_user.php">Perfil</a>
                                            <ul>
                                                <li><a href="Usuario/publicacao.php">Minhas Publicações</a></li>
                                                <li><a href="Usuario/comprar.php">Lista de Ingressos</a></li>
                                                <li><a href="Usuario/perfil.php">Editar Perfil</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-user"> <?php echo $_SESSION['first']; ?> </i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Usuario/logout.php">Sair<i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    </ul>
                                </nav>
                            </div>



                        <?php
                        }
                    ?>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->


    <!--== Slider Area Start ==-->
    <section id="slider-area" >
        <!--== slide Item One ==-->
        <div class="single-slide-item overlay">
            <div class="container">
                <!-- <div class="col-lg-4 col-md-8 m-auto"></div> -->
                <div class="row">

                    <div class="col-lg-4 col-md-8 m-auto" style="padding-top: 65px;">
                        <div class="login-page-content">
                            <div class="login-form">
                                <h3>BEM-VINDO DE VOLTA!</h3>
                                
                                <?php
                                if(!isset($_SESSION['email'])){
                                 
                                    ?>
                                <form action="BD/logar.php" method="POST">
                                <div class="username">
                                    <input type="text" placeholder="Email" id="email" name="email">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Senha" id="senha" name="senha">
                                </div>
                                <div class="log-btn">
                                    <button type="submit"><i class="fa fa-sign-in"></i> Entrar</button>
                                </div>
                            </form>

                            <?php
                        }
                            ?>
                            <p class="text-center text-danger">
                                <?php
                                  if($erro == 1){
                                     echo "<font color = #FF0000>Usuário ou Senha Incorreto(s)</font>";
                                  }
                                ?>
                            </p>
                            </div>
                            <div class="create-ac teste">
                                <p>Não tem uma conta? <a href="register.html">Cadastrar</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1>PLATAFORMA DE INGRESSOS</h1>
                                    <p>NOSSO OBJETIVO É FACILITAR A SUA VIDA. UMA PLATAFORMA DEDICADA A SUA NECESSIDADE DE COMPRA OU VENDA DE INGRESSOS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <!--== Slider Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Sobre nós</h2>
                        <span class="title-line"><i class="fa fa-ticket"></i></span>
                        <p>Com o Ingressos Jhama, é fácil encontrar o ingresso daquele evento que você tem interesse ou ainda vende-lo por algum motivo – aqui você tem o espaço para fazer isso. </p>
                        <p>Nossa missão é reunir em um só lugar a solução para quem precisa encontrar e vender ingressos.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <h4>Atendimento e suporte ao cliente</h4>
                                <p>Se você precisar de ajuda entre em contato conosco. Estamos a disposição para atendê-los da melhor forma possível.</p>
                                <div class="about-btn">
                                    <a href="contact.html">Contato</a>
                                </div>

                                <p>Veja nossas sessões de compra e venda. Seja bem-vindo a plataforma Ingressos Jhama</p>
                                <div class="about-btn">
                                    <a href="login.php">Compra</a>
                                    <a href="login.php">Venda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video" style=" text-align: right; top: 30%">
                        <img src="assets/img/vip.gif" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/lg1.jpg" alt="JSOFT" >
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/lg2.jpg" alt="JSOFT" >
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/lg3.jpg" alt="JSOFT" >
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/lg4.jpg" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/lg5.jpg" alt="JSOFT" >
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nossos serviços</h2>
                        <span class="title-line"><i class="fa fa-ticket"></i></span>
                        <p>Preparamos duas sessões específicas para o seu objetivo.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

           
			<!-- Service Content Start -->
			<div class="row">
				<!-- Single Service Start -->
				<div class="col-lg-6 text-center">
					<div class="service-item">
						<i class="fa fa-ticket"></i>
						<h3>COMPRA</h3>
						<p>Diversos ingressos sendo comprados</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				<!-- Single Service Start -->
				<div class="col-lg-6 text-center">
					<div class="service-item">
						<i class="fa fa-money"></i>
						<h3>VENDA</h3>
						<p>Diversos ingressos sendo vendidos</p>
					</div>
				</div>
				<!-- Single Service End -->
				
				
				<!-- Single Service End -->
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-map-marker"> Diamantina</i>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-ticket"> Ingressos</i>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>