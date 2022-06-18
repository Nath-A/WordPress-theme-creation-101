<?php get_header() ?>

<?php if (have_posts()) : ?>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php while (have_posts()) : the_post() ?>
            <!-- Prend la variable global post et change sa valeur avec le nouvel article  -->
            <div class="col">
                <div class="card">
                    
                    <?php if (has_post_thumbnail()) 
                    {
                        the_post_thumbnail('large',['class'=> 'card-img-top', 'alt'=>'', 'style'=>'height: auto;']);
                        // /! post-thumbnail size is the original size ! Be carefull, use 'medium' and parameter into wp-admin (de base 300x300)
                    } ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?> - <?php the_category($separator = "-") ?></h5>
                        <p class="card-text">
                            <?php
                            // the_content('Lire la suite')
                            // Ce qui est entre " " Necessite d'avoir fait dans l'article un bloc "more" et affiche la page de l'article
                            the_excerpt()
                            // Affiche l'extrait (semble supporter les strong et les br) mais n'affiche par de lien lire la suite.
                            ?><br>
                            <!--  -->
                            <a href="<?php the_permalink() ?>" class="card-link">Permalink via fonction</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php the_date() ?></small>
                    </div>
                </div>
            </div>


        <?php endwhile ?>
    </div>
<?php else : ?>
    <h1>Pas d'articles... <span class="material-icons">sentiment_dissatisfied</span></h1>
<?php endif; ?>
<!-- https://developer.wordpress.org/themes/basics/the-loop/ -->

<?php get_footer() ?>