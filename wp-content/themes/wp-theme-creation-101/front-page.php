<!-- Page principale : fait office d'index.html, affiche la page définie dans Wordpress comme page statique à afficher -->
<?php get_header()?>
<?php while(have_posts()): the_post() ?>
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>

    <a href="<?= get_post_type_archive_link('post') ?>">Voir le blog !</a>
    <!-- fait un echo de get_post_trucmuche 
        https://developer.wordpress.org/reference/functions/get_post_type_archive_link/ -->
<?php endwhile;?>
<?php get_footer()?>