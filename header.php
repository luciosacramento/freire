<!doctype html>
<html lang="pt-BR">
    <head>        

        <title><?php
            if (is_single()) {
                single_post_title();
            } elseif (is_home() || is_front_page()) {
                bloginfo('name');
                print ' | ';
                bloginfo('description');
            } elseif (is_page()) {
                bloginfo('name');
                print ' | ';
                single_post_title('');
            } elseif (is_search()) {
                bloginfo('name');
                print ' | Busca por ' . wp_specialchars($s);
            } elseif (is_404()) {
                bloginfo('name');
                print ' | Não encontrado';
            } else {
                bloginfo('name');
                wp_title('|');
            }
            ?>
        </title>
       
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="x-ua-compatible" content="IE=9" >
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1"><!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dist_flickity.css">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?<?php echo strtotime(date('Y-m-d h:i:s')); ?>" type="text/css" media="screen" id="color-style"/>
        </head>

<body>
<header class="menu">
    <div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-cor.png" alt="Freire Tecnologia"></a></div>
    <nav class="menu-links">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header', // Substitua pelo nome da localização do seu menu
            'walker' => new Walker_Nav_Menu_Custom(),
        ));
        ?>
    </nav>
    <div class="social">
        <ul>
        <li><img src="<?php bloginfo('template_url'); ?>/img/icon_social_instagram.png" alt=""></li>
        <li><img src="<?php bloginfo('template_url'); ?>/img/icon_social_linkedin.png" alt=""></li>
        <li><img src="<?php bloginfo('template_url'); ?>/img/icon_celular.png" alt=""> <span>(11) 99992-1996</span> </li>
        </ul>
    </div>
    <div class="toggle">
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>