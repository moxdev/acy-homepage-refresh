<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Atlantic Cruising Yachts
 */

?>

<div id="secondary" class="widget-area" role="complementary">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-global') ) :
			 endif;
		?>
		<?php if (is_single() || is_archive() || is_home() || is_search()) {
			 if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-blog') ) :
			 endif;
		} ?>
	
	<?php
	global $post;
	$parent = array_reverse(get_post_ancestors($post->ID));
	$first_parent = get_page($parent[0]);
	//print_r($first_parent);
		
	if(is_page_template('page-yacht.php') || $post->ID == 187 || $post->ID == 189 || $post->ID == 298) { ?>
	<nav class="subnav">
		<?php $manufacturer = get_field('add_which_manufacturer');
		if($manufacturer == 'jeanneau') {
			wp_nav_menu( array('theme_location' => 'jeanneau-menu', 'container'=>'', 'menu_id'=>'jeaneau-sub-menu', 'menu_class'=>'manufacturer-subnav' ));
		} else if($manufacturer == 'fountaine-pajot') {
			wp_nav_menu( array('theme_location' => 'fountaine-pajot-boat-menu', 'container'=>'', 'menu_id'=>'fountaine-pajot-sub-menu', 'menu_class'=>'manufacturer-subnav' )); 
			wp_nav_menu( array('theme_location' => 'fountaine-pajot-power-cat-menu', 'container'=>'', 'menu_id'=>'fountaine-pajot-power-cat-sub-menu', 'menu_class'=>'manufacturer-subnav' ));
		}
		$brochure = get_field('brochure');
		$page_id_own_less = 314;
		$page_data_own_less = get_page($page_id_own_less);
		$perma_own_less = get_permalink($page_id_own_less);
		$page_id_specials = 193;
		$page_data_specials = get_page($page_id_specials);
		$perma_specials = get_permalink($page_id_specials); 
		$page_id_pricing = 1103;
		$page_data_pricing = get_page($page_id_pricing);
		$perma_pricing = get_permalink($page_id_pricing); 
		$page_id_contact = 631;
		$page_data_contact = get_page($page_id_contact);
		$perma_contact = get_permalink($page_id_contact); ?>
		<ul class="yacht-aux">
			<?php if($page_data_own_less->post_status == 'publish'): ?><li><a href="<?php echo $perma_own_less; ?>">Own For Less</a></li><?php endif; ?>
			<?php if($page_data_specials->post_status == 'publish'): ?><li><a href="<?php echo $perma_specials; ?>">Specials</a></li><?php endif; ?>
			<?php if($brochure): ?><li><a href="<?php echo $brochure; ?>" target="_blank">Brochure</a></li><?php endif; ?>
			<li><a href="http://cruise-annapolis.com/" target="_blank">Try Before You Buy</a></li>
			<?php if($page_data_pricing->post_status == 'publish'): ?><li><a href="<?php echo $perma_pricing; ?>">Request Pricing</a></li><?php endif; ?>
			<?php if($page_data_contact->post_status == 'publish'): ?><li><a href="<?php echo $perma_contact; ?>">Contact Us</a></li><?php endif; ?>
		</ul>
	</nav>
	<?php  } else {
		$children = get_pages('child_of='.$first_parent->ID);
		if( count( $children ) != 0 ) {?>
		<nav class="subnav" id="sidebar-subnav">
			<ul class="page-subnav">
			<?php wp_list_pages('child_of=' . $first_parent->ID . '&title_li=&sort_column=menu_order'); ?>
			</ul>
		</nav>
		<?php } 
	} ?>
	
	<?php if(!is_page_template('page-broker.php')) {?>
		<aside id="side-email-signup">
			<script type="text/javascript" src="https://forms.zohopublic.com/chrisbent/form/NewsletterSignup/jsperma/32DAk3h41J6h4H311k5ka11CK" id="ZFScript"></script>
		</aside>
	<?php } ?>
</div><!-- #secondary -->
