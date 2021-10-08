<?php get_header(); ?>
<div class="row">
    <div id="hero" class="faa-horizontal faa-reverse">
        <h1>Welcome to my Shop</h1>
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/header.jpg" />
    </div>
</div>

<div class="row">
    <div class="container">
        <?php  if(have_posts()): while(have_posts()) : the_post();?>

        <?php the_content();?>

        <?php endwhile; else: endif; ?>
    </div>
</div>
<?php get_footer(); ?>