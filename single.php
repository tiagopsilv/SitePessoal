<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Personal, Portfolio, Creative">
        <meta name="description" content="Tiago Pereira da Silva">
        <meta name="author" content="Tiago Pereira da Silva">

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
                <a class="navbar-brand logo" href="<?= get_template_directory_uri(); ?>/index.html">
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
                <h1>Blog</h1>
                <div class="bread-crumb mt-10">
                    <a href="https://tiagopsilva.com.br">Home</a>
                    <a href="<?php echo get_page_link( get_page_by_title("ListaBlog")->ID ); ?>">Mais Textos</a>
                </div>
            </div>
        </section>

        <section class="blog-detail pt-100 pb-100">
            <?php if( have_posts() ) {
            while( have_posts() ) {
                the_post(); ?>
            <div class="container">
                <div class="row">
                    <!--Blog Content-->
                    <div class="col-lg-8 offset-lg-2">
                        <!--Blog Image-->
                        <div class="blog-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <!--Blog Heading-->
                        <div class="blog-heading">
                            <h2><?php the_title(); ?></h2>
                            <div class="blog-meta">
                                <span class="date"><?php the_date(); ?></span>
                                <span class="by">Tiago Pereira da Silva</span>
                            </div>
                        </div>
                        <!--Blog Content-->
                        <div class="blog-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="col-md-12">
                            <!--Blog Comments-->
                            <h3 class="comment-title">Comentarios: </h3>
                            <ul class="post-comment">

                                <?php 

                                    if(isset($_POST['submit']) AND trim($_POST['Name']) <> "" AND trim(nl2br($_POST["Message"])) <> "" AND trim($_POST['Email']) <>"")
                                    {

                                        $time = current_time('mysql');
                                        $agent = $_SERVER['HTTP_USER_AGENT'];
                                        $comments= $_POST['Message'];

                                        $data = array(
                                        'comment_post_ID' => get_the_ID(),
                                        'comment_author' => $_POST['Name'],
                                        'comment_author_email' => $_POST['Email'],
                                        'comment_author_url' => 'http://',
                                        'comment_content' => trim(nl2br($_POST["Message"])),
                                        'comment_type' => '',
                                        'comment_parent' => 0,
                                        'user_id' => 1,
                                        'comment_author_IP' => '',
                                        'comment_agent' => $agent,
                                        'comment_date' => $time,
                                        'comment_approved' => 1,
                                        );

                                        

                                        wp_insert_comment($data);

                                        ?> <script> alert("Comentaria enviado com sucesso. Obrigado."); window.location.replace("<?=the_permalink()?>"); </script> <?php
                                        

                                        ?>



                                    <?php 
                                    }

                                    foreach (get_comments(array('post_id' => get_the_ID())) as $comment): ?>

                                   <li>
                                        <div class="comment-info">
                                            <h3><?= $comment->comment_author; ?></h3>
                                            <span><?= $comment->comment_date; ?></span>
                                            <p><?= $comment->comment_content; ?></p>
                                        </div>
                                    </li>

                                <?php endforeach; ?>

 
                            </ul>
                        </div>

                        <?php

                       

                        ?>

                        <!--Blog Comment Form-->
                        <form id="myform" class="col-md-12 contact-form" method="post" >
                            <h3 class="comment-title">Deixe seu comentário</h3>
                            <div class="row">
                                <!--Name-->
                                <div class="col-md-6">
                                    <input class="form-inpt" type="text" required="required" name="Name" placeholder="Name*">
                                </div>
                                <!--Email-->
                                <div class="col-md-6">
                                    <input class="form-inpt" type="text" placeholder="Email*" name="Email" required="required">
                                </div>
                                <!--Message-->
                                <div class="col-md-12">
                                    <textarea id="Message" placeholder="Message*" form="myform" name="Message" rows="8"></textarea>
                                </div>
                                <div class="col-md-12 text-center pt-30">
                                    <input id="submit" name="submit" class="main-btn" type="submit"  value="Enviar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php }
            } ?>
        </section>

<?php get_footer() ?>


