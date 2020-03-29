<?php
/**
 * The template for displaying all custom blog single 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package E-commerce_Theme
 */

get_header();
?>

	<div id="primary" class="singleJournal content-area grid-container">
	
		<main id="main" class="site-main grid-x">

			<div class="cell large-1 medium-1"></div>

			<div class="paddingInside cell large-10 medium-10 small-12">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
			</div>	

			<div class="cell large-1 medium-1"></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
