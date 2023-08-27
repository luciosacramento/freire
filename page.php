<?php
/**
 * Template Name: Página interna padrão
 *
 * Description: Template criado para exibir Página interna com conteúdo simples (texto e imagem)
 *
 * @package WordPress
 * @subpackage tcm
 * @since TCM 1.0
 */

 get_header();

 wp_reset_query();

 ?>

 <!-- Conteúdo -->

  <!--TITULO-->
  <div class="titulo-interna">
                <div>
                    <h1>
                        <div><?php the_title(); ?></div>
                    </h1>
                </div>
            </div>
      <!--FIM TITULO-->
      
      <!--CONTEUDO -->
      <div class="box-full">
         <!--CONTEUDO FOTO E TEXTO-->
        <div class="texto-foto mb">
            <?php if (get_the_post_thumbnail_url( get_the_ID() ) != ''){ ?>
                <div class="img_destaque" >
                  <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>" alt=""> 
                </div>
            <?php } ?>
            <div class="texto">
                <h4><?php echo get_custom_meta( get_the_ID(), 'subtitulo', true ); ?></h4>
                <?php the_content(); ?>
            </div>
        </div>
        <!--FIM CONTEUDO FOTO E TEXTO-->

        <!--SEGUNDO CONTEUDO FOTO E TEXTO-->
        <?php if (get_custom_meta( get_the_ID(), 'segundo_bloco_visivel', true ) == 1){ ?>

          <div class="box-full">
            <!--CONTEUDO FOTO E TEXTO-->
            <div class="texto-foto mb">
              <div class="texto">
                <h4><?php echo get_custom_meta( get_the_ID(), 'titulo_segundo_bloco', true ); ?></h4>
                <?php echo get_custom_meta( get_the_ID(), 'texto_segundo_bloco', true ); ?>
              </div>
              <?php if (get_custom_meta( get_the_ID(), 'imagem_segundo_bloco', true ) != ''){ ?>
                <div class="img_destaque" >
                  <img src="<?php echo get_custom_meta( get_the_ID(), 'imagem_segundo_bloco', true ); ?>" alt=""> 
                </div>
              <?php } ?>
            </div>
            
        <?php } ?>
        <!--FIM SEGUNDO CONTEUDO FOTO E TEXTO-->
        
        <!--CONTEUDO TAB LIST-->

        <?php if (get_custom_meta( get_the_ID(), 'pricipais_industrias', true ) == 1){ ?>
        <div class="cont_one_column mb">
            <h4 class="mb">Principais Indústrias</h4>
            <!--TAB LIST-->
            <div class="tab-list-horizontal mb">
                
                <?php
                    $args = array(
                        'post_type' => 'page', // Tipo de conteúdo: página
                        'posts_per_page' => -1, // Mostrar todas as páginas que atendem aos critérios
                        'meta_key' => 'aparece_nas_pricipais_industrias',
                        'meta_value' => '1'
                    );
                    
                    $pages_query = new WP_Query( $args );
                    
                    if ( $pages_query->have_posts() ) {
                      ?>
                        <ul class="buttons">
                      <?php
                      $num = 1;
                        while ( $pages_query->have_posts() ) {
                            $pages_query->the_post();
                                                  }
                        ?>
                          <li class="<?php echo($num == 1? 'active' : ''); ?>" data-tab="tab<?php echo $num; ?>"><?php the_title(); ?></li>
                        <?php

                        $num++;  

                        wp_reset_postdata(); // Restaurar os dados originais do post
                        ?>
                        </ul>
                      <?php

                    } else {
                        echo 'Nenhuma página encontrada.';
                    }
                    
                    $args = array(
                        'post_type' => 'page', // Tipo de conteúdo: página
                        'posts_per_page' => -1, // Mostrar todas as páginas que atendem aos critérios
                        'meta_key' => 'aparece_nas_pricipais_industrias',
                        'meta_value' => '1'
                    );
                    
                    $pages_query = new WP_Query( $args );
                    
                    if ( $pages_query->have_posts() ) {
                      ?>
                        <div class="conteiners">
                      <?php
                      $num = 1;
                        while ( $pages_query->have_posts() ) {
                            $pages_query->the_post();
                                                  }
                        ?>
                          <div class="tab-content <?php echo($num == 1? 'active' : ''); ?>" id="tab<?php echo $num; ?>">
                             <?php the_excerpt(); ?>                     
                          </div>
                        <?php

                        $num++;  

                        wp_reset_postdata(); // Restaurar os dados originais do post
                        ?>
                        </div>  
                      <?php

                    } 
                    ?>
                                                 
            </div>
            <!--FIM TAB LIST-->
        </div>
        <?php } ?>
        <!--FIM CONTEUDO TAB LIST-->
         
        
        <?php if (get_custom_meta( get_the_ID(), 'terceiro_bloco_visivel', true ) == 1
                  || get_custom_meta( get_the_ID(), 'solucoes_e_suporte_visivel', true ) == 1
                  || get_custom_meta( get_the_ID(), 'formulario_de_contato_visivel', true ) == 1){ 


              if(get_custom_meta( get_the_ID(), 'terceiro_bloco_visivel', true ) == 1 && 
                (get_custom_meta( get_the_ID(), 'solucoes_e_suporte_visivel', true ) == 1
                || get_custom_meta( get_the_ID(), 'formulario_de_contato_visivel', true ) == 1)
              ){
                $class = 'cont_two_column';
              }else{
                $class = 'cont_one_column';
              }       
        ?>

        <hr class="mb">
        <!--CONTEUDO EXTRA-->
        <div class="<?php echo $class;?> mb">
        <?php if (get_custom_meta( get_the_ID(), 'terceiro_bloco_visivel', true ) == 1){ ?>
          <div class="item">
            <h4><?php echo get_custom_meta( get_the_ID(), 'titulo_terceiro_bloco', true ); ?></h4>
            <?php echo get_custom_meta( get_the_ID(), 'texto_terceiro_bloco', true ); ?>
          </div>
          <?php }    
          if(get_custom_meta( get_the_ID(), 'formulario_de_contato_visivel', true ) == 1){
          ?>
          <div class="item border-left">
            <div class="cont_two_column">
              <div class="item">
                <h5>Soluções sob medida</h5>
                Soluções sob medida para a administração pública
              </div>
              <div class="item">
                <h5>Suporte Técnico</h5>
                Suporte técnico e manutenção dos sistemas
            </div>
          </div>
          <?php } ?>

          <?php if(get_custom_meta( get_the_ID(), 'formulario_de_contato_visivel', true ) == 1){ ?>
          <h4>Ficou com alguma dúvida?</h4>
          <p>Entre em contato conosco para saber mais sobre nossos serviços e como podemos ajudá-lo a transformar a gestão pública.</p>
          <!--FORMULARIO DE EMAIL-->
          <div class="form-container">
            <form id="contact-form" method="post" action="php/enviar_email.php">
              <div class="form-column">
                <input type="text" id="nome" name="nome" required placeholder="Nome">
                <input type="email" id="email" name="email" required placeholder="E-mail">
                <input type="tel" id="telefone" name="telefone" placeholder="Telefone">
              </div>
              <div class="form-column">
                <textarea id="mensagem" name="mensagem" required placeholder="Mensagem"></textarea>
                <button type="submit">Enviar</button>
              </div>
            </form>
          </div>
          <!--FIM FORMULARIO DE EMAIL-->
          <?php } ?>

        </div>
        <?php } ?>
        <!--FIM CONTEUDO EXTRA-->

      </div>
      <!--CONTEUDO -->

  <!-- Fim Conteúdo -->


<?php get_footer(); ?>
