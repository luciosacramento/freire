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
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontawesome.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/aos.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/cookieconsent.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/odometer-theme-minimal.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/prism-okaidia.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/simplebar.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/smart_wizard_all.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swiper-bundle.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/dashcore.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/rtl.css">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?<?php echo strtotime(date('Y-m-d h:i:s')); ?>" type="text/css" media="screen" id="color-style"/>
        </head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- ./Making stripe menu navigation -->
    <nav class="st-nav navbar main-nav navigation fixed-top" id="main-nav">
        <div class="container">
            <ul class="st-nav-menu nav navbar-nav">
                <li class="st-nav-section nav-item"><a href="#main" class="navbar-brand"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Dashcore" class="logo logo-sticky"></a></li>
                <li class="st-nav-section st-nav-primary stick-right nav-item">
                    <a class="st-root-link nav-link" href="#features">O IDES</a> 
                    <a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="blocks" href="#projects">Projetos</a> 
                    <a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="blocks" href="#balanco">Balanços Social</a> 
                    <a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="pages" href="#contact">Contato</a> 
                </li>
            </ul>
        </div>
    </nav>
    <main class="overflow-hidden">