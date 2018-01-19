<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Atlantic Cruising Yachts
 */

get_header(); ?>

	<div id="content-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'We\'re sorry, but that page can&rsquo;t be found.', 'atlantic-cruising-yachts' ); ?></h1>
					</header><!-- .page-header -->
	
					<div class="page-content">
					<p>Please use the "back" button in your browser or <a href="<?php echo esc_url( home_url( '/' ) ); ?>">return to our home page.</a></p>
				</div><!-- .page-content -->
				</section><!-- .error-404 -->
	
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content-wrapper -->

<?php get_footer(); ?>
