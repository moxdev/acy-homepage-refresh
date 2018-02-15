<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Atlantic Cruising Yachts
 */

get_header(); ?>
	
	<?php $args = array(
		'posts_per_page' => 3, 
		'post_type' => 'home-page-highlights',
		'orderby' => 'rand',
		'post__not_in' => array( 78 )
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) :  while ($my_query->have_posts()) : $my_query->the_post();
	$clickThrough = get_field('click-through_link'); ?>
		<div class="home-highlight">
		<?php if(has_post_thumbnail()) { ?>
			<div class="home-highlight-thumb">
			<?php the_post_thumbnail('home-feature'); ?>
			</div><?php } ?>
			<div class="home-highlight-content">
			<?php the_content(); ?>
			<?php if($clickThrough): ?><a class="home-click-through" id="<?php echo $post->post_name; ?>" href="<?php echo $clickThrough; ?>">Learn More &raquo;</a><?php endif; ?>
			</div>
		</div>
	<?php endwhile;
	endif;
	wp_reset_query();
	
	$args = array(
		'post_type' => 'home-page-highlights',
		'post__in' => array( 78 )
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) :  while ($my_query->have_posts()) : $my_query->the_post();
	$clickThrough = get_field('click-through_link'); ?>
		<div class="home-highlight">
			<?php if(has_post_thumbnail()) { ?>
			<div class="home-highlight-thumb">
			<?php the_post_thumbnail('home-feature'); ?>
			</div><?php } ?>
			<div class="home-highlight-content">
			<?php the_content(); ?>
			<?php if($clickThrough): ?><a class="home-click-through" id="<?php echo $post->post_name; ?>" href="<?php echo $clickThrough; ?>">Learn More &raquo;</a><?php endif; ?>
			</div>
		</div>
	<?php endwhile;
	endif;
	wp_reset_query();
	?>
	<div id="content-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
	
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
	
				<?php endwhile; // End of the loop. ?>
				
				<?php
				$jeanneauDisclaimer = get_field('add_jeanneau_disclaimer');
				$fountaineDisclaimer = get_field('add_fountaine_pajot_disclaimer');
				$jeanneauDiscTitle = get_theme_mod('setting_jeanneau_disclaimer_title');
				$jeanneauDisc = get_theme_mod('setting_jeanneau_disclaimer');
				$fountaineDiscTitle = get_theme_mod('setting_fountaine_disclaimer_title');
				$fountaineDisc = get_theme_mod('setting_fountaine_disclaimer');
				if($jeanneauDisclaimer == 'yes') { ?>
				<div class="disclaimer-wrapper jeanneau">
					<span class="disclaimer-title">
					 	<?php echo $jeanneauDiscTitle; ?>
					</span>
					<span class="disclaimer">
						<?php echo $jeanneauDisc; ?>
					</span>
				</div>
				<?php }
				if($fountaineDisclaimer == 'yes') { ?>
				<div class="disclaimer-wrapper fountaine-pajot">
					 <span class="disclaimer-title">
					 	<?php echo $fountaineDiscTitle; ?>
					</span>
					<span class="disclaimer">
						<?php echo $fountaineDisc; ?>
					</span>
				</div>
				<?php } ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
	
		<?php get_sidebar(); ?>
	</div><!-- #content-wrapper -->
	<?php get_footer(); ?>
