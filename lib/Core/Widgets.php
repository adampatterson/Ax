<?php

namespace Axe\Core;

class Widgets
{

    /**
     * @var string
     */
    private $path;

    public function __construct()
    {
        $this->path = get_template_directory();

        add_action('widgets_init', [$this, 'register_sidebars']);
        add_action('widgets_init', [$this, 'register_widgets']);
        add_action('widgets_init', [$this, 'unregister_default_widgets'], 11);
    }

    public function register_widgets()
    {
        $widgets = [
            'Posts'
        ];

        foreach ($widgets as $widget) {

            $file = $this->path . '/lib/Widgets/' . $widget . '.php';

            // Skip if already included or if file is missing
            if (class_exists($widget) or ! file_exists($file)) {
                continue;
            }

            // Include the widget class
            require_once $file;

            if ( ! class_exists($widget)) {
                continue;
            }
        }

    }

    /**
     * Register Widget Areas
     */
    public function register_sidebars()
    {
        // Main Sidebar
        register_sidebar(array(
            'name'          => 'Main Sidebar',
            'id'            => 'main',
            'description'   => __('Widgets for Main Sidebar', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => 'Top Widgets',
            'id'            => 'widgets_top',
            'description'   => __('Widgets for Top of the page', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => 'Bottom Widgets',
            'id'            => 'widgets_bottom',
            'description'   => __('Widgets for Bottom of the page', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        register_sidebar(array(
            'name'          => 'Blog Sidebar',
            'id'            => 'blog',
            'description'   => __('Widgets for Main Blog', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        // Woo Commerce Listing Sidebar
        register_sidebar(array(
            'name'          => 'WooCommerce Listing Sidebar',
            'id'            => 'woo-sidebar',
            'description'   => __('Widgets for WooCommerce Sidebar', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        // Woo Commerce Single Product Sidebar
        register_sidebar(array(
            'name'          => 'WooCommerce Single Product Sidebar',
            'id'            => 'woo-single',
            'description'   => __('Widgets for WooCommerce Sidebar', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        // Above Post
        register_sidebar(array(
            'name'          => 'Widgets Above Post',
            'id'            => 'widgets_post_above',
            'description'   => __('Widgets for Above the Post', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        // Below Post
        register_sidebar(array(
            'name'          => 'Widgets Below Post',
            'id'            => 'widgets_post_below',
            'description'   => __('Widgets for Below the Post', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));

        // Footer
        register_sidebar(array(
            'name'          => 'Footer',
            'id'            => 'footer',
            'description'   => __('Widgets for the Footer', 'axe'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>'
        ));
    }

    public function unregister_default_widgets()
    {
        unregister_widget('WP_Widget_Pages');
        unregister_widget('WP_Widget_Calendar');
        unregister_widget('WP_Widget_Links');
        unregister_widget('WP_Widget_Meta');
        unregister_widget('WP_Widget_Search');
        unregister_widget('WP_Widget_Recent_Comments');
        unregister_widget('WP_Widget_Tag_Cloud');
        unregister_widget('WP_Nav_Menu_Widget');
    }

}
