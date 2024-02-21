<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" content="Personal, Portfolio, Creative">
	<meta name="author" content="Tiago Pereira da Silva">

	<title>Tiago Pereira da Silva - Portfolio Template - <?php wp_title(); ?></title>

	<!-- favicon -->
	<link href="<?= get_template_directory_uri(); ?>/images/favicon.ico" rel="icon" type="image/png">

	<!--Font Awesome css-->
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font-awesome.min.css">

	<!--Bootstrap css-->
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.css">

	<!--Owl Carousel css-->
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.theme.default.min.css">

	<!--Magnific Popup css-->
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/magnific-popup.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900%7cOpen+Sans:400,600,700,800" rel="stylesheet">

	<!--Site Main Style css-->
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
	
	<?php wp_head(); ?>
</head>
<body>
        <!--Preloader-->
        <div class="preloader">
            <div class="loader "></div>
        </div>
        <!--Preloader-->

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="https://tiagopsilva.com.br">
                    Tiago Pereira da Silva
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <!--Nav Links-->
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-scroll-nav="0" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="1" >Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="2" >Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="3">Casos de Sucesso</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="4">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="5">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->