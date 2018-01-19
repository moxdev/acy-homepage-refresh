<?php
/**
 * Template Name: Yacht Model Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Atlantic Cruising Yachts
 */

get_header(); ?>
	
	<?php if( have_rows('interior_photos') || have_rows('exterior_photos') || have_rows('floor_plans') ): ?><div class="photo-nav"><?php endif; ?>
		 <?php
			if( have_rows('interior_photos') ): 
				$i = -1; ?>
				<ul>
					<?php 
					while ( have_rows('interior_photos') ) : the_row();
						$i++;
						$photo= get_sub_field('photo' ); // get the rows
						$currentRow = $photo;
						//echo '<pre>'; print_r($currentRow); echo '</pre>';
						$imageLrg = wp_get_attachment_image_src( $photo['id'], 'large' );
						$imageTh = wp_get_attachment_image_src( $photo['id'], 'yacht-lightbox-thumb' );
						$imageAlt = $photo['alt'];
						//echo $image[0];
						//echo 'ALT: ' . $imageAlt;
						if($i == 0)  { ?>
							<li><a id="trigger-interior-photos" href="<?php echo $imageLrg[0]; ?>" data-imagelightbox="a"><img src="<?php echo $imageTh[0]; ?>" alt="<?php echo $imageAlt; ?>"><span class="photo-caption">Interior Photos</span></a></li>
						<?php } else { ?>
							<li><a href="<?php echo $imageLrg[0]; ?>" data-imagelightbox="a"><img src="<?php echo $imageTh[0]; ?>" alt="<?php echo $imageAlt; ?>"><span class="photo-caption"><?php echo $imageAlt; ?></span></a></li>
						<?php } ?>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			
			<?php
			if( have_rows('exterior_photos') ): 
				$i = -1; ?>
				<ul>
					<?php 
					while ( have_rows('exterior_photos') ) : the_row();
						$i++;
						$photo= get_sub_field('photo' ); // get the rows
						$currentRow = $photo;
						//echo '<pre>'; print_r($currentRow); echo '</pre>';
						$imageLrg = wp_get_attachment_image_src( $photo['id'], 'large' );
						$imageTh = wp_get_attachment_image_src( $photo['id'], 'yacht-lightbox-thumb' );
						$imageAlt = $photo['alt'];
						//echo $image[0];
						//echo 'ALT: ' . $imageAlt;
						if($i == 0)  { ?>
							<li><a id="trigger-exterior-photos" href="<?php echo $imageLrg[0]; ?>" data-imagelightbox="b"><img src="<?php echo $imageTh[0]; ?>" alt="<?php echo $imageAlt; ?>"><span class="photo-caption">Exterior Photos</span></a></li>
						<?php } else { ?>
							<li><a href="<?php echo $imageLrg[0]; ?>" data-imagelightbox="b"><img src="<?php echo $imageTh[0]; ?>" alt="<?php echo $imageAlt; ?>"><span class="photo-caption"><?php echo $imageAlt; ?></span></a></li>
						<?php } ?>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			
			<?php
			if( have_rows('floor_plans') ): 
				$i = -1; ?>
				<ul>
					<?php 
					while ( have_rows('floor_plans') ) : the_row();
						$i++;
						$photo= get_sub_field('floor_plan' ); // get the rows
						$currentRow = $photo;
						//echo '<pre>'; print_r($currentRow); echo '</pre>';
						$imageLrg = wp_get_attachment_image_src( $photo['id'], 'large' );
						$imageTh = wp_get_attachment_image_src( $photo['id'], 'yacht-lightbox-thumb' );
						$imageAlt = $photo['alt'];
						//echo $image[0];
						//echo 'ALT: ' . $imageAlt;
						if($i == 0)  { ?>
							<li><a id="trigger-plan-photos" href="<?php echo $imageLrg[0]; ?>" data-imagelightbox="c"><img src="<?php echo $imageTh[0]; ?>" alt="<?php echo $imageAlt; ?>"><span class="photo-caption">Layouts</span></a></li>
						<?php } else { ?>
							<li><a href="<?php echo $imageLrg[0]; ?>" data-imagelightbox="c"><img src="<?php echo $imageTh[0]; ?>" alt="<?php echo $imageAlt; ?>"><span class="photo-caption"><?php echo $imageAlt; ?></span></a></li>
						<?php } ?>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			
	<?php if( have_rows('interior_photos') || have_rows('exterior_photos') || have_rows('floor_plans') ): ?></div><?php endif; ?>
	<div id="content-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'template-parts/content', 'yacht' ); ?>
	
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
	
				<?php endwhile; // End of the loop. ?>
				
				<?php
				$rows = get_field('videos');
				// check if the repeater field has rows of data
				if( have_rows('videos') ): 
					$row_count = count($rows); ?>
					<section id="video-wrapper" class="<?php if($row_count > 1): echo 'multi-row'; endif; ?>">
						<h2>Watch it in Action</h2>
						<?php // loop through the rows of data
						while ( have_rows('videos') ) : the_row();
							// display a sub field value
							$embed = get_sub_field('embed_code'); ?>
							<div class="video-wrapper">
							<?php echo $embed; ?>
							</div>
						<?php endwhile; ?>
					</section>
				<?php endif; ?>
				
				<?php $specs = get_field('list_of_specs');
				if($specs) { ?>
				<section id="specs-wrapper">
					<h2>Specs</h2>
					<div id="specs-content">
						<?php echo $specs; ?>
					</div>
				</section>
				<?php } ?>
	
				<?php $disclaimerSelection = get_field('disclaimer_selection');
				$class = preg_replace('/[^a-z\d]+/i', '-', strtolower($disclaimerSelection));
				$customDiscTitle = get_field('custom_disclaimer_title');
				$customDisc = get_field('custom_disclaimer');
				$jeanneauDiscTitle = get_theme_mod('setting_jeanneau_disclaimer_title');
				$jeanneauDisc = get_theme_mod('setting_jeanneau_disclaimer');
				$fountaineDiscTitle = get_theme_mod('setting_fountaine_disclaimer_title');
				$fountaineDisc = get_theme_mod('setting_fountaine_disclaimer');
				if($disclaimerSelection != 'None') { ?>
				<div id="dealer-commissioning-disclaimer-wrapper" class="<?php echo $class; ?>">
					 <?php if($disclaimerSelection == 'Jeanneau') { ?>
						<span class="disclaimer-title">
							<?php echo $jeanneauDiscTitle; ?>
						</span>
						<span class="disclaimer">
							<?php echo $jeanneauDisc; ?>
						</span>
					 <?php } else if($disclaimerSelection == 'Fountaine-Pajot') { ?>
						<span class="disclaimer-title">
							<?php echo $fountaineDiscTitle; ?>
						</span>
						<span class="disclaimer">
							<?php echo $fountaineDisc; ?>
						</span>
					 <?php } else if ($disclaimerSelection == 'Custom-Disclaimer') { ?>
						 <span class="disclaimer-title">
							<?php echo $customDiscTitle; ?>
						 </span>
						 <span class="disclaimer">
							<?php echo $customDisc; ?>
						 </span>
					 <?php } ?>
				</div>
				<?php } ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
	
		<?php get_sidebar(); ?>
	</div><!-- #content-wrapper -->
<?php get_footer(); ?>
