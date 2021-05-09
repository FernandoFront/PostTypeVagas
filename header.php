<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/uikit/dist/css/uikit.min.css"/>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"> 
        <!-- Header php -->
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="menu uk-navbar">
                <a class="" href="/home/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="FindWork Logo"></a>
                <nav class="uk-nav uk-navbar-right">
                    <a data-anime="1200" href="/cadastro/" class="btn">Cadastrar Vaga</a>
                </nav>
            </div>
        </header>