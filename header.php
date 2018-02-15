<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Atlantic Cruising Yachts
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N4D4PQ3');</script>
<!-- End Google Tag Manager -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43266831-1',  'auto', {'siteSpeedSampleRate': 50});
  ga('send', 'pageview');

</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '433228223706272'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=433228223706272&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4D4PQ3"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'atlantic-cruising-yachts' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<a <?php if(!is_page_template('page-broker.php')): ?> href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php endif; ?> rel="home">
			<svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"  width="239.8px" height="56.8px" viewBox="0 0 239.8 56.8" enable-background="new 0 0 239.8 56.8" xml:space="preserve"  aria-labelledby="title">
				<title>Atlantic Cruising Yachts</title>
				<path fill="#FFFFFF" d="M19.5,8l5.3,13.4H14.5L19.5,8z M16,1.1L1.3,35.9H9l3.1-8.3h15.1l3.2,8.3h8.1L23.7,1.1H16z"/>
				<polygon fill="#FFFFFF" points="31.8,1.2 31.8,7.2 43.1,7.2 43.1,35.9 50.6,35.9 50.6,7.2 61.9,7.2 61.9,1.2 "/>
				<g>
					<path fill="#FFFFFF" d="M67.7,32.5c-2.7-2.8-3.1-5.9-3.1-10.5V1.4h7.3v19.1v1.4c0,2.9,0,4.9,1.2,6.3c1.5,1.8,3.6,2.3,6.7,2.3h8.6
						v5.8h-9.2C74.2,36.2,70.8,35.8,67.7,32.5"/>
				</g>
				<path fill="#FFFFFF" d="M108.7,8.3l5.3,13.4h-10.4L108.7,8.3z M105.1,1.4L90.4,36.2h7.7l3.1-8.3h15.1l3.2,8.3h8.1L112.8,1.4H105.1z"
					/>
				<polygon fill="#FFFFFF" points="153.2,1.4 153.5,26.4 139.3,1.4 130.1,1.4 130.1,36.2 137.6,36.2 137.2,9.9 152.2,36.2 160.6,36.2
					160.6,1.4 "/>
				<polygon fill="#FFFFFF" points="164.1,1.5 164.1,7.5 175.3,7.5 175.3,36.2 182.9,36.2 182.9,7.5 194.1,7.5 194.1,1.5 "/>
				<rect x="197.7" y="1.4" fill="#FFFFFF" width="7.6" height="34.7"/>
				<g>
					<path fill="#FFFFFF" d="M218.4,19.7c0,7.8,2.4,10.4,8.5,10.4h12v6h-12.3c-4.2,0-7.5-0.3-10.8-3c-3.6-2.9-5.3-7.4-5.3-13.7
						c0-12.3,5.2-18,16.4-18h12.1v6h-12C220.7,7.4,218.4,11.1,218.4,19.7"/>
					<path fill="#FFFFFF" d="M34.1,49.3c0,3.1,0.9,4.2,3.4,4.2h4.8v2.4h-4.9c-1.7,0-3-0.1-4.3-1.2c-1.4-1.1-2.1-3-2.1-5.5
						c0-4.9,2.1-7.2,6.5-7.2h4.9v2.4h-4.8C35.1,44.3,34.1,45.8,34.1,49.3"/>
					<path fill="#FFFFFF" d="M49.3,44.4v3.5h3.6c1.7,0,2.6-0.3,2.6-1.8c0-1.4-0.9-1.7-2.6-1.7H49.3z M53.6,42c3.3,0,4.9,1.3,4.9,4.2
						c0,2.1-1,3.5-2.8,3.9l3.5,5.8h-3.3l-3.1-5.5h-3.4v5.5h-2.9V42H53.6z"/>
					<path fill="#FFFFFF" d="M65.3,50.3c0,2.5,0.7,3.5,3.1,3.5c2.4,0,3.1-1,3.1-3.5V42h2.9v8.4c0,1.8-0.2,3-0.8,3.7
						c-1.1,1.4-2.8,1.9-5.2,1.9c-2.4,0-4.1-0.6-5.2-1.9c-0.6-0.8-0.8-2-0.8-3.7V42h2.9V50.3z"/>
				</g>
				<rect x="79.2" y="42" fill="#FFFFFF" width="3.1" height="13.9"/>
				<g>
					<path fill="#FFFFFF" d="M91.6,44.4c-1.5,0-2.2,0.5-2.2,1.8c0,1,0.6,1.5,1.8,1.5h3.9c3.1,0,4.4,1,4.4,3.9c0,2.9-1.6,4.2-4.9,4.2
						h-7.8v-2.5h7.3c1.5,0,2.3-0.4,2.3-1.6c0-1.2-0.7-1.6-2.1-1.6H91c-3.2,0-4.6-1.2-4.6-4c0-3,1.6-4.3,4.9-4.3h7.6v2.5H91.6z"/>
				</g>
				<rect x="103.6" y="42" fill="#FFFFFF" width="3.1" height="13.9"/>
				<polygon fill="#FFFFFF" points="120.8,42 120.9,51.9 115.2,42 111.5,42 111.5,55.8 114.5,55.8 114.4,45.4 120.3,55.8 123.7,55.8
					123.7,42 "/>
				<g>
					<path fill="#FFFFFF" d="M133.5,47.6h6.9v8.2h-6.3c-1.7,0-3-0.1-4.4-1.2c-1.4-1.1-2.1-3-2.1-5.5c0-4.9,2.1-7.2,6.5-7.2h6.3v2.4h-6.3
						c-2.3,0-3.3,1.5-3.3,4.7c0,3,0.9,4.3,3.3,4.3h3.3v-3.3h-3.9V47.6z"/>
				</g>
				<polygon fill="#FFFFFF" points="162.1,42 158.6,47.3 155.2,42 151.9,42 157.2,49.7 157.2,55.8 160.2,55.8 160.2,49.7 165.5,42 "/>
				<path fill="#FFFFFF" d="M172.3,44.7l2.1,5.3h-4.1L172.3,44.7z M170.9,42L165,55.8h3.1l1.2-3.3h6l1.3,3.3h3.2L174,42H170.9z"/>
				<g>
					<path fill="#FFFFFF" d="M184.7,49.3c0,3.1,0.9,4.2,3.4,4.2h4.8v2.4H188c-1.7,0-3-0.1-4.3-1.2c-1.4-1.1-2.1-3-2.1-5.5
						c0-4.9,2.1-7.2,6.5-7.2h4.9v2.4h-4.8C185.7,44.3,184.7,45.8,184.7,49.3"/>
				</g>
				<polygon fill="#FFFFFF" points="205.3,42 205.3,47.6 199.9,47.6 199.9,42 197,42 197,55.8 199.9,55.8 199.9,50 205.3,50 205.3,55.8
					208.2,55.8 208.2,42 "/>
				<polygon fill="#FFFFFF" points="211.5,42 211.5,44.4 216,44.4 216,55.8 219,55.8 219,44.4 223.5,44.4 223.5,42 "/>
				<g>
					<path fill="#FFFFFF" d="M231,44.4c-1.5,0-2.2,0.5-2.2,1.8c0,1,0.6,1.5,1.8,1.5h3.9c3.1,0,4.4,1,4.4,3.9c0,2.9-1.6,4.2-4.9,4.2h-7.8
						v-2.5h7.3c1.5,0,2.3-0.4,2.3-1.6c0-1.2-0.7-1.6-2.1-1.6h-3.4c-3.2,0-4.6-1.2-4.6-4c0-3,1.6-4.3,4.9-4.3h7.6v2.5H231z"/>
				</g>
			</svg>
		</a>

		<?php if( !is_page_template('page-plain-single-column.php') && !is_page_template('page-broker.php') ) { ?>
			<nav class="aux-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'aux', 'container' => '',  'menu_id' => 'aux-menu' ) ); ?>
			</nav><!-- #site-navigation -->

			<?php /*$phone = get_theme_mod('setting_phone');
			$name = get_theme_mod('setting_name');
			$phone_b = get_theme_mod('setting_phone_b');
			$name_b = get_theme_mod('setting_name_b');
			$phone_c = get_theme_mod('setting_phone_c');
			$name_c = get_theme_mod('setting_name_c');
			if($phone || $name || $phone_b || $name_b || $phone_c || $name_c) { ?>
				<div class="phone-wrapper">
					<?php if($phone || $name): ?><a class="tel masthead-phone" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Header Phone Click');" href="tel:<?php echo $phone; ?>"><span><?php echo $name; ?>:</span> <?php echo $phone; ?></a><?php endif; ?>
					<?php if($phone_b || $name_b): ?><a class="tel masthead-phone" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Header Phone Click');" href="tel:<?php echo $phone_b; ?>"><span><?php echo $name_b; ?>:</span> <?php echo $phone_b; ?></a><?php endif; ?>
					<?php if($phone_c || $name_c): ?><a class="tel masthead-phone" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Header Phone Click');" href="tel:<?php echo $phone_c; ?>"><span><?php echo $name_c; ?>:</span> <?php echo $phone_c; ?></a><?php endif; ?>
				</div>
			<?php }*/

			$phone = get_theme_mod('setting_main_phone');
			if($phone): ?><a class="tel masthead-phone masthead-phone-main" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Header Phone Click');" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a><?php endif; ?>

			<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><?php esc_html_e( 'Main Menu', 'atlantic-cruising-yachts' ); ?></button>
		<?php } ?>
	</header><!-- #masthead -->

	<?php if( !is_page_template('page-plain-single-column.php') && !is_page_template('page-broker.php') ) { ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav' ) );
			$walker = new description_walker;
			wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'walker' => $walker ) );?>
		</nav><!-- #site-navigation -->
	<?php }

	// <!-- begin header-video -->

	if( has_post_thumbnail() && is_front_page() ) {
		wp_enqueue_script( 'atlantic-cruising-yachts-home-video', get_template_directory_uri() . '/js/min/home-video-min.js', array('atlantic-cruising-yachts-autoplay-detection'), NULL, true ); ?>

		<div class="pg-video" id="home-video">
			<a href="#content" class="btn" id="scroll_btn">&or;</a>
		</div>

		<figure class="pg-feature-img">
			<?php the_post_thumbnail('page-feature'); ?>
		</figure>

	<?php } ?>

	<!-- end header-video -->

	<div id="translate-wrap">
		<div id="content" class="site-content">
		<?php
		if( has_post_thumbnail() && !is_front_page() ) { ?>
		<div class="feature-wrapper">
			<?php the_post_thumbnail('yacht-feature'); ?>
		</div>
		<?php } else {
			if( is_home() ) {
				$page_for_posts = get_option( 'page_for_posts' );
				$img =  get_the_post_thumbnail($page_for_posts, 'yacht-feature');
				if( $img ) { ?>
					<div class="feature-wrapper">
						<?php echo $img; ?>
					</div>
				<?php  }
			}
		} ?>
