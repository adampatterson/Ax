<section id="post-blog">
    <? if ( have_posts() ):
        get_template_part( 'templates/loop','post' ); ?>

        <div class="center pagination">
            <?= get_previous_posts_link( ); ?>
            <?= get_next_posts_link( ); ?>
        </div>
    <? else:
        get_template_part( 'templates/content', 'none' );
    endif; ?>
</section>