<div class="content-wrapper">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <article>
                        <?php the_title('<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->'); ?>
                        <?php the_content(); ?>
                    </article>
                </section>
            </div>
        </div>
    </div>
</div>
