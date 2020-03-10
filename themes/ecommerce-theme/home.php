<?php
/*
 * Template Name: Custom
 */

get_header();
?>

	<section id="primary" class="content-area grid-container">
		<main id="main" class="site-main">
			<div class=" cell large-1"></div>
				<h1 class="blogTitle">BLOGS</h1>
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
							<div class="grid-x paddingAround grid-margin-x">
								
								<?php
								while ( $test_query->have_posts() ) {
									$test_query->the_post();
									?>
									<div class="cell small-12 medium-6 large-4 custom post-list-wrapper grid-margin-x grid-x">
										<div id="post-<?php echo get_the_ID(); ?>">
											<!-- post-thumbnail -->
											<div class="custom post-thumbnail">
												<a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail('small-thumbnail'); ?></a>
											</div><!-- post-thumbnail -->
											<a href="<?php the_permalink(); ?>" target="_blank"><h4 class="text-center postTitle"><?php echo get_the_title(); ?></h4></a>
											<p class="postExcerpt"><?php echo get_the_excerpt(); ?></p>
											<a class="readMore" href="<?php the_permalink(); ?>" target="_blank">Read More</a>
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
