<?php
/**
 * Liminal Liftoff functions and definitions
 *
 * @package liminal-liftoff
 */

/**
 * Enqueue parent and child theme stylesheets.
 */
function liminal_liftoff_enqueue_styles() {
    wp_enqueue_style(
        'underscores-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( 'underscores' )->get( 'Version' )
    );

    wp_enqueue_style(
        'liminal-liftoff-style',
        get_stylesheet_uri(),
        array( 'underscores-style' ),
        wp_get_theme()->get( 'Version' )
    );
}

function liminal_liftoff_enqueue_fonts() {
    // Google Font
    wp_enqueue_style(
        'liminal-liftoff-google-fonts',
        'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap',
        array(),
        null
    );

    // Adobe Font
    wp_enqueue_style(
        'liminal-liftoff-adobe-fonts',
        'https://use.typekit.net/rdm0yhm.css', // replace with your Adobe kit URL
        array(),
        null
    );
}
add_action( 'wp_enqueue_scripts', 'liminal_liftoff_enqueue_styles' );

add_action( 'wp_enqueue_scripts', 'liminal_liftoff_enqueue_fonts' );