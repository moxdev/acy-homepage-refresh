<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Atlantic Cruising Yachts
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="main-content-wrapper">
			<div class="left-side">
				<header class="entry-header">
					<span class="gray"></span><span class="blue"></span><span class="red"></span>

					<?php $title = get_field('on_page_title');
						$home_sub_title = get_field('home_page_sub_title');

					if($title) { ?>
						<h1 class="entry-title"><?php echo $title; ?></h1>

						<?php if($home_sub_title) { ?>

							<h2><?php echo esc_html( $home_sub_title ); ?></h2>

						<?php
						}
					}else {
						the_title( '<h1 class="entry-title">', '</h1>' );
						if($home_sub_title) { ?>
							<h2><?php echo esc_html( $home_sub_title ); ?></h2>
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
			</div><!-- left-side -->

			<div class="right-side">
				<?php if ( function_exists( 'get_field'  ) ) {
					$main_content_img = get_field('main_content_image'); ?>

					<img src="<?php echo esc_url( $main_content_img['sizes']['home-main-content-image'] ); ?>" alt="<?php echo esc_attr( $main_content_img['alt'] ); ?>" description="<?php echo esc_attr( $main_content_img['description'] ); ?>">

				<?php } ?>
			</div><!-- right-side -->

		</div><!-- main-content-wrapper -->

	</article>
	<!-- #post-## -->
