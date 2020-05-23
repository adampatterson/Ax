<?php if (has_post_thumbnail() && $show_thumb) { ?>
    <div class="post-image pb-3">
        <a href="<?php the_permalink(); ?>" title="Read Full Post">
            <?php the_post_thumbnail('sidebar', array(
                'class' => "img-fluid",
            )); ?>
        </a>
    </div>
<?php } ?>

<h2>
    <a href="<?php the_permalink(); ?>" title="Read Full Post"><?php the_title(); ?></a>
</h2>

<?php if ($show_date): ?>
    <p><?php Axe\Template::meta_date($show_author) ?></p>
<?php endif; ?>

<?php if ($show_category): ?>
    <p class="post-categories"><?php Axe\Template::meta_category(); ?></p>
<?php endif; ?>

<?= ($show_excerpt) ? get_the_excerpt() : '' ?>

<hr>
