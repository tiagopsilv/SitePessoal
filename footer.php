        <!--Footer Start-->
        <footer class="pt-50 pb-50">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Tiago Pereira da Silva</h5>
                            <p>Analista de Negocios & Desenvolvedor</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Fone.</h5>
                            <p>+55 (11) 99795-1082</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Email</h5>
                            <p>tiagosilv@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Local</h5>
                            <p>São Paulo - SP, Brasil.</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <hr>
                        <p class="copy pt-30">
                            Tiago Pereira da Silva &copy; 2019. All Right Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->

        <!--Jquery js-->
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
        <!--Bootstrap js-->
        <script src="<?= get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <!--Stellar js-->
        <script src="<?= get_template_directory_uri(); ?>/js/jquery.stellar.js"></script>
        <!--Animated Headline js-->
        <script src="<?= get_template_directory_uri(); ?>/js/animated.headline.js"></script>
        <!--Owl Carousel js-->
        <script src="<?= get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
        <!--ScrollIt js-->
        <script src="<?= get_template_directory_uri(); ?>/js/scrollIt.min.js"></script>
        <!--Isotope js-->
        <script src="<?= get_template_directory_uri(); ?>/js/isotope.pkgd.min.js"></script>
        <!--Magnific Popup js-->
        <script src="<?= get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
        <!--Youtube Background js-->
        <script src="<?= get_template_directory_uri(); ?>/js/ultimate-bg.js"></script>
        <!--Site Main js-->
        <script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
        <script>
$('.banner-video').c47bg({
    type: 'youtube',
    container: 'div',
    /*==Change Youtube Video ID Here==*/
    source: 'E3jxoW1rPvU',
    mute: true
});

$('.open-popup-link').magnificPopup({
  type: 'inline',
  midClick: true,
  mainClass: 'mfp-fade'
});

        </script>
	<?php wp_footer(); ?>
    </body>
</html>