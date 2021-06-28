<?php get_header()?>
    
    <?php if (have_posts()): ?>
        <ul>
        <?php while(have_posts()): the_post()?> 
            <li><?php the_title()?></li>
        <?php endwhile ?>
        </ul>
    <?php else : ?>
        <h1>Pas d'articles... <span class="material-icons">sentiment_dissatisfied</span></h1>
    <?php endif; ?>


<?php get_footer()?>