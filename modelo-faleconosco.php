<?php
/**
 * Template Name: Fale conosco
 *
 * Description: Template criado para exibir Formulário de contato
 *
 * @package WordPress
 * @subpackage freire
 * @since FREIRE 1.0
 */

 get_header();

 wp_reset_query();

 $email = get_option( 'email_field' );
 $telefone = get_option( 'telefone_field' );
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
               
        <!--CONTEUDO EXTRA-->
        <div class="cont_two_column mb">
        <div class="item">
          <h4>Fique ligado conosco.</h4>
          <p>Entre em contato com a nossa equipe para saber mais sobre nossos serviços e como podemos ajudá-lo a transformar a gestão pública.</p>
          <p>
            <span class="icon-telfone"><?php echo esc_html( $telefone ); ?></span>
            <span class="icon-email"><?php echo esc_html( $email ); ?></span>
          </p>
          </div>  
          <!--FORMULARIO DE EMAIL-->
          <div class="item">
          <h4>Envie uma mensagem</h4>      
            <form id="contact-form-page" method="post" action="<?php bloginfo('template_url'); ?>/php/enviar_email.php">
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
        </div>
        <!--FIM CONTEUDO EXTRA-->
      </div>
      <!--CONTEUDO -->

  <!-- Fim Conteúdo -->


<?php get_footer(); ?>
