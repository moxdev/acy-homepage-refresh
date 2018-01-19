<?php
/**
 * Template Name: Find A Yacht
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Atlantic Cruising Yachts
 */

get_header(); ?>

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
	
			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- #content-wrapper -->
	<?php $args = array(
		'post_parent' => '187',
		'post_type' => 'page',
		'post_status' => 'publish',
		'orderby' => 'menu_order',
		'posts_per_page' => '-1',
		'order'  => 'ASC'
	); 
	
	$child_query_jeanneau = new WP_Query( $args ); 
	
	if( $child_query_jeanneau -> have_posts() ) { ?>
		<div class="manufacturer-listing">
			<div class="manufacturer-listing-inner" id="jeanneau-listing">
			 <h3><a href="<?php echo get_permalink(187); ?>"><span>Jeanneau</span><img src="<?php echo get_template_directory_uri()  . '/imgs/logo-jeanneau.svg'; ?>" alt="Jeanneau"></a></h3>
			<?php while ( $child_query_jeanneau ->have_posts() ) { 
				$child_query_jeanneau -> the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="yacht-main-listing">
					<div>
						<?php if( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('yacht-thumbnail'); ?>
						<?php } ?>
						<span class="yacht-title"><?php the_title(); ?></span>
						<span class="click-through">Learn More &raquo;</span>
					</div>
				</a>
				<?php $childArgs = array(
					'post_parent' => $post->ID,
					'post_type' => 'page',
					'post_status' => 'publish',
					'orderby' => 'menu_order',
					'posts_per_page' => '-1',
					'order'  => 'ASC',
				); 
				$children = get_children($childArgs); 
				if($children) {
					foreach( $children as $child ) { ?>
						<a href="<?php echo get_permalink($child -> ID); ?>" class="yacht-main-listing">
							<div>
								<?php $image = get_the_post_thumbnail($child -> ID, 'yacht-thumbnail'); ?>
								<?php if( $image ) { ?>
										<?php echo $image; ?>
								<?php } ?>
								<span class="yacht-title"><?php echo $child->post_title; ?></span>
								<span class="click-through">Learn More &raquo;</span>
							</div>
						</a>
					<?php }
				} ?>
			<?php } ?>
			</div>
		</div>
	<?php } 
	wp_reset_postdata(); ?>
	
	<?php $args = array(
		'post_parent' => '189',
		'post_type' => 'page',
		'post_status' => 'publish',
		'orderby' => 'menu_order',
		'posts_per_page' => '-1',
		'order'  => 'ASC',
	);
	
	$child_query_fountaine = new WP_Query( $args ); 
	
	if( $child_query_fountaine -> have_posts() ) { ?>
		<div class="manufacturer-listing">
			<div class="manufacturer-listing-inner" id="fountaine-pajot-listing">
			 <h3><a href="<?php echo get_permalink(189); ?>"><span>Fountaine Pajot</span><img src="<?php echo get_template_directory_uri()  . '/imgs/logo-fountaine-pajot.svg'; ?>" alt="Fountaine Pajot"></a></h3>
			<?php while ( $child_query_fountaine ->have_posts() ) { 
				$child_query_fountaine -> the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="yacht-main-listing">
					<div>
						<?php if( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('yacht-thumbnail'); ?>
						<?php } ?>
						<span class="yacht-title"><?php the_title(); ?></span>
						<span class="click-through">Learn More &raquo;</span>
					</div>
				</a>
				<?php $childArgs = array(
					'post_parent' => $post->ID,
					'post_type' => 'page',
					'post_status' => 'publish',
					'orderby' => 'menu_order',
					'posts_per_page' => '-1',
					'order'  => 'ASC',
				); 
				$children = get_children($childArgs); 
				if($children) {
					foreach( $children as $child ) { ?>
						<a href="<?php echo get_permalink($child -> ID); ?>" class="yacht-main-listing">
							<div>
								<?php $image = get_the_post_thumbnail($child -> ID, 'yacht-thumbnail'); ?>
								<?php if( $image ) { ?>
										<?php echo $image; ?>
								<?php } ?>
								<span class="yacht-title"><?php echo $child->post_title; ?></span>
								<span class="click-through">Learn More &raquo;</span>
							</div>
						</a>
					<?php }
				} ?>
			<?php } ?>
			</div>
		</div>
	<?php } 
	wp_reset_postdata(); ?>
<?php get_footer(); ?>
