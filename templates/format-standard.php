<div class="wrapper">
    <section>
        <?php
        $style = '';
        if (has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured');
            $style = "style='background-image: url($image[0]); position: relative; background-size: cover !important;'";
        } ?>
        <div class="container">
            <figure class="wp-block-image alignwide">
                <img src="<?= $image[0] ?>" alt="" class="<?= the_title(); ?>">
            </figure>

            <article>
                <div class="row">
                    <header class="col-md-12">
                        <h1><?php the_title(); ?></h1>
                        <p><?= get_avatar(get_the_author_meta('ID'), 24, '', '', ["class" => ["rounded-circle"]]); ?> <?php axe_posted_on() ?> <?php axe_entry_edit(); ?></p>
                    </header>

                    <div class="content col-md-12">
                        <?php the_content(); ?>
                    </div>

                </div>
                <?php get_template_part('templates/partials/post-footer') ?>
            </article>
        </div>
    </section>

</div><!-- wrapper -->
