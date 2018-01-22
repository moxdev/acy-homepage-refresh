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

		<?php if ( is_page_template('frontpage.php') && function_exists( 'atlantic_cruising_yachts_homepage_testimonial_section' ) ) { 
			atlantic_cruising_yachts_homepage_testimonial_section();
		} ?>

		<?php if ( is_page_template('frontpage.php') && function_exists( 'atlantic_cruising_yachts_homepage_learn_more_section' ) ) { 
			atlantic_cruising_yachts_homepage_learn_more_section();
		} ?>

		<?php if ( is_page_template('frontpage.php') && function_exists( 'atlantic_cruising_yachts_homepage_highlights_section' ) ) { 
			atlantic_cruising_yachts_homepage_highlights_section();
		} ?>

		<?php if ( is_page_template('frontpage.php') && function_exists( 'atlantic_cruising_yachts_homepage_ownership_section' ) ) { 
			atlantic_cruising_yachts_homepage_ownership_section();
		} ?>

		<?php if( !is_page_template('page-plain-single-column.php') && !is_page_template('page-broker.php')) { ?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php
				$page_id_brokers = 1237;
				$page_data_brokers = get_page($page_id_brokers);
				$perma_brokers = get_permalink($page_id_brokers);

				if($page_data_brokers->post_status == 'publish') { ?>
					<a class="ftr-nav" href="<?php echo $perma_brokers; ?>">Brokers Login</a>
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
					$phone_c = get_theme_mod('setting_phone_c');
					if($comp_name) : ?><span itemprop="name" id="colophon-company-name"><?php echo $comp_name; ?></span><?php endif; ?>

					<?php if($main_ph): ?><div class="ftr-main-phone"><a class="tel" onclick="ga('send', 'event', 'Click', 'Phone Click', 'Footer Phone Click');" href="tel:<?php echo $main_ph; ?>">Tel: <span itemprop="telephone"><?php echo $main_ph; ?></span></a></div><?php endif; ?>
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


				</div><!-- .site-info -->
				<?php $fb = get_theme_mod('setting_facebook_url');
				$li = get_theme_mod('setting_linkedin_url');
				$yt = get_theme_mod('setting_youtube_url');
				if($fb || $li || $yt) { ?>
				<div id="colophon-social-wrapper">
					<ul>
					<?php if($fb): ?><li><a href="<?php echo $fb; ?>" target="_blank" class="colophon-social-link" id="colophon-fb">Find Us on Facebook</a></li><?php endif; ?>
					<?php if($li): ?><li><a href="<?php echo $li; ?>" target="_blank" class="colophon-social-link" id="colophon-li">Connect With Us on LinkedIn</a></li><?php endif; ?>
					<?php if($yt): ?><li><a href="<?php echo $yt; ?>" target="_blank" class="colophon-social-link" id="colophon-yt">View Our You Tube Channel</a></li><?php endif; ?>
					</ul>
				</div>
				<?php } ?>
				<?php $disclaimer = get_theme_mod('setting_footer_disclaimer'); if($disclaimer): ?><span id="colophon-disclaimer"><?php echo $disclaimer; ?></span><?php endif; ?>
				<a href="https://www.mm4solutions.com/" target="_blank" id="slug"><span>Site by:</span>
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="163px" height="32px" viewBox="0 0 163 32" enable-background="new 0 0 163 32" xml:space="preserve">
					<g id="text-2">
						<g>
							<g>
								<path fill="#FFFFFF" d="M21.5,4.6c0.2,0,0.5,0,0.7,0.1c-2.8,0.7-7.4,3.5-7.4,3.5C14.8,8.1,17.7,5.8,21.5,4.6z"/>
								<path fill="#FFFFFF" d="M20.2,4.6h0.5C18.1,5.5,17,6.2,17,6.2V6.1C17,6.1,18,5.4,20.2,4.6z"/>
								<path fill="#FFFFFF" d="M0.7,25V10.8c0-3.4,2.8-6.2,6.2-6.2h12.3c-0.4,0.2-0.8,0.3-1.2,0.5c-1,0.5-4,1.8-7,4
									C6.2,12.9,2.2,18.4,0.7,25z M6.9,31.2c-1.2,0-2.3-0.3-3.3-0.9c0-1.3,0.2-2.7,0.4-4C5.9,15.2,13.6,7.8,23.2,5
									c2.4,0.9,4.1,3.2,4.1,5.8V25c0,3.4-2.8,6.2-6.2,6.2H6.9z"/>
								<path fill="#FFFFFF" d="M20.6,4.6c0.5-0.2,1.1-0.4,1.8-0.6c2.2-0.7,4.5-0.9,6.2-1.1c0.7-0.1,1.3-0.1,1.7,0
									c-0.5,0-1.1,0.1-1.9,0.2c-1.8,0.2-4.1,0.6-5.7,1.1c-0.4,0.1-0.8,0.3-1.2,0.4c-0.1,0-0.3,0-0.4,0C21.1,4.6,20.6,4.6,20.6,4.6z
									 M19.2,4.6c1.4-0.5,2.9-0.9,4.6-1.3c2.3-0.5,3.7-0.5,5.1-0.6c-1.7,0.1-3.9,0.4-6.6,1.2c-0.9,0.2-1.6,0.5-2.2,0.7H19.2z M28.4,3.7
									c-0.3,0-1.3,0.2-2,0.3c-0.6,0.1-1.2,0.2-1.2,0.2l0,0c0,0,0.9-0.2,1.8-0.3c0.5-0.1,1.8-0.2,2-0.2c-0.6,0.1-1.5,0.2-2.6,0.4l0,0
									c-1.1,0.2-2.1,0.5-3.2,0.8c-0.3-0.1-0.7-0.2-1.1-0.3c0.7-0.2,1.4-0.4,2.1-0.5c2.6-0.6,4.6-0.7,5.8-0.8
									C30.2,3.3,29.1,3.4,28.4,3.7c-0.5,0-0.9,0-0.9,0l0,0c0,0,0.1,0,0.3,0C28.1,3.7,28.4,3.6,28.4,3.7z"/>
								<path fill="#FFFFFF" d="M22.9,4.3c0,0,1.3-0.5,3.7-0.9c3.9-0.6,6.9-0.5,6.9-0.5S29.4,3,26,3.7C23.6,4.1,22.9,4.3,22.9,4.3z"/>
							</g>
							<path fill="#FFFFFF" d="M21.5,5.3C21,5.5,19.8,6,19.8,6s0.6-0.4,1.8-0.8c0.4-0.2,1-0.4,1.7-0.6C23.3,4.6,22,5.1,21.5,5.3z"/>
						</g>
						<g>
							<path fill="#FFFFFF" d="M97.6,27.9"/>
						</g>
						<g>
							<g>
								<path fill="#FFFFFF" d="M36.6,30.2v-6.1h-1l-1.3,3.2c-0.1,0.4-0.3,0.8-0.4,1c-0.1-0.3-0.3-0.7-0.4-1l-1.4-3.2h-0.9v6.1H32V27
									c0-0.4,0-0.9,0-1.1c0.1,0.2,0.2,0.6,0.4,1l1.5,3.4l1.5-3.4c0.1-0.3,0.3-0.8,0.4-1c0,0.2,0,0.7,0,1.1v3.2H36.6z"/>
								<path fill="#FFFFFF" d="M44.9,30.2l-2.2-6.1h-1l-2.2,6.1h0.9l0.5-1.4h2.4l0.5,1.4H44.9z M43.1,28h-1.9l0.5-1.4
									c0.2-0.5,0.4-1.2,0.4-1.4c0.1,0.3,0.3,1,0.5,1.4L43.1,28z"/>
								<path fill="#FFFFFF" d="M52.5,26c0-1.3-0.9-1.8-2-1.8h-2.7v6.1h0.9v-2.4h1.4l1.2,2.4h1.1l-1.2-2.5C51.9,27.6,52.5,26.9,52.5,26z
									 M51.5,26c0,0.7-0.4,1-1,1h-1.8v-2h1.8C51.1,25,51.5,25.4,51.5,26z"/>
								<path fill="#FFFFFF" d="M60.4,30.2l-2.2-3.9l1.8-2.2h-1l-1.8,2.3c-0.2,0.3-0.6,0.8-0.7,0.9c0-0.2,0-0.9,0-1.1v-2.1h-0.9v6.1h0.9
									v-1.8l1.1-1.4l1.8,3.1h1V30.2z"/>
								<polygon fill="#FFFFFF" points="67.4,30.2 67.4,29.4 64.2,29.4 64.2,27.4 66,27.4 66,26.5 64.2,26.5 64.2,25 67.2,25 67.2,24.2
									63.3,24.2 63.3,30.2 			"/>
								<polygon fill="#FFFFFF" points="74.5,25.1 74.5,24.2 70,24.2 70,25.1 71.8,25.1 71.8,30.2 72.7,30.2 72.7,25.1 			"/>
								<rect x="77.5" y="24.2" fill="#FFFFFF" width="0.9" height="6.1"/>
								<path fill="#FFFFFF" d="M86.4,30.2v-6.1h-0.9v3.1c0,0.3,0,1.2,0,1.4c-0.1-0.2-0.3-0.6-0.5-0.9L82.7,24h-0.9v6.1h0.9v-3.2
									c0-0.3,0-1.2,0-1.4c0.1,0.2,0.3,0.5,0.5,0.8l2.4,3.8h0.8V30.2z"/>
								<path fill="#FFFFFF" d="M94.3,27.9v-0.7h-1.9V28h1l0,0c0,0.7-0.4,1.4-1.4,1.4c-1.1,0-1.6-0.9-1.6-2.2c0-1.4,0.6-2.2,1.6-2.2
									c0.6,0,1,0.2,1.3,0.7l0.8-0.5c-0.4-0.7-1.1-1.1-2.1-1.1c-1.6,0-2.6,1.3-2.6,3.1c0,1.8,1,3.1,2.6,3.1
									C93.3,30.3,94.3,29.4,94.3,27.9z"/>
							</g>
							<path fill="#FFFFFF" d="M105.5,28.5c0-1.1-0.7-1.5-1.9-1.8c-1.1-0.3-1.3-0.5-1.3-0.9s0.3-0.8,1-0.8c0.6,0,1,0.2,1.4,0.6l0.6-0.7
								c-0.5-0.5-1.2-0.8-2-0.8c-1.1,0-2,0.6-2,1.7s0.6,1.4,1.9,1.8c1,0.3,1.4,0.5,1.4,1c0,0.6-0.4,0.9-1.3,0.9c-0.6,0-1.2-0.3-1.6-0.7
								l-0.7,0.6c0.5,0.6,1.3,1,2.2,1C104.8,30.3,105.5,29.6,105.5,28.5z"/>
							<path fill="#FFFFFF" d="M113.5,27.2c0-1.8-1-3.1-2.6-3.1s-2.6,1.3-2.6,3.1c0,1.8,1,3.1,2.6,3.1C112.5,30.3,113.5,29,113.5,27.2z
								 M112.5,27.2c0,1.4-0.6,2.2-1.7,2.2s-1.6-0.9-1.6-2.2c0-1.4,0.6-2.2,1.6-2.2C112,25,112.5,25.8,112.5,27.2z"/>
							<polygon fill="#FFFFFF" points="120.5,30.2 120.5,29.4 117.4,29.4 117.4,24.2 116.5,24.2 116.5,30.2 		"/>
							<g>
								<path fill="#FFFFFF" d="M127.7,27.7v-3.6h-0.9v3.6c0,1.1-0.5,1.7-1.4,1.7s-1.4-0.6-1.4-1.8v-3.5h-0.9v3.5c0,1.7,0.8,2.7,2.3,2.7
									C126.9,30.3,127.7,29.4,127.7,27.7z"/>
								<polygon fill="#FFFFFF" points="135.1,25.1 135.1,24.2 130.6,24.2 130.6,25.1 132.4,25.1 132.4,30.2 133.3,30.2 133.3,25.1
									"/>
								<rect x="138.1" y="24.2" fill="#FFFFFF" width="0.9" height="6.1"/>
								<path fill="#FFFFFF" d="M147.2,27.2c0-1.8-1-3.1-2.6-3.1s-2.6,1.3-2.6,3.1c0,1.8,1,3.1,2.6,3.1C146.2,30.3,147.2,29,147.2,27.2z
									 M146.3,27.2c0,1.4-0.6,2.2-1.7,2.2c-1.1,0-1.6-0.9-1.6-2.2c0-1.4,0.6-2.2,1.6-2.2C145.7,25,146.3,25.8,146.3,27.2z"/>
								<path fill="#FFFFFF" d="M154.9,30.2v-6.1H154v3.1c0,0.3,0,1.2,0,1.4c-0.1-0.2-0.3-0.6-0.5-0.9l-2.3-3.7h-0.9v6.1h0.9v-3.2
									c0-0.3,0-1.2,0-1.4c0.1,0.2,0.3,0.5,0.5,0.8l2.4,3.8h0.8V30.2z"/>
								<path fill="#FFFFFF" d="M162.3,28.5c0-1.1-0.7-1.5-2-1.8c-1.1-0.3-1.3-0.5-1.3-0.9s0.3-0.8,1-0.8c0.6,0,1,0.2,1.4,0.6l0.6-0.7
									c-0.5-0.5-1.2-0.8-2-0.8c-1.1,0-2,0.6-2,1.7s0.6,1.4,1.9,1.8c1,0.3,1.4,0.5,1.4,1c0,0.6-0.4,0.9-1.3,0.9c-0.6,0-1.2-0.3-1.6-0.7
									l-0.7,0.6c0.5,0.6,1.3,1,2.2,1C161.6,30.3,162.3,29.6,162.3,28.5z"/>
							</g>
						</g>
					</g>
					<g id="text-1">
						<g>
							<path fill="#FFFFFF" d="M53.3,13.2c0-3.8-2.4-6.5-6.5-6.5c-1.9,0-3.5,0.8-4.6,2.1c-1-1.3-2.6-2.1-4.6-2.1c-4,0-6.5,2.8-6.5,6.5
								v8.4h3.7v-8.5c0-1.6,1.2-2.8,2.8-2.8c2.5,0,2.7,1.9,2.7,2.8v8.5H44v-8.5c0-1.6,1.2-2.8,2.8-2.8c2.5,0,2.7,1.9,2.7,2.8v8.5h3.7
								L53.3,13.2L53.3,13.2z"/>
							<path fill="#FFFFFF" d="M59.3,2.1h-3.7v3.5h3.7V2.1z M59.3,7.1h-3.7v14.5h3.7V7.1z"/>
							<g>
								<rect x="61.7" y="0.7" fill="#FFFFFF" width="3.7" height="21"/>
								<path fill="#FFFFFF" d="M63.6,11.2"/>
							</g>
							<g>
								<rect x="67.8" y="0.7" fill="#FFFFFF" width="3.7" height="21"/>
								<path fill="#FFFFFF" d="M69.7,11.2"/>
							</g>
							<path fill="#FFFFFF" d="M83.6,17h3.8c-0.8,3-3.4,5-7,5c-4.1,0-7.4-3.4-7.4-7.6s3.3-7.6,7.4-7.6c3.5,0,6.4,2.2,7.1,6.1l-3.2,1.3
								c-0.1-2.3-1.8-4.2-4-4.2s-4,2-4,4.4s1.8,4.4,4,4.4C81.7,18.8,82.9,18.1,83.6,17z"/>
							<path fill="#FFFFFF" d="M89,13.2v8.4h3.7v-8.5c0-1.6,1.2-2.8,2.8-2.8c2.5,0,2.7,1.9,2.7,2.8v8.5h3.7v-8.4c0-3.8-2.4-6.5-6.5-6.5
								C91.6,6.8,89,9.6,89,13.2z"/>
							<path fill="#FFFFFF" d="M104,13.2v8.4h3.7v-8.5c0-1.6,1.2-2.8,2.8-2.8c2.5,0,2.7,1.9,2.7,2.8v8.5h3.7v-8.4c0-3.8-2.4-6.5-6.5-6.5
								C106.6,6.8,104,9.6,104,13.2z"/>
							<path fill="#FFFFFF" d="M122.9,2.1h-3.7v3.5h3.7V2.1z M122.9,7.1h-3.7v14.5h3.7V7.1z"/>
							<path fill="#FFFFFF" d="M138.2,15.5V7.1h-3.7v8.5c0,1.6-1.2,2.8-2.8,2.8c-2.5,0-2.7-1.9-2.7-2.8V7.1h-3.7v8.4
								c0,3.8,2.4,6.5,6.5,6.5C135.6,22,138.2,19.2,138.2,15.5z"/>
							<path fill="#FFFFFF" d="M162.4,13.2c0-3.8-2.4-6.5-6.5-6.5c-1.9,0-3.5,0.8-4.6,2.1c-1-1.3-2.7-2.1-4.6-2.1c-4,0-6.5,2.8-6.5,6.5
								v8.4h3.7v-8.5c0-1.6,1.2-2.8,2.8-2.8c2.5,0,2.7,1.9,2.7,2.8v8.5h3.7v-8.5c0-1.6,1.2-2.8,2.8-2.8c2.5,0,2.7,1.9,2.7,2.8v8.5h3.7
								v-8.4H162.4z"/>
							<g>
								<path fill="#FFFFFF" d="M73,6.7L73,6.7C73.1,6.7,73.1,6.7,73,6.7C73.1,6.7,73.1,6.7,73,6.7L73,6.7L73,6.7z"/>
							</g>
							<path fill="#FFFFFF" d="M76.3,12.7h11.2c0.1,0.5,0.1,1,0.1,1.5s0,1-0.1,1.5H76.3V12.7z"/>
						</g>
					</g>
					<g id="icon">
						<g>
							<g>
								<path fill="#FFFFFF" d="M21.5,4.6c0.2,0,0.5,0,0.7,0.1c-2.8,0.7-7.4,3.5-7.4,3.5C14.8,8.1,17.7,5.8,21.5,4.6z"/>
								<path fill="#FFFFFF" d="M20.2,4.6h0.5C18.1,5.5,17,6.2,17,6.2V6.1C17,6.1,18,5.4,20.2,4.6z"/>
								<path fill="#FFFFFF" d="M0.7,25V10.8c0-3.4,2.8-6.2,6.2-6.2h12.3c-0.4,0.2-0.8,0.3-1.2,0.5c-1,0.5-4,1.8-7,4
									C6.2,12.9,2.2,18.4,0.7,25z M6.9,31.2c-1.2,0-2.3-0.3-3.3-0.9c0-1.3,0.2-2.7,0.4-4C5.9,15.2,13.6,7.8,23.2,5
									c2.4,0.9,4.1,3.2,4.1,5.8V25c0,3.4-2.8,6.2-6.2,6.2H6.9z"/>
								<path fill="#FFFFFF" d="M20.6,4.6c0.5-0.2,1.1-0.4,1.8-0.6c2.2-0.7,4.5-0.9,6.2-1.1c0.7-0.1,1.3-0.1,1.7,0
									c-0.5,0-1.1,0.1-1.9,0.2c-1.8,0.2-4.1,0.6-5.7,1.1c-0.4,0.1-0.8,0.3-1.2,0.4c-0.1,0-0.3,0-0.4,0C21.1,4.6,20.6,4.6,20.6,4.6z
									 M19.2,4.6c1.4-0.5,2.9-0.9,4.6-1.3c2.3-0.5,3.7-0.5,5.1-0.6c-1.7,0.1-3.9,0.4-6.6,1.2c-0.9,0.2-1.6,0.5-2.2,0.7H19.2z M28.4,3.7
									c-0.3,0-1.3,0.2-2,0.3c-0.6,0.1-1.2,0.2-1.2,0.2l0,0c0,0,0.9-0.2,1.8-0.3c0.5-0.1,1.8-0.2,2-0.2c-0.6,0.1-1.5,0.2-2.6,0.4l0,0
									c-1.1,0.2-2.1,0.5-3.2,0.8c-0.3-0.1-0.7-0.2-1.1-0.3c0.7-0.2,1.4-0.4,2.1-0.5c2.6-0.6,4.6-0.7,5.8-0.8
									C30.2,3.3,29.1,3.4,28.4,3.7c-0.5,0-0.9,0-0.9,0l0,0c0,0,0.1,0,0.3,0C28.1,3.7,28.4,3.6,28.4,3.7z"/>
								<path fill="#FFFFFF" d="M22.9,4.3c0,0,1.3-0.5,3.7-0.9c3.9-0.6,6.9-0.5,6.9-0.5S29.4,3,26,3.7C23.6,4.1,22.9,4.3,22.9,4.3z"/>
							</g>
							<path fill="#FFFFFF" d="M21.5,5.3C21,5.5,19.8,6,19.8,6s0.6-0.4,1.8-0.8c0.4-0.2,1-0.4,1.7-0.6C23.3,4.6,22,5.1,21.5,5.3z"/>
						</g>
					</g>
					</svg>
				</a>
			</footer><!-- #colophon -->
		<?php } ?>
	</div><!-- #translate-wrap -->
</div><!-- #page -->

<!-- Pop-up Modal -->
 <!-- <div class="home-modal">
     <div>
       <a href="#" class="close-modal">X</a>
       <div>
         <h3>Join Us!</h3>

         <h2>ANNAPOLIS BOAT SHOW: OCTOBER 5 - 9, 2017</h2>

         <p>We invite you to experience the largest selection of Fountaine Pajot and Jeanneau yachts in America, including the brand new Saona 47 and Jeanneau 440.</p>

         <p>Learn how to offset 80-100% of new yacht costs through our Business Yacht Ownership<sup>&reg;</sup> program.</p>

         <a href="http://charter.cruise-annapolis.com/annapolis-sailboat-show-2017" class="modal-click-thru" target="_blank">SAVE YOUR SEAT</a>
         <span class="modal-tag">DISCOVER THE LEAST EXPENSIVE WAY TO OWN</span>
       </div>
       <div class="modal-footer">
         <img src="<?php // echo get_template_directory_uri() . '/imgs/full-modal-footer.png'; ?>" alt="Atlantic Crusing Yachts logo">
       </div>
     </div>
 </div> -->
 <!-- Pop-up Modal -->

<?php wp_footer(); ?>
<?php if(is_page_template('frontpage.php')) { ?>
<script>jQuery('.home-highlight-thumb').imagefill();</script>
<?php } ?>
<?php if(has_post_thumbnail() && !is_page_template('frontpage.php')) { ?>
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
