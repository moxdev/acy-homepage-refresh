<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Atlantic Cruising Yachts
 */

?>

		</div><!-- #content -->

		<?php if ( is_front_page() && function_exists( 'atlantic_cruising_yachts_homepage_testimonial_section' ) ) {
			atlantic_cruising_yachts_homepage_testimonial_section();
		} ?>

		<?php if ( is_front_page() && function_exists( 'atlantic_cruising_yachts_homepage_learn_more_section' ) ) {
			atlantic_cruising_yachts_homepage_learn_more_section();
		} ?>

		<?php if ( is_front_page() && function_exists( 'atlantic_cruising_yachts_homepage_highlights_section' ) ) {
			atlantic_cruising_yachts_homepage_highlights_section();
		} ?>

		<?php if ( is_front_page() && function_exists( 'atlantic_cruising_yachts_homepage_ownership_section' ) ) {
			atlantic_cruising_yachts_homepage_ownership_section();
		} ?>

		<?php if( !is_page_template('page-plain-single-column.php') && !is_page_template('page-broker.php')) { ?>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php
				$page_id_brokers = 1237;
				$page_data_brokers = get_page($page_id_brokers);
				$perma_brokers = get_permalink($page_id_brokers);

				if($page_data_brokers->post_status == 'publish') { ?>
					<!-- <a class="ftr-nav" href="<?php // echo $perma_brokers; ?>">Brokers Login</a> -->
				<?php }

				?>
				<div class="site-info" itemscope itemtype="http://schema.org/Store">
					<?php
					$comp_name = get_bloginfo('name');
					$main_ph = get_theme_mod('setting_main_phone');
					$name = get_theme_mod('setting_name');
					$add = get_theme_mod('setting_address1');
					$add2 = get_theme_mod('setting_address2');
					$city = get_theme_mod('setting_city');
					$state = get_theme_mod('setting_state');
					$zip = get_theme_mod('setting_zip');
					$country = get_theme_mod('setting_country');
					$phone = get_theme_mod('setting_phone');

					$name_b = get_theme_mod('setting_name_b');
					$add_b = get_theme_mod('setting_address1_b');
					$add2_b = get_theme_mod('setting_address2_b');
					$city_b = get_theme_mod('setting_city_b');
					$state_b = get_theme_mod('setting_state_b');
					$zip_b = get_theme_mod('setting_zip_b');
					$country_b = get_theme_mod('setting_country_b');
					$phone_b = get_theme_mod('setting_phone_b');

					$name_c = get_theme_mod('setting_name_c');
					$add_c = get_theme_mod('setting_address1_c');
					$add2_c = get_theme_mod('setting_address2_c');
					$city_c = get_theme_mod('setting_city_c');
					$state_c = get_theme_mod('setting_state_c');
					$zip_c = get_theme_mod('setting_zip_c');
					$country_c = get_theme_mod('setting_country_c');
					$phone_c = get_theme_mod('setting_phone_c'); ?>

					<div class="contact-flex-wrapper">
						<svg xmlns="http://www.w3.org/2000/svg" width="237.65" height="54.89" viewBox="0 0 237.65 54.89"><defs><clipPath id="a"><path fill="none" d="M0 0h237.65v54.9H0z"/></clipPath></defs><title>acy-logo</title><path fill="#fff" d="M18.3 6.92l5.27 13.36H13.2zM14.7 0L0 34.75h7.74l3.1-8.28h15.1l3.2 8.28h8.12L22.46 0zM30.58.05V6.1H41.8v28.65h7.56V6.1h11.27V.05H30.58z"/><path fill="#fff" d="M66.5 31.42c-2.68-2.8-3.16-5.86-3.16-10.45V.3h7.3v20.42c0 2.86 0 4.94 1.22 6.3 1.55 1.83 3.63 2.27 6.72 2.27h8.62v5.75H78c-5 0-8.38-.34-11.47-3.63" clip-path="url(#a)"/><path fill="#fff" d="M107.42 7.22l5.28 13.36h-10.36zM103.84.3l-14.7 34.75h7.73l3.1-8.28h15.1l3.2 8.28h8.12L111.6.3zM151.94.3l.34 24.97L138.05.3h-9.24v34.75h7.5l-.33-26.28 14.96 26.28h8.47V.3h-7.46zM162.83.35V6.4h11.22v28.65h7.55V6.4h11.28V.35h-30.05zM196.46.3h7.65v34.75h-7.64z"/><g fill="#fff" clip-path="url(#a)"><path d="M217.12 18.6c0 7.78 2.37 10.4 8.52 10.4h12v6H225.3c-4.2 0-7.45-.34-10.84-3-3.58-2.86-5.33-7.4-5.33-13.7 0-12.3 5.18-18 16.36-18h12.14v6h-12c-6.15 0-8.52 3.73-8.52 12.34M32.9 48.16c0 3.1.93 4.16 3.4 4.16h4.78v2.4h-4.93a6.2 6.2 0 0 1-4.33-1.2c-1.43-1.15-2.12-3-2.12-5.47 0-4.9 2.07-7.2 6.53-7.2h4.85v2.38h-4.8c-2.45 0-3.4 1.5-3.4 4.93"/><path d="M48.08 43.33v3.5h3.57c1.74 0 2.6-.35 2.6-1.76s-.86-1.74-2.6-1.74zm4.27-2.47c3.28 0 4.85 1.25 4.85 4.17 0 2.15-1 3.52-2.8 3.9l3.46 5.8h-3.3l-3-5.45H48.1v5.45h-2.92V40.86zM64.06 49.17c0 2.45.7 3.48 3.13 3.48s3.1-1 3.1-3.48v-8.3h2.92v8.37c0 1.78-.2 3-.8 3.74-1.15 1.35-2.82 1.9-5.23 1.9S63.1 54.34 62 53c-.64-.76-.8-2-.8-3.74v-8.4h2.9z"/></g><path fill="#fff" d="M78 40.86h3.05v13.88H78z"/><path fill="#fff" d="M90.38 43.33c-1.53 0-2.24.54-2.24 1.82 0 1 .62 1.5 1.83 1.5h3.87c3.1 0 4.42 1 4.42 3.93s-1.56 4.15-4.85 4.15h-7.76v-2.47H93c1.54 0 2.26-.37 2.26-1.57s-.66-1.6-2.07-1.6h-3.5c-3.17 0-4.62-1.2-4.62-4 0-3 1.57-4.26 4.87-4.26h7.64v2.47z" clip-path="url(#a)"/><path fill="#fff" d="M102.4 40.86h3.05v13.88h-3.05zM119.5 40.86l.14 9.97-5.7-9.97h-3.68v13.87h3l-.14-10.5 5.97 10.5h3.38V40.86h-2.98z"/><path fill="#fff" d="M132.27 46.5h6.9v8.23h-6.28a6.26 6.26 0 0 1-4.42-1.2c-1.42-1.15-2.12-3-2.12-5.48 0-4.9 2.1-7.2 6.53-7.2h6.27v2.4h-6.28c-2.35 0-3.3 1.5-3.3 4.66 0 3 .93 4.32 3.3 4.32h3.28V49h-3.9z" clip-path="url(#a)"/><path fill="#fff" d="M160.88 40.86l-3.48 5.3-3.42-5.3h-3.3l5.3 7.74v6.13h2.92V48.6l5.35-7.74h-3.37zM171.07 43.62l2.1 5.38H169zm-1.43-2.76l-5.87 13.87h3.1l1.23-3.3h6l1.27 3.3h3.25l-5.92-13.87z"/><path fill="#fff" d="M183.48 48.16c0 3.1 1 4.16 3.4 4.16h4.8v2.4h-4.94a6.15 6.15 0 0 1-4.32-1.2c-1.43-1.15-2.13-3-2.13-5.47 0-4.9 2.06-7.2 6.52-7.2h4.85v2.38h-4.8c-2.44 0-3.4 1.5-3.4 4.93" clip-path="url(#a)"/><path fill="#fff" d="M204.02 40.86v5.62h-5.35v-5.62h-2.92v13.87h2.92v-5.8h5.35v5.8h2.92V40.86h-2.92zM210.28 40.88v2.4h4.48v11.45h3.02V43.3h4.5v-2.42h-12z"/><path fill="#fff" d="M229.76 43.33c-1.53 0-2.24.54-2.24 1.82 0 1 .62 1.5 1.84 1.5h3.86c3.1 0 4.43 1 4.43 3.93s-1.57 4.15-4.85 4.15H225v-2.47h7.3c1.55 0 2.26-.37 2.26-1.57s-.65-1.6-2.06-1.6h-3.45c-3.16 0-4.6-1.2-4.6-4 0-3 1.55-4.26 4.86-4.26h7.7v2.47z" clip-path="url(#a)"/></svg>

						<?php if($main_ph): ?><div class="ftr-main-phone"><a class="tel" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Footer Phone Click');" href="tel:<?php echo $main_ph; ?>"<span itemprop="telephone"><?php echo $main_ph; ?></span></a></div><?php endif; ?>

						<?php $fb = get_theme_mod('setting_facebook_url');
						$li = get_theme_mod('setting_linkedin_url');
						$yt = get_theme_mod('setting_youtube_url');
						if($fb || $li || $yt) { ?>

						<ul class="social-media">

							<?php if ($fb): ?>

								<li class="fb">
									<a href="<?php echo $fb; ?>" target="_blank">Find Us On Facebook</a>
								</li>

							<?php endif ?>
							<?php if ($li): ?>

								<li class="linked">
									<a href="<?php echo $li; ?>" target="_blank">Find Us On LinkedIn</a>
								</li>

							<?php endif ?>

							<?php if ($yt): ?>

								<li class="yt">
									<a href="<?php echo $yt; ?>" target="_blank">Watch Us On YouTube</a>
								</li>

							<?php endif ?>

						</ul>

						<?php } ?>
					</div><!-- contact-flex-wrapper -->

					<div class="location-flex-wrapper">

						<div class="location-wrapper">
							<?php if($name) : ?><span class="location-name"><?php echo $name; ?></span><?php endif; ?>
							<?php if($add || $add2 || $city || $state || $zip || $country) { ?>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="contact-wrapper">
								<?php if($add || $add2) { ?>
									<span itemprop="streetAddress" class="colophon-address"><?php if($add): echo $add; endif; if($add2): echo ', ' . $add2; endif; ?></span>
								<?php } ?>
								<?php if ($city): ?><span itemprop="addressLocality" class="colophon-city"><?php echo $city; ?></span><?php endif; if ($state): echo ', '; ?><span itemprop="addressRegion" class="colophon-state"><?php echo $state; ?></span><?php endif; if($zip): echo ' '; ?><span itemprop="postalCode" class="colophon-zip"><?php echo $zip; ?></span><?php endif; if($country): echo ' '; ?><span itemprop="addressCountry" class="colophon-country"><?php echo $country; ?></span><?php endif; ?>
							</div>
							<?php } ?>
							<?php if($phone): ?><div class="colophon-phone-wrapper contact-wrapper"><a class="tel colophon-phone" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Footer Phone Click');" href="tel:<?php echo $phone; ?>">Tel: <span itemprop="telephone"><?php echo $phone; ?></span></a></div><?php endif; ?>
						</div><!-- .location-wrapper -->

						<div class="location-wrapper">
							<?php if($name_b) : ?><span class="location-name"><?php echo $name_b; ?></span><?php endif; ?>
							<?php if($add_b || $add2_b || $city_b || $state_b || $zip_b || $country_b) { ?>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="contact-wrapper">
								<?php if($add_b || $add2_b) { ?>
									<span itemprop="streetAddress" class="colophon-address"><?php if($add_b): echo $add_b; endif; if($add2_b): echo ', ' . $add2_b; endif; ?></span>
								<?php } ?>
								<?php if ($city_b): ?><span itemprop="addressLocality" class="colophon-city"><?php echo $city_b; ?></span><?php endif; if ($state_b): echo ', '; ?><span itemprop="addressRegion" class="colophon-state"><?php echo $state_b; ?></span><?php endif; if($zip_b): echo ' '; ?><span itemprop="postalCode" class="colophon-zip"><?php echo $zip_b; ?></span><?php endif; if($country_b): echo ' '; ?><span itemprop="addressCountry" class="colophon-country"><?php echo $country_b; ?></span><?php endif; ?>
							</div>
							<?php } ?>
							<?php if($phone_b): ?><div class="colophon-phone-wrapper contact-wrapper"><a class="tel colophon-phone" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Footer Phone Click');" href="tel:<?php echo $phone_b; ?>">Tel: <span itemprop="telephone"><?php echo $phone_b; ?></span></a></div><?php endif; ?>
						</div><!-- .location-wrapper -->


						<div class="location-wrapper">
							<?php if($name_c) : ?><span class="location-name"><?php echo $name_c; ?></span><?php endif; ?>
							<?php if($add_c || $add2_c || $city_c || $state_c || $zip_c || $country_c) { ?>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="contact-wrapper">
								<?php if($add_c || $add2_c) { ?>
									<span itemprop="streetAddress" class="colophon-address"><?php if($add_c): echo $add_c; endif; if($add2_c): echo ', ' . $add2_c; endif; ?></span>
								<?php } ?>
								<?php if ($city_c): ?><span itemprop="addressLocality" class="colophon-city"><?php echo $city_c; ?></span><?php endif; if ($state_c): echo ', '; ?><span itemprop="addressRegion" class="colophon-state"><?php echo $state_c; ?></span><?php endif; if($zip_c): echo ' '; ?><span itemprop="postalCode" class="colophon-zip"><?php echo $zip_c; ?></span><?php endif; if($country_c): echo ' '; ?><span itemprop="addressCountry" class="colophon-country"><?php echo $country_c; ?></span><?php endif; ?>
							</div>
							<?php } ?>
							<?php if($phone_c): ?><div class="colophon-phone-wrapper contact-wrapper"><a class="tel colophon-phone" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Footer Phone Click');" href="tel:<?php echo $phone_c; ?>">Tel: <span itemprop="telephone"><?php echo $phone_c; ?></span></a></div><?php endif; ?>
						</div><!-- .location-wrapper -->
					</div><!-- location-flex-wrapper -->

					<div class="disclaimer-wrapper">
						<?php $disclaimer = get_theme_mod('setting_footer_disclaimer'); if($disclaimer): ?><span id="colophon-disclaimer"><?php echo $disclaimer; ?></span><?php endif; ?>

						<a href="https://www.mm4solutions.com/" target="_blank" id="slug"><span>Website by: Millennium Marketing Solutions</span></a>
					</div>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		<?php } ?>
	</div><!-- #translate-wrap -->
</div><!-- #page -->

<!-- Pop-up Modal -->
<div class="home-modal">
	<div>
		<a href="#" class="close-modal">X</a>
		<div>
		  <h3>Join Us!</h3>
		  <h2>MIAMI INTERNATIONAL BOAT SHOW:<br>FEBRUARY 15-19, 2018</h2>
		  <p>Join us for over 1,300 boats on display and learn how to offset 80-100% of new yacht costs through our Business Yacht Ownership<sup>&reg;</sup> Program</p>
		  <a href="http://www.atlantic-cruising.com/2018-miami-boat-show/" class="modal-click-thru" target="_blank">SAVE YOUR SEAT</a>
		  <span class="modal-tag">DISCOVER THE SMARTEST WAY TO OWN</span>
		</div>
		<div class="modal-footer">
		  <img src="<?php echo get_template_directory_uri() . '/imgs/full-modal-footer.png'; ?>" alt="Atlantic Crusing Yachts logo">
		</div>
	</div>
</div>
 <!-- Pop-up Modal -->

<?php wp_footer(); ?>
<?php if( is_front_page() ) { ?>
<script>jQuery('.home-highlight-thumb').imagefill();</script>
<?php } ?>
<?php if(has_post_thumbnail() && !is_front_page() ) { ?>
<script>jQuery('.feature-wrapper').imagefill();</script>
<?php } ?>
<?php if(is_home()) {
	$page_for_posts = get_option( 'page_for_posts' );
	$img =  get_the_post_thumbnail($page_for_posts, 'yacht-feature');
	if( $img ) { ?>
		<script>jQuery('.feature-wrapper').imagefill();</script>
	<?php }
} ?>

<script src="//e500e1cc16f44810a5585214be1d482e.js.ubembed.com" async></script>
</body>
</html>
