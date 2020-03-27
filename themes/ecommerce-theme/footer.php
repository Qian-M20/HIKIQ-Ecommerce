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

	<?php if( is_front_page() ) { ?>

		<section class="footerJournalWrapper grid-container">
			<div id="footerJournal" class="site-main grid-x">
				
				<h1 class="blogTitle cell large-12">Shoe Journals</h1>
			
				<article class="cell large-12" id="bodyText">
					<?php
					/**
					 * Custom WP_Query
					 */
					$args = array(
						'post_type'      => 'ecom_journals',
						'posts_per_page' => 3,
					);

					$journals = new WP_Query( $args );

					if ( $journals->have_posts() ) {
					?>
						<div>
							<div class="post-list height-1">
								<div class="grid-x paddingAround grid-margin-x">
									
									<?php
									while ( $journals->have_posts() ) {
										$journals->the_post();
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
	
			</div><!-- footer journal section -->
		</section>
	<?php
	}
	?>
	
	<footer id="colophon" class="site-footer">
		<div class="footerLinks grid-x grid-margin-x">
			<nav id="social-navigation" class="social-navigation cell large-12 medium-12 grid-x align-middle">
				<?php if(get_theme_mod('ecommerce_theme_facebook_url') ||  get_theme_mod('ecommerce_theme_twitter_url') || get_theme_mod('ecommerce_theme_instagram_url') || get_theme_mod('ecommerce_theme_pinterest_url')){?> 
					<ul class="social-media">
						<?php if(get_theme_mod('ecommerce_theme_facebook_url')) {?> 
							<li class="facebook">
								<a href="<?php echo get_theme_mod('ecommerce_theme_facebook_url')?>">
									<i class="fab fa-facebook"></i>
								</a>
							</li>
						<?php } ?>

						<?php if(get_theme_mod('ecommerce_theme_twitter_url')) {?> 
							<li class="twitter">
								<a href="<?php echo get_theme_mod('ecommerce_theme_twitter_url')?>">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
						<?php } ?>

						<?php if(get_theme_mod('ecommerce_theme_instagram_url')) {?> 
							<li class="instagram">
								<a href="<?php echo get_theme_mod('ecommerce_theme_instagram_url')?>">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						<?php } ?>

						<?php if(get_theme_mod('ecommerce_theme_pinterest_url')) {?> 
							<li class="pinterest">
								<a href="<?php echo get_theme_mod('ecommerce_theme_pinterest_url')?>">
									<i class="fab fa-pinterest"></i>
								</a>
							</li>
						<?php } ?>

						
					</ul>
				<?php } ?>
				
			</nav><!-- #social-media-navigation -->

			
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
			<div>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ecommerce-theme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'ecommerce-theme' ), 'WordPress' );
					?>
				</a>
			</div>
			<div class="webX">
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ecommerce-theme' ), 'ecommerce-theme', '<a href="http://staging.qian-ma.com/assign3100714286/">WebX</a>' );
				?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
