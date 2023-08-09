<?php 
get_header(); 

// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

// Agora o array $paginas_com_filhos contém todas as páginas (principais e filhos) no mesmo array
print "<pre>";
print_r($all_wp_pages['0']);
print "</pre>";
?>

       <!-- Alternative 2 Heading -->
       <header class="header app-landing-2-header section">
            <div class="shapes-container">
                <!-- diagonal shapes -->
                <div class="shape shape-animated" data-aos="fade-down-right" data-aos-duration="1500" data-aos-delay="100"></div>
                <div class="shape shape-animated" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
                <div class="shape shape-animated" data-aos="fade-up-left" data-aos-duration="500" data-aos-delay="200"></div>
                <div class="shape shape-animated" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200"></div><!-- animated shapes -->
                <div class="animation-shape shape-triangle">
                    <div class="animation--rotating"></div>
                </div>
                <div class="static-shape pattern-dots-1"></div>
                <div class="static-shape pattern-dots-2"></div><!-- main shape -->
                <div class="static-shape background-shape-main"></div>
            </div>
            <div class="container">
                <div class="row align-items-center gap-y">
                    <div class="col-md-6">
                        <h2 class="bold text-primary">Nome do Projeto</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mauris ante, condimentum eget tincidunt blandit, varius a augue.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="device-twin ms-auto align-items-center">
                            <div class="front me-0" data-aos="fade-left">
                                <div class="screen shadow-box"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" alt="..."></div>
                                <div class="notch"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- ./A IDES -->
        <section class="section mt-n6" id="features">
            <div class="container pt-0">
                <div class="bg-contrast shadow rounded p-5">
                <div class="row gap-y">
                    <div class="col-md-4">
                        <h2><?php echo $all_wp_pages['0']->post_title; ?></h2>
                        <p class="lead"><?php echo $all_wp_pages['0']->post_excerpt; ?></p>
                        <p class="text-muted"><?php echo $all_wp_pages['0']->post_content; ?></p>
                    </div>
                    <div class="col-md-8">
                        <div class="accordion accordion-clean" id="faqs-accordion">
                            <div class="card mb-3">
                                <div class="card-header"><a href="#" class="card-title btn" data-bs-toggle="collapse" data-bs-target="#v0-q0"><i class="fas fa-angle-down angle"></i> <?php echo $all_wp_pages['1']->post_title; ?></a></div>
                                <div id="v0-q0" class="collapse show" data-bs-parent="#faqs-accordion">
                                    <div class="card-body"><?php echo $all_wp_pages['1']->post_content; ?></div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header"><a href="#" class="card-title btn" data-bs-toggle="collapse" data-bs-target="#v1-q1"><i class="fas fa-angle-down angle"></i> <?php echo $all_wp_pages['2']->post_title; ?></a></div>
                                <div id="v1-q1" class="collapse" data-bs-parent="#faqs-accordion">
                                    <div class="card-body"><?php echo $all_wp_pages['2']->post_content; ?></div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header"><a href="#" class="card-title btn collapsed" data-bs-toggle="collapse" data-bs-target="#v1-q2"><i class="fas fa-angle-down angle"></i> <?php echo $all_wp_pages['3']->post_title; ?></a></div>
                                <div id="v1-q2" class="collapse" data-bs-parent="#faqs-accordion">
                                    <div class="card-body"><?php echo $all_wp_pages['3']->post_content; ?></div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header"><a href="#" class="card-title btn collapsed" data-bs-toggle="collapse" data-bs-target="#v1-q3"><i class="fas fa-angle-down angle"></i> <?php echo $all_wp_pages['4']->post_title; ?></a></div>
                                <div id="v1-q3" class="collapse" data-bs-parent="#faqs-accordion">
                                    <div class="card-body"><?php echo $all_wp_pages['4']->post_content; ?> </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section> <!-- ./Projetos -->

        <section class="section features-carousel b-b">
            <div class="container pt-0" id="projects">
                <h2 class="pt-4">Projetos </h2>

                <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-sw-autoplay="3500" data-sw-loop="true" data-sw-nav-arrows=".features-nav" data-sw-show-items="1" data-sw-space-between="30" data-sw-breakpoints="{&quot;768&quot;: {&quot;slidesPerView&quot;: 3}, &quot;992&quot;: {&quot;slidesPerView&quot;: 4}}">
                    <div class="swiper-wrapper px-1" id="swiper-wrapper-d225e709811505fb" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1491.75px, 0px, 0px);">

                    <?php
                                $wp_query_projetos = new WP_Query(array(
                                    'post_type' => 'projetos',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                ));

                                $count = 15;
                                $n = 0;

                             while ( $wp_query_projetos->have_posts() ) : $wp_query_projetos->the_post();  
                                        $n++;
                                       // $data_personalizada = date('d/m/Y', get_post_meta($post->ID, 'wpcf-data-criacao-noticia', FALSE)[0] + 86400);
                                        //$resumo = get_post_meta($post->ID, 'wpcf-resumo-noticias', TRUE);

                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID() ) );

                                ?>
                                    <div class="swiper-slide px-2 px-sm-1 swiper-slide-duplicate " data-swiper-slide-index="<?php echo $n+2;?>" role="group" aria-label="<?php echo $n; ?> / <?php echo $count; ?>" style="width: 301.5px; margin-right: 30px;">
                                        <div class="card border-0 shadow">
                                            <div class="card-body">
                                                <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="<?php echo get_permalink(get_the_ID()); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive" alt="<?php echo get_the_title(); ?>"></a></div>
                                                <h4 ><?php echo get_the_title(); ?></h4>
                                                <p><?php echo get_the_content(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                 endwhile; 
                                 wp_reset_postdata();

                                ?>

                        <!--div class="swiper-slide px-2 px-sm-1 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" role="group" aria-label="1 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1 swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="2 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div><div class="swiper-slide px-2 px-sm-1 swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="3 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div><div class="swiper-slide px-2 px-sm-1 swiper-slide-duplicate" data-swiper-slide-index="6" role="group" aria-label="4 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center shadow icon-xl"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1" data-swiper-slide-index="0" role="group" aria-label="5 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1 swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="6 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1 swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="7 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1 swiper-slide-next" data-swiper-slide-index="3" role="group" aria-label="8 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1" data-swiper-slide-index="4" role="group" aria-label="9 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Vulputate mi habitant curae; per facilisis. Ornare. Imperdiet curabitur, enim venenatis donec consequat adipiscing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide px-2 px-sm-1" data-swiper-slide-index="5" role="group" aria-label="10 / 15" style="width: 301.5px; margin-right: 30px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="bg-light p-3 d-flex align-items-center justify-content-center"><a href="projeto.html"><img src="<?php bloginfo('template_url'); ?>/img/screens/app/7.JPG" class="img-responsive" alt=""></a></div>
                                    <h4 >Lorem<br><span class="bold">Ipsum </span></h4>
                                    <p>Sed malesuada enim at lorem congue malesuada. Nam rhoncus molestie dolor, sit amet porttitor risus laoreet sed.</p>
                                </div>
                            </div>
                        </div-->

                    
                    <div class="text-primary features-nav features-nav-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d225e709811505fb"><span class="text-uppercase small">Próximo</span> <i class="features-nav-icon fas fa-long-arrow-alt-right"></i></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </section>
         <!-- ./Balanco Social -->
        <section id="balanco" class="screenshots coverflow">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="bold display-4">Balanço Social</h2>
                    <p class="text-secondary">Nossos projetos ano após ano.</p>
                </div>
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-sw-centered-slides="true" data-sw-autoplay="2500" data-sw-show-items="2" data-sw-space-between="0" data-sw-breakpoints="{&quot;992&quot;: {&quot;slidesPerView&quot;: 3}, &quot;1200&quot;: {&quot;slidesPerView&quot;: 5}}">
                    <div class="swiper-wrapper" id="swiper-wrapper-e68102fcc7d1510ece" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-954.4px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" role="group" aria-label="1 / 16" style="width: 400px; margin-right: 20px;"><a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/balanco-2014-2015.JPG" alt="..."></a></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" role="group" aria-label="2 / 16" style="width: 400px; margin-right: 20px;"><a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/balanco-2014-2015.JPG" alt="..."></a></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="3 / 16" style="width: 400px; margin-right: 20px;"><a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/balanco-2014-2015.JPG" alt="..."></a></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="4 / 16" style="width: 400px; margin-right: 20px;"><a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/balanco-2014-2015.JPG" alt="..."></a></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="5 / 16" style="width: 400px; margin-right: 20px;"><a href="#"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/balanco-2014-2015.JPG" alt="..."></a></div>
                        
                                <?php
                                $wp_query_projetos = new WP_Query(array(
                                    'post_type' => 'balanco',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                ));

                                $count = $wp_query_projetos->found_posts;
                                $n = 0;

                             while ( $wp_query_projetos->have_posts() ) : $wp_query_projetos->the_post();  
                                        $n++;
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID() ) );
                                ?>
                                    <div class="swiper-slide " data-swiper-slide-index="0" role="group" aria-label="<?php echo $n; ?> / <?php echo $count; ?>" style="width: 400px; margin-right: 20px;"><a href="<?php echo get_post_meta($post->ID, 'wp_custom_attachment', TRUE);?>"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="..."></a></div>
                                <?php
                                 endwhile; 
                                 wp_reset_postdata();

                                ?>
           
                    <div class="swiper-button swiper-button-next rounded-circle shadow" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-f978ad05acdffc23"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></div>
                    <div class="swiper-button swiper-button-prev rounded-circle shadow" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-f978ad05acdffc23"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </section>
        <!-- ./Contact -->

        <section class="section block bg-contrast" id="contact">
            <div class="container py-4">
                <div class="row gap-y">
                    <div class="col-12 col-md-6">
                        <div >
                            <p class="text-uppercase">ENTRAR EM CONTATO</p>
                            <h2 class="font-md bold">Gostaríamos de ouvir de você</h2>
                        </div>
                        <p class="lead mb-5">Não hesite em entrar em contato conosco, independentemente do seu pedido. Estamos aqui para ajudá-lo.</p>
                        <ul class="list-unstyled list-icon">
                            <li><i class="fas fa-map-marker text-primary"></i>
                                <p>Rua 123, Salvador, Bahia</p>
                            </li>
                            <li><i class="fas fa-phone text-primary"></i>
                                <p>(71) 999-7890</p>
                            </li>
                            <li><i class="fas fa-envelope text-primary"></i>
                                <p><a href="mailto:support@5studios.net">support@ides.com.br</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="srv/contact.php" method="post" class="form form-contact" name="form-contact" data-response-message-animation="slide-in-up" novalidate="novalidate">
                            <div class="mb-4"><label for="contact_email" class="text-dark bold mb-0">Endereço de email</label>
                                <div id="emailHelp" class="small form-text text-secondary mt-0 mb-2 italic">Nunca compartilharemos seu e-mail com mais ninguém.</div><input type="email" name="Contact[email]" id="contact_email" class="form-control bg-contrast" placeholder="E-mail válido" required="">
                            </div>
                            <div class="mb-4"><label for="contact_email" class="text-dark bold">Assunto</label> <input type="text" name="Contact[subject]" id="contact_subject" class="form-control bg-contrast" placeholder="Assunto" required=""></div>
                            <div class="mb-4"><label for="contact_email" class="text-dark bold">Mensagem</label> <textarea name="Contact[message]" id="contact_message" class="form-control bg-contrast" placeholder="O que você quer nos informar?" rows="8" required=""></textarea></div>
                            <div class="d-grid gap-2"><button id="contact-submit" data-loading-text="Sending..." name="submit" type="submit" class="btn btn-primary btn-rounded">Enviar Mensagem</button></div>
                        </form>
                        <div class="response-message">
                            <div class="section-heading"><i class="fas fa-check font-lg"></i>
                                <p class="font-md m-0">Obrigado!</p>
                                <p class="response">Sua mensagem foi enviada, entraremos em contato o mais breve possível.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>