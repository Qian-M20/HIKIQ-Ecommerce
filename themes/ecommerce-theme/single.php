<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package E-commerce_Theme
 */

get_header();
?>

	<div id="primary" class="content-area grid-container">

	
		<main id="main" class="site-main grid-x">
	
			<!-- <aside class="cell large-3 medium-3">
				<?php
					if ( ! is_active_sidebar( 'sidebar-1' ) ) {
							return;
					}
					?>
					<div id="secondary" class="widget-area">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
			</aside>  -->

			<div class="cell large-12 medium-12 singleMain">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
			</div>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
