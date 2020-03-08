<?php
/*
 * Template Name: Custom
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main grid-x grid-margin-x">
			<div class=" cell large-1"></div>

			<article class="cell large-10" id="bodyText">
				<?php
				/**
				 * Custom WP_Query
				 */
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 6,
				);

				$test_query = new WP_Query( $args );

				if ( $test_query->have_posts() ) {
				?>
					<div>
						<div class="post-list height-1">
							<div class="grid-x grid-margin-x grid-margin-y">
								
								<?php
								while ( $test_query->have_posts() ) {
									$test_query->the_post();
									?>
									<div class="cell small-12 medium-6 large-4 custom post-list-wrapper">
										<div id="post-<?php echo get_the_ID(); ?>">
											<a href="<?php the_permalink(); ?>"><h4 class="text-center postTitle"><?php echo get_the_title(); ?></h4></a>
											<!-- post-thumbnail -->
											<div class="custom post-thumbnail">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
											</div><!-- post-thumbnail -->
											<p class="postExcerpt"><?php echo get_the_excerpt(); ?></p>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
				}
				wp_reset_postdata();
				?>
			
			</article>	
			<div class='cell large-1'></div>
			

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
