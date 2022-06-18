<?php get_header() ?>

<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <h1 class="text-center"><?php the_title()?></h1>
            <p>
                <img src="<?php the_post_thumbnail_url()?>" alt="" width="100%" height="auto" >
            </p>
           <?php the_content()?> 
        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>Pas d'articles... <span class="material-icons">sentiment_dissatisfied</span></h1>
<?php endif; ?>


<?php get_footer() ?>