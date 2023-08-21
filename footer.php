<!--FOOTER-->
  <?php
  $email = get_option( 'email_field' );
  $telefone = get_option( 'telefone_field' );
  $resumo = get_option( 'resumo_field' );
  $site_criado_por = get_option( 'site_criado_por_field' );
?>
<footer class="box-full verde-gradiente-50">
        <div class="cont_three_column">
          <div class="item">
            <h3><img src="img/logo-branca.png" alt=""></h3>
            <p>
              <?php echo esc_html( $resumo ); ?>
            </p>
          </div>
          <div class="item">
            <h3>Entre em Contato</h3>
            <p>
              <?php echo esc_html( $telefone ); ?>
              <span><?php echo esc_html( $email ); ?></span>
            </p>
          </div>
          <hr>
          <div class="item">
            <p>
              © 2023 Todos os direitos reservados
            </p>
          </div>
          <div class="item">
           
          </div>
          <div class="item">
            <p>
              <?php echo  $site_criado_por ; ?>
            </p>
          </div>
        </div> 
      </footer>
      <!--FIM FOOTER-->


</body>
<script src="<?php bloginfo('template_url'); ?>/js/flickity.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
</html>