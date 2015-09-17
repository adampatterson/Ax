<? while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) {
        ?>
        <a href="<?php the_permalink(); ?>" title="Read Full Post">
            <?php the_post_thumbnail('grid'); ?>
        </a>
    <?php } ?>

    <div class="content">
        <header>
            <h1><a href="<?php the_permalink(); ?>" title="Read Full Post"><?php the_title(); ?></a></h1>
            <p>
				By <? the_author_posts_link(); ?>
				on <? the_time(get_option('date_format')); ?>
			</p>
        </header>

        <?php
        if (get_theme_mod('archives_style') == 'content') {
            the_content();
        } else {
			$excerpt = get_the_excerpt();
            ?>
            <p>
                <?php echo $excerpt; ?>
                <a href="<?php the_permalink(); ?>" title="Read More">
                    Read More...
                </a>
            </p>
        <?php } ?>

       <footer>
           <ul class="terms tags">
               <?php
               // Check if there are categories
               // If so, output them
               $terms = get_the_terms(get_the_ID(), 'category');
               if (is_array($terms)) {
                   ?>
                   <li><?php the_terms(get_the_ID(), 'category', 'Categories: ', ', '); ?></li>
               <?php
               }
               $terms = get_the_terms(get_the_ID(), 'post_tag');
               if (is_array($terms)) {
                   ?>
                   <li><?php the_terms(get_the_ID(), 'post_tag', 'Tags: ', ', '); ?></li>
               <?php
               }
               ?>
           </ul>
       </footer>
    </div>
</article>
<? endwhile ?>
