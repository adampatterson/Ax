<?php get_template_part('templates/partials/header'); ?>

<section id="main" role="main">
    <?
    if (have_posts()) {
        while (have_posts()) {
            the_post();

            if(!get_post_format()) {
                get_template_part('templates/format', 'standard');
            } else {
                get_template_part('templates/format', get_post_format());
            }
        }
    } ?>

</section>

<? get_template_part('templates/partials/footer'); ?>
