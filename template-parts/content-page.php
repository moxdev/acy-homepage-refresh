<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Atlantic Cruising Yachts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php $title = get_field('on_page_title');
		if($title) { ?>
			<h1 class="entry-title"><?php echo $title; ?></h1>
		<?php } else {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php if ( function_exists( 'atlantic_cruising_yachts_boat_listing' ) ) {
		    atlantic_cruising_yachts_boat_listing();
		} ?>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atlantic-cruising-yachts' ),
				'after'  => '</div>',
			) );
		?>

		<?php
		if( is_page_template('page-staff.php') ) {
			if( have_rows('annapolis_sales_team') ) { ?>
				<div class="staff-listing">
					<h2><span>Annapolis Sales Team</span></h2>
					<?php while ( have_rows('annapolis_sales_team') ) : the_row();
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$creds = get_sub_field('accreditations');
					$email = get_sub_field('email');
					$phone1 = get_sub_field('phone_1');
					$phone2 = get_sub_field('phone_2');
					$altContact = get_sub_field('alt_contact');
					$headshot= get_sub_field('headshot' );
					$image = wp_get_attachment_image_src( $headshot['id'], 'staff-headshot' );
					$imageAlt = $headshot['alt'];?>
						<div class="employee">
							<?php if($headshot): ?><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"><?php echo "\n"; endif;
							if($name): ?><span class="empl-name"><?php echo $name; ?></span><?php echo "\n"; endif;
							if($title): ?><span class="empl-title"><?php echo $title; ?></span><?php echo "\n"; endif;
							if($creds): ?><span class="empl-accreditations"><?php echo $creds; ?></span><?php echo "\n"; endif;
							if($email): ?><span class="empl-email"><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></span><?php echo "\n"; endif;
							if($phone1): ?><span class="empl-ph1"><?php echo $phone1; ?></span><?php echo "\n"; endif;
							if($phone2): ?><span class="empl-ph2"><?php echo $phone2; ?></span><?php echo "\n"; endif;
							if($altContact): ?><span class="empl-alt-contact"><?php echo $altContact; ?></span><?php echo "\n"; endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php }
			if( have_rows('florida_sales_team') ) { ?>
				<div class="staff-listing">
					<h2><span>Florida Sales Team</span></h2>
					<?php while ( have_rows('florida_sales_team') ) : the_row();
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$creds = get_sub_field('accreditations');
					$email = get_sub_field('email');
					$phone1 = get_sub_field('phone_1');
					$phone2 = get_sub_field('phone_2');
					$altContact = get_sub_field('alt_contact');
					$headshot= get_sub_field('headshot' );
					$image = wp_get_attachment_image_src( $headshot['id'], 'staff-headshot' );
					$imageAlt = $headshot['alt'];?>
						<div class="employee">
							<?php if($headshot): ?><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"><?php echo "\n"; endif;
							if($name): ?><span class="empl-name"><?php echo $name; ?></span><?php echo "\n"; endif;
							if($title): ?><span class="empl-title"><?php echo $title; ?></span><?php echo "\n"; endif;
							if($creds): ?><span class="empl-accreditations"><?php echo $creds; ?></span><?php echo "\n"; endif;
							if($email): ?><span class="empl-email"><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></span><?php echo "\n"; endif;
							if($phone1): ?><span class="empl-ph1"><?php echo $phone1; ?></span><?php echo "\n"; endif;
							if($phone2): ?><span class="empl-ph2"><?php echo $phone2; ?></span><?php echo "\n"; endif;
							if($altContact): ?><span class="empl-alt-contact"><?php echo $altContact; ?></span><?php echo "\n"; endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php }
			if( have_rows('executive_finance_team') ) { ?>
				<div class="staff-listing">
					<h2><span>Executive &amp; Finance Team</span></h2>
					<?php while ( have_rows('executive_finance_team') ) : the_row();
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$creds = get_sub_field('accreditations');
					$email = get_sub_field('email');
					$phone1 = get_sub_field('phone_1');
					$phone2 = get_sub_field('phone_2');
					$altContact = get_sub_field('alt_contact');
					$headshot= get_sub_field('headshot' );
					$image = wp_get_attachment_image_src( $headshot['id'], 'staff-headshot' );
					$imageAlt = $headshot['alt'];?>
						<div class="employee">
							<?php if($headshot): ?><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"><?php echo "\n"; endif;
							if($name): ?><span class="empl-name"><?php echo $name; ?></span><?php echo "\n"; endif;
							if($title): ?><span class="empl-title"><?php echo $title; ?></span><?php echo "\n"; endif;
							if($creds): ?><span class="empl-accreditations"><?php echo $creds; ?></span><?php echo "\n"; endif;
							if($email): ?><span class="empl-email"><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></span><?php echo "\n"; endif;
							if($phone1): ?><span class="empl-ph1"><?php echo $phone1; ?></span><?php echo "\n"; endif;
							if($phone2): ?><span class="empl-ph2"><?php echo $phone2; ?></span><?php echo "\n"; endif;
							if($altContact): ?><span class="empl-alt-contact"><?php echo $altContact; ?></span><?php echo "\n"; endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php }
			if( have_rows('commissioning_service_team') ) { ?>
				<div class="staff-listing">
					<h2><span>Commissioning &amp; Service Team</span></h2>
					<?php while ( have_rows('commissioning_service_team') ) : the_row();
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$creds = get_sub_field('accreditations');
					$email = get_sub_field('email');
					$phone1 = get_sub_field('phone_1');
					$phone2 = get_sub_field('phone_2');
					$altContact = get_sub_field('alt_contact');
					$headshot= get_sub_field('headshot' );
					$image = wp_get_attachment_image_src( $headshot['id'], 'staff-headshot' );
					$imageAlt = $headshot['alt'];?>
						<div class="employee">
							<?php if($headshot): ?><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"><?php echo "\n"; endif;
							if($name): ?><span class="empl-name"><?php echo $name; ?></span><?php echo "\n"; endif;
							if($title): ?><span class="empl-title"><?php echo $title; ?></span><?php echo "\n"; endif;
							if($creds): ?><span class="empl-accreditations"><?php echo $creds; ?></span><?php echo "\n"; endif;
							if($email): ?><span class="empl-email"><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></span><?php echo "\n"; endif;
							if($phone1): ?><span class="empl-ph1"><?php echo $phone1; ?></span><?php echo "\n"; endif;
							if($phone2): ?><span class="empl-ph2"><?php echo $phone2; ?></span><?php echo "\n"; endif;
							if($altContact): ?><span class="empl-alt-contact"><?php echo $altContact; ?></span><?php echo "\n"; endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php }
			if( have_rows('customer_service_admin_team') ) { ?>
				<div class="staff-listing">
					<h2><span>Customer Service &amp; Admin Team</span></h2>
					<?php while ( have_rows('customer_service_admin_team') ) : the_row();
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$creds = get_sub_field('accreditations');
					$email = get_sub_field('email');
					$phone1 = get_sub_field('phone_1');
					$phone2 = get_sub_field('phone_2');
					$altContact = get_sub_field('alt_contact');
					$headshot= get_sub_field('headshot' );
					$image = wp_get_attachment_image_src( $headshot['id'], 'staff-headshot' );
					$imageAlt = $headshot['alt'];?>
						<div class="employee">
							<?php if($headshot): ?><img src="<?php echo $image[0]; ?>" alt="<?php echo $imageAlt; ?>"><?php echo "\n"; endif;
							if($name): ?><span class="empl-name"><?php echo $name; ?></span><?php echo "\n"; endif;
							if($title): ?><span class="empl-title"><?php echo $title; ?></span><?php echo "\n"; endif;
							if($creds): ?><span class="empl-accreditations"><?php echo $creds; ?></span><?php echo "\n"; endif;
							if($email): ?><span class="empl-email"><a href="mailto:<?php echo $email; ?>" target="_blank"><?php echo $email; ?></a></span><?php echo "\n"; endif;
							if($phone1): ?><span class="empl-ph1"><?php echo $phone1; ?></span><?php echo "\n"; endif;
							if($phone2): ?><span class="empl-ph2"><?php echo $phone2; ?></span><?php echo "\n"; endif;
							if($altContact): ?><span class="empl-alt-contact"><?php echo $altContact; ?></span><?php echo "\n"; endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php }
		} ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'atlantic-cruising-yachts' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

