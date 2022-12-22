<?php

get_header();

if (have_posts()):
    the_post();
?>

<article class='justify-self-center bg-slate-400'>
        <h2 class='pb-2 text-center text-2xl' ><?php the_title();?></h2>
        <?php
           if ( has_post_thumbnail() ):
                ?>
        <div>
                <?php the_post_thumbnail( 'medium' ); ?>
        </div>
        <?php endif ?>
        <p class='content'><?php the_content();?></p>
</article>
        <?php
endif;

get_footer();