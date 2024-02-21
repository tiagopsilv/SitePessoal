<?php get_header() ?>

<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

?> 

	 <!--Home Section Start-->
        <section id="home" class="banner" style="background-image: url('<?= get_template_directory_uri(); ?>/images/background/digital-marketing.jpg');background-position: center;" data-stellar-background-ratio=".7" data-scroll-index="0">
            <div class="container">
                <!--Banner Content-->
                <div class="banner-caption">
                    <h1>Olá! Sou o Tiago.</h1>
                    <p class="cd-headline clip mt-30">
                        <span>Analista de Negocios & Desenvolvedor locarizado em São Paulo.</span><br>
                        <span class="blc">Especialisa em</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Websites.</b>
                            <b>Analise de Negócios.</b>
                            <b>Criação de Software.</b>
                            <b>Soluções em TI.</b>
                            <b>Estrategia de Mercado.</b>
                            <b>Mapeamento de Processos.</b>
                            <b>UX.</b>
                            <b>SCRUM.</b>
                            <b>Data Science.</b>
                        </span>
                    </p>
                </div>
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="<?= get_template_directory_uri(); ?>/#" data-scroll-nav="1"></a>
                </div>
            </div>
        </section>
        <!--Home Section End-->

<?php

}

else

{

?>

	  <!--Home Section Start-->
        <section id="home" class="banner banner-video" data-scroll-index="0">
            <div class="container">
                <!--Banner Content-->
                <div class="banner-caption">
                    <h1>Olá! Sou o Tiago.</h1>
                    <p class="cd-headline clip mt-30">
                        <span>Analista de Negocios & Desenvolvedor locarizado em São Paulo.</span><br>
                        <span class="blc">Especialisa em</span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Websites.</b>
                            <b>Analise de Negócios.</b>
                            <b>Criação de Software.</b>
                            <b>Soluções em TI.</b>
                            <b>Estrategia de Mercado.</b>
                            <b>Mapeamento de Processos.</b>
                            <b>UX.</b>
                            <b>SCRUM.</b>
                            <b>Data Science.</b>
                        </span>
                    </p>
                </div>
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="<?= get_template_directory_uri(); ?>/#" data-scroll-nav="1"></a>
                </div>
            </div>
        </section>
        <!--Home Section End-->

<?php

}

?>

        <!--About Section Start-->
        <section class="about pt-100 pb-100" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <!--About Image-->
                        <div class="about-img">
                            <img src="<?= get_template_directory_uri(); ?>/images/TiagoPereiradaSilvaAnalista.jpg" alt="Tiago Pereira da Silva, Analista de Negocios & Desenvolvedor">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">nunca desista
                        <!--About Content-->
                        <div class="about-content">
                            <div class="about-heading">
                                <h2>Sobre mim.</h2>
                                <span>Analista de Negócios & Desenvolvedor</span>
                            </div>
                            <p>Olá, sou o <b>Tiago.</b> <p> Profissional com vasta experiência na área de Tecnologia da Informação, com destaque em projetos de instituições bancárias. </p>
							<p>Conhecimentos gerais de técnicas comerciais, contabilidade, princípios de economia e investimentos. Administrador focado em metas.</p>
							<p>Habilidade em gerenciar e motivar equipes de trabalho, bom relacionamento interpessoal, pró-atividade e busca constante pelo conhecimento de novas tecnologias, técnicas administrativas e financeiras. </p>
                            <!--About Social Icons-->
                            <div class="social-icons">
                                <a href="http://www.linkedin.com/in/tiagopsilvatec"><i class="fa fa-linkedin"></i></a>
                                <a href="https://twitter.com/tiagopsilv"><i class="fa fa-twitter"></i></a>
                            </div>
                            <span class="about-button">
                                <a class="main-btn" href="<?= get_template_directory_uri(); ?>/Docs/CV_TIAGO PEREIRA DA SILVA.doc">Download CV</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->

        <!--Services Section Start-->
        <section class="services bg-gray pt-100 pb-50" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Services</h6>
                            <h2>Como posso ajuda-lo?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-laptop"></i>
                            </span>
                            <h4>Web Design</h4>
                            <p>Construção de páginas web personalizadas</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-gears"></i>
                            </span>
                            <h4>Desenvolvimento de Sistemas</h4>
                            <p>Análise do negócio e criação completa da solução.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-mobile"></i>
                            </span>
                            <h4>Desenvolvimento de Aplicativos</h4>
                            <p>Desenvolvimento de ferramentas IOS e Android.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-rocket"></i>
                            </span>
                            <h4>Soluções de Negócios</h4>
                            <p>Criação de melhorias e soluções.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-pencil"></i>
                            </span>
                            <h4>Mapeamenteo de processo e melhorias</h4>
                            <p>Estudos de caso e análise e otimização de processos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <i class="fa fa-support"></i>
                            </span>
                            <h4>Consultoria</h4>
                            <p>Gestão completa de processos e criação de fluxos inteligentes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Section End-->

        <!--Stats Section Start-->
        <section class="stats pt-100 pb-100" style="background-image: url('<?= get_template_directory_uri(); ?>/images/background/stats-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                            <p>Clientes Felizes</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                            </span>
                            <p>Projetos</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </span>
                            <p>Linhas de Código</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                            </span>
                            <p>Negócios</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Stats Section End-->


        <!--Portfolio Section Start-->
        <section class="portfolio pt-100 pb-70" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Portfolio</h6>
                            <h2>Trabalho concluidos</h2>
                        </div>
                        <div class="portfolio-filter text-center">
                            <ul>
                                <li class="sel-item" data-filter="*">All</li>
                                <li data-filter=".experiencia">Experiências</li>
                                <li data-filter=".projeto">Projetos</li>
                                <li data-filter=".negocio">Negócios</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row portfolio-items">



					<?php 
						$args = array( 'post_type' => 'experiencia' );
						$loop = new WP_Query( $args );
						if( $loop->have_posts() ) { ?>
						<?php while( $loop->have_posts() ) {
								$loop->the_post(); ?>

								<?php

								$useragent=$_SERVER['HTTP_USER_AGENT'];

								if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

								{

								?> 

									<?php the_post_thumbnail(); ?>

								<?php

								}

								else

								{

								?>

										 							<!--Portfolio Item-->
			                    <div class="col-lg-4 col-md-6 item <?= current( get_the_terms( get_the_ID(), 'tipo') )->slug; ?>">
			                        <div class="item-content">
			                            <?php the_post_thumbnail(); ?>
			                            <div class="item-overlay">
			                                <h6><?= the_title(); ?></h6>
			                                <div class="icons">
			                                      <span class="icon link">
			                                        <a href="#test-popup-<?=preg_replace('/\s+/', '_', the_title());?>" class="open-popup-link">
			                                            <i class="fa fa-search"></i>
														<div id="test-popup-<?=preg_replace('/\s+/', '_', the_title());?>" class="white-popup mfp-hide">
															<img src="<?= get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" style="width: 40%; max-height:500px; max-width:600px; margin-right: 15px;" alt="<?= preg_replace('/\s+/', '_', the_title()); ?>" align="left">
															<p> <?= the_content(); ?></p>
														</div>
			                                        </a>
			                                    </span>
			                                </div>

			                            </div>
			                        </div>
			                    </div>

						<?php 	}
							} ?>
					<?php } ?>
				</div>
			</div>
		</section>

        <!--Portfolio Section End-->

        <!--Blog Section Start-->
        <section class="blogs pt-100 pb-100 bg-gray" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading text-center">
                            <h6>Blog</h6>
                            <h2>&Uacute;ltimos Posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <!--Blogs Item-->

						<?php while( have_posts() ) {
								the_post(); ?>

	                        <!--Blogs Item-->
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

						<?php } ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="blog-button pt-40">
                            <a class="main-btn" href="<?php echo get_page_link( get_page_by_title("ListaBlog")->ID ); ?>">Veja mais...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Section End-->

        <!--Testimonials Section Start-->
        <section class="testimonials pt-100 pb-100" style="background-image: url('<?= get_template_directory_uri(); ?>/images/background/testimonials-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="owl-carousel owl-theme text-center">
                            
							<?php 
								$args = array( 'post_type' => 'depoimento' );
								$loop = new WP_Query( $args );
								if( $loop->have_posts() ) { ?>
								<?php while( $loop->have_posts() ) {
								$loop->the_post(); ?>

								<!--Testimonials Item-->
								<div class="testimonial-item">
								<div class="author-img">
								<?php the_post_thumbnail(); ?>
								</div>
								<h5><?= the_title(); ?></h5>
								<span><?= current( get_the_terms( get_the_ID(), 'cargo') )->slug; ?></span>
								<p><?= the_content(); ?></p>
								</div>

								<?php } ?>
							<?php	} ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Section End-->

        <!--Contact Section Start-->
        <section class="contact pt-100 pb-100" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading">
                            <h6>Contato</h6>
                            <h2>Deixe aqui sua Mensagem :-)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
						<?php

						if(isset($_POST['contato-submit']))
						{

							if(enviar_e_checar_email($_POST['contato-nome'], $_POST['contato-email'], $_POST['contato-mensagem']))
							{
								?> <script> alert("Mensagem enviada com sucesso. Obrigado.") </script> <?php
							}
							else
							{
								?> <script> alert("Erro ao enviar a mensagem. Desculpe. Envie um e-mail para tiagosilv@gmail.com.") </script> <?php
							}

						}

						?>
                        <!--Contact Form-->
                        <form id="contato-form" method="post"><input type='hidden' name='form-name' value='contactForm' />
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <!--name-->
                                    <input type="text" class="form-control con-validate" id="contato-nome" placeholder="Nome" name="contato-nome" minlength=3 >
                                </div>
                                <div class="col-md-6 form-group">
                                    <!--email-->
                                    <input type="email" class="form-control con-validate" id="contato-email" name="contato-email" placeholder="Email" >
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--message box-->
                                    <textarea class="form-control con-validate" id="contato-mensagem" name="contato-mensagem" placeholder="Seu mesagem" rows=6 ></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <!--contact button-->
                                    <button name="contato-submit" id="contato-submit" type="submit  class="mt-30 main-btn">
                                        Enviar Mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
        <!--Contact Section End-->

<?php get_footer() ?>