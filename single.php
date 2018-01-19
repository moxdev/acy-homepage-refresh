<?php
/**
 * The template for displaying all single posts.
 *
 * @package Atlantic Cruising Yachts
 */

get_header(); ?>

	<div id="content-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'template-parts/content', 'single' ); ?>
	
				<?php $args = array(
					'prev_text' => '&laquo; Previous Post',
					'next_text' => 'Next Post &raquo;'
				) ?>
				<?php the_post_navigation($args); ?>
	
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
	
			<?php endwhile; // End of the loop. ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
	
		<?php get_sidebar(); ?>
	</div><!-- #content-wrapper -->
<?php get_footer(); ?>
