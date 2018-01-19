<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Atlantic Cruising Yachts
 */

get_header(); ?>

	<div id="content-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
	
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>
	
				<?php endwhile; ?>
				
				<?php if(function_exists( 'wp_pagenavi') ) { 
				if($wp_query->max_num_pages > 1)  {?>
					<nav class="navigation posts-navigation">
					<?php wp_pagenavi(); ?>
					</nav>
					<?php }
				} else {
					$args = array(
						'prev_text'=>'&laquo; Older Posts',
						'next_text'=>'Newer Posts &raquo;'
					);
					the_posts_navigation($args);
				} ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
	
			<?php endif; ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
	
		<?php get_sidebar(); ?>
	</div><!-- #content-wrapper -->
<?php get_footer(); ?>
