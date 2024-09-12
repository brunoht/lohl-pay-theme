<?php
function my_child_theme_enqueue_styles() {
    $parent_style = 'hello-elementor'; // This is 'yourtheme-style' for the parent theme.

    // Enqueue the parent theme stylesheet.
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // Enqueue the child theme stylesheet, making sure it depends on the parent theme stylesheet.
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_child_theme_enqueue_styles' );