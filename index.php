<?php

get_header();

if (have_posts()):
    while(have_posts()):
        the_post();
?>

<article class='bg-slate-400 pb-2 mb-2'>
        <h2 class='pb-2 text-center text-2xl' > <a href="<?php echo get_permalink()?>"><?php the_title();?></a> </h2>
        <?php
           if ( has_post_thumbnail() ):
                ?>
        <div>
                <?php the_post_thumbnail( 'medium' ); ?>
        </div>
        <?php endif ?>
        <div class='grid grid-cols-2'>
        <div class='col categorie'>
        categorie:<?php the_terms( $post->ID, 'category', '<ul class="row"><li>', '</li>,<li>', '</li></ul>' ); ?>
        </div>
        <div class='col tags text-end'>
        tags:<?php the_terms( $post->ID, 'post_tag', '<ul class="row justify-content-end"><li>', '</li>,<li>', '</li></ul>' ); ?>
        </div>
        </div>
    </article>
        <?php
    endwhile;
else:
    ?>
    <p>Aucun post n'a été trouvé</p>
    <?php
endif;

get_footer();