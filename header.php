<!DOCTYPE html>
<html>
    <head>

        <title></title>
        <?php wp_head(); ?>
        <script src="https://unpkg.com/@pluginjs/animate-text/dist/animate-text.js"></script>
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