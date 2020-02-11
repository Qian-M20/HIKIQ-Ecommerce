<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package E-commerce_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footerLinks">
			<nav id="social-navigation" class="main-navigation cell large-12 medium-12 grid-x align-middle">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ecommerce-theme' ); ?></button> -->
					<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_id'        => 'social-menu',
					) );
					?>
			</nav><!-- #social-links-navigation -->
			<nav id="footer-navigation" class="main-navigation cell large-12 medium-12 grid-x align-middle">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ecommerce-theme' ); ?></button> -->
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer-menu',
					) );
					?>
			</nav><!-- #footer-menu-navigation -->
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ecommerce-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'ecommerce-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ecommerce-theme' ), 'ecommerce-theme', '<a href="http://staging.qian-ma.com/assign3100714286/">WebX</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
