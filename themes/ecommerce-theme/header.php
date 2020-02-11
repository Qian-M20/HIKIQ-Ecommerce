<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package E-commerce_Theme
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
<h1>this is for test</h1>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content">
		<?php esc_html_e( 'Skip to content', 'ecommerce-theme' ); ?>
	</a> -->

	<header id="masthead" class="site-header grid-x grid-margin-x">
		
		<div class="cell large-1 medium-1"></div>
		<div class="site-branding cell large-2 medium-2">
			<?php the_custom_logo();?>
		</div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation cell large-5 medium-5 grid-x align-middle">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ecommerce-theme' ); ?></button> -->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<div class="cell large-3 medium-3">
			<?php
				if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;
				}
			?>
			<div id="secondary" class="widget-area">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>

		<div class="cell large-1 medium-1"></div>


		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
