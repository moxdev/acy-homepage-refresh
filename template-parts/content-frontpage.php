<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Atlantic Cruising Yachts
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( function_exists( 'atlantic_cruising_yachts_homepage_video_header' ) ) {
		atlantic_cruising_yachts_homepage_video_header();
	}  ?>

		<header class="entry-header">
			<?php $title = get_field('on_page_title');
			$sub_title = get_field('sub_title');
		if($title) { ?>
			<h1 class="entry-title">
				<?php echo $title; ?>
			</h1>

			<?php if($sub_title) { ?>
			<h2>
				<?php echo esc_html( $sub_title ); ?>
			</h2>
			<?php
			}
		}else {
			the_title( '<h1 class="entry-title">', '</h1>' );
			if($sub_title) { ?>
				<h2>
					<?php echo esc_html( $sub_title ); ?>
				</h2>
				<?php
			}
	 	} ?>
		</header>
		<!-- .entry-header -->


		<div class="entry-content">

			<?php the_content(); ?>

			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'atlantic-cruising-yachts' ),
				'after'  => '</div>',
			) );
		?>

		</div>
		<!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link( esc_html__( 'Edit', 'atlantic-cruising-yachts' ), '<span class="edit-link">', '</span>' ); ?>
		</footer>
		<!-- .entry-footer -->
	</article>
	<!-- #post-## -->