<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Personal, Portfolio, Creative">
        <meta name="description" content="Kalvin Portfolio Template">
        <meta name="author" content="cosmos-themes">

        <title>Tiago Pereira da Silva - Portfolio Template</title>

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

        <!--Site Main Style css-->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
        <?php wp_head(); ?>
    </head>

    <body>

    <!--Preloader Start-->
	<div class="preloader">
	    <div class="loader "></div>
	</div>
	<!--Preloader End-->

	<!--Navbar Start-->
	<nav class="navbar navbar-expand-lg navbar-dark">
	    <div class="container">
	        <!-- LOGO -->
	        <a class="navbar-brand logo" href="https://tiagopsilva.com.br">
	            Tiago Pereira da Silva
	        </a>

	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	                <a href="https://tiagopsilva.com.br" class="nav-link active">Voltar</a>
	            </li>
	        </ul>
	    </div>
	</nav>
	<!--Navbar End-->

	<section class="banner-blog">
		<div id="particles-js"></div>
		<!--Banner Caption-->
		<div class="banner-caption text-center">
			<?php if( have_posts() ) {
			while( have_posts() ) {
			the_post(); ?>
			<h1><?php the_content(); ?></h1>
			<?php	}
			} ?>
		    <div class="bread-crumb mt-10">
		    </div>
		</div>
	</section>


	<?php if( is_page('ListaBlog') ) { ?>
	

	         <!--Blog List Section Starts-->
        <section class="blogs blog-list pt-100 pb-50" data-scroll-index="4">
            <div class="container">
                <div class="row">

                    <?php $args = array( 'post_type' => 'post' );
							$loop = new WP_Query( $args );
							if( $loop->have_posts() ) { 
							while( $loop->have_posts() ) {
							$loop->the_post(); ?>

	                        <!--Blogs Item-->
	                        <div class="col-lg-4 col-md-6">
								<div class="blog-item">
									<a href="<?= the_permalink(); ?>">
										<div class="blog-img">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="blog-content">
											<a href="<?= the_permalink(); ?>">
												<h3><?= the_title(); ?></h3>
												<p><?= substr(strip_tags(get_the_content()), 0, 200); ?> ...</p>
											</a>
											<div class="blog-meta">
												<span class="more">
													<a href="<?= the_permalink(); ?>">Leia Mais</a>
												</span>
												<span class="date">
													<?=get_post_time( get_option( 'date_format' ), false, $post, true );?>
												</span>
											</div>
										</div>
									</a>
		                        </div>
	                    	</div>

						<?php }} ?>

			</div>
		</div>
	</section>
	<!--Blog List Section End-->

	 <?php

	}
	?>

<?php get_footer(); ?>