<!DOCTYPE html>
<html>
    <head>

        <title></title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://unpkg.com/@pluginjs/animate-text/dist/animate-text.css">
    </head>
    <body  <?php body_class('test');?>>
    <header>
        <div class="container d-flex align-item-center justify-content-between">
            <img src="<?php bloginfo('template_directory');?>/images/logo.png" class="logo" />
            <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-menu d-flex'
                )
            )
            ?>
        
        </div>
</header>