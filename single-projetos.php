<?php 

get_header(); 

?>

<!-- Conteúdo -->

<header class="header alter2-header section parallax image-background center-bottom cover overlay overlay-primary alpha-8 text-contrast" style="background-image: url('img/screens/app/7.JPG')">
            <div class="divider-shape">
                <!-- waves divider --> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" class="shape-waves" style="left: 0; transform: rotate3d(0,1,0,180deg);">
                    <path class="shape-fill shape-fill-contrast" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z"></path></svg></div>
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-contrast bold"><?php echo get_the_title(); ?>
                        <p class="lead"><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Shop Hero Slider -->
        <!-- Deals -->
        <section class="section  mt-n6">
            <div class="container bring-to-front pt-0">
                <div class="row gap-y">
                    <div class="col-xl-6 col-lg-6">
                        <div class="shadow-box shadow-hover bg-contrast p-5 rounded h-100">
                            <p class="text-darker bold mt-0 d-flex">Objeto da Parceria: </p>
                            <div class="row no-gutters " style="text-align: justify;">
                                <?php 
                                    echo get_custom_meta($post->ID, 'objeto', TRUE);
                                ?>

                                <p class="text-darker bold mt-0 d-flex">Resultados: </p>
                                <p>
                                <?php 
                                    echo get_custom_meta($post->ID, 'resultados', TRUE);
                                ?>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="shadow-box shadow-hover bg-contrast p-3 rounded h-100">
                            <div class="mt-3  text-center text-md-start">
                                <span class="bold text-dark">CONTRATO DE CONCESSÃO DE COLABORAÇÃO FINANCEIRA Nº:</span> <?php  echo get_custom_meta($post->ID, 'contrato', TRUE);?>
                            </div>
                            <div class="mt-3 text-center text-md-start">
                                <span class="bold text-dark">Data da assinatura:</span> <?php  echo get_custom_meta($post->ID, 'data', TRUE);?>
                            </div>
                            <div class="mt-3 text-center text-md-start">
                                <span class="bold text-dark">Valor Total do Contrato:</span> <?php  echo get_custom_meta($post->ID, 'valor', TRUE);?>
                            </div>

                            <div class="rounded bg-info shadow  p-4 mt-3 text-contrast">
                                <p class="bold mb-3 mt-0 block text-center">Assinado entre:</p>

                                <div class="mb-3 text-center  text-md-start">
                                     <?php  echo get_custom_meta($post->ID, 'assinante1', TRUE);?>
                                </div>
                                <div class="mb-3 text-center text-md-start">
                                    <span class="bold ">CNPJ:</span> <?php  echo get_custom_meta($post->ID, 'cnpjassinante1', TRUE);?>
                                </div>
                                <hr>
                                <div class="mb-3 text-center text-md-start">
                                <?php  echo get_custom_meta($post->ID, 'assinante2', TRUE);?>
                                </div>
    
                                <div class="mb-3 text-center text-md-start">
                                    <span class="bold ">CNPJ:</span> <?php  echo get_custom_meta($post->ID, 'cnpjassinante2', TRUE);?>
                                </div>
                            </div>
                            
                                
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- ./Offers -->

<!-- Fim Conteúdo -->

<?php get_footer(); ?>