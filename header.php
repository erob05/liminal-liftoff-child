<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ll-rocket-logo.svg" alt="Liminal Liftoff Logo">
            </a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><span class="purple">Liminal</span><br><span class="orange">Liftoff</span></a>
        </div>
        <nav class="main-navigation">
            <a <?php if ( is_front_page() ) echo 'class="current"'; ?> href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <a <?php if ( is_page( 'about' ) ) echo 'class="current"'; ?> href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>">About the Game</a>
            <a <?php if ( is_page( 'meet-the-team' ) ) echo 'class="current"'; ?> href="<?php echo esc_url( get_permalink( get_page_by_path( 'meet-the-team' ) ) ); ?>">Meet the Team</a>
            <a id="buy-btn" href="#">Download</a>
        </nav>
	</header><!-- #masthead -->
