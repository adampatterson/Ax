<footer>
    <div class="container text-center">
        <?php
        // http://code.tutsplus.com/tutorials/how-to-integrate-bootstrap-navbar-into-wordpress-theme--wp-33410
        if (has_nav_menu('footer-links')) {
            wp_nav_menu(array(
                'menu'           => 'footer-links',
                'theme_location' => 'footer-links',
                'menu_id'        => 'footer-navigation',
                'depth'          => 2,
                'container'      => false,
                'menu_class'     => 'nav navbar-nav primary-nav navbar-right',
                'walker'         => new wp_bootstrap_navwalker()
            ));
        }
        #get_search_form();
        ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script type='text/javascript' src='<? __j() ?>app.js'></script>

<?php include(get_template_part_acf('templates/partials/admin-helper')); ?>

</body>
</html>
