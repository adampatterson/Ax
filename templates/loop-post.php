<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('pb-5'); ?> itemscope="" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
        <?php if (has_post_thumbnail()) { ?>
            <div class="post-image pb-1">
                <a href="<?php the_permalink(); ?>" title="Read Full Post">
                    <?php the_post_thumbnail('featured', array(
                        'class' => "img-fluid",
                    )); ?>
                </a>
            </div>
        <?php } ?>

        <div class="content" itemprop="text">
            <h2><a href="<?php the_permalink(); ?>"
                   title="Read Full Post"><?php the_title(); ?></a></h2>
            <p><?php axe_posted_on() ?></p>

            <div class="entry-footer terms">
                <p class="post-categories"><?php axe_entry_categories(); ?></p>
                <p class="post-tags"><?php axe_entry_tags(); ?></p>
            </div>

            <p><?= get_the_excerpt(); ?></p>

            <p>
                <a href="<?php the_permalink(); ?>" title="Keep Reading" class="btn btn-outline-primary">
                    Keep Reading
                </a>
            </p>
        </div>
    </article>
<?php endwhile; ?>
