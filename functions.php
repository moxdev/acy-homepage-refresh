<?php
/**
 * Atlantic Cruising Yachts functions and definitions
 *
 * @package Atlantic Cruising Yachts
 */

if ( ! function_exists( 'atlantic_cruising_yachts_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function atlantic_cruising_yachts_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Atlantic Cruising Yachts, use a find and replace
	 * to change 'atlantic-cruising-yachts' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'atlantic-cruising-yachts', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('home-feature', 1200, 470, true);
	add_image_size('yacht-feature', 1800, 750, true);
	add_image_size('yacht-lightbox-thumb', 75, 75, true);
	add_image_size('staff-headshot', 240, 240, true);
	add_image_size('yacht-thumbnail', 240, 240, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'atlantic-cruising-yachts' ),
		'aux' => esc_html__( 'Aux Menu', 'atlantic-cruising-yachts' ),
		'jeanneau-menu' => esc_html__( 'Jeanneau Menu', 'atlantic-cruising-yachts' ),
		'fountaine-pajot-menu' => esc_html__( 'Fountaine Pajot Menu', 'atlantic-cruising-yachts' ),
		'fountaine-pajot-boat-menu' => esc_html__( 'Fountaine Pajot Boat Menu', 'atlantic-cruising-yachts' ),
		'fountaine-pajot-power-cat-menu' => esc_html__( 'Fountaine Pajot Power Cat Menu', 'atlantic-cruising-yachts' ),
		'find-menu' => esc_html__( 'Find a Yacht Menu', 'atlantic-cruising-yachts' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	/*add_theme_support( 'custom-background', apply_filters( 'atlantic_cruising_yachts_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/
}
endif; // atlantic_cruising_yachts_setup
add_action( 'after_setup_theme', 'atlantic_cruising_yachts_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function atlantic_cruising_yachts_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'atlantic_cruising_yachts_content_width', 640 );
}
add_action( 'after_setup_theme', 'atlantic_cruising_yachts_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function atlantic_cruising_yachts_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Global Sidebar', 'atlantic_cruising_yachts' ),
		'id'            => 'sidebar-global',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'atlantic_cruising_yachts' ),
		'id'            => 'sidebar-blog',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'atlantic_cruising_yachts_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function register_jquery()  {
	if (!is_admin()) {
		wp_deregister_script('jquery');
        // Load the copy of jQuery that comes with WordPress
        // The last parameter set to TRUE states that it should be loaded in the footer.
        wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', FALSE, FALSE, TRUE);
    }
}
add_action('init', 'register_jquery');

function atlantic_cruising_yachts_scripts() {
	wp_enqueue_style( 'atlantic-cruising-yachts-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'atlantic-cruising-yachts-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20120206', true );

	if(is_page_template('page-yacht.php')) {
		wp_enqueue_script( 'atlantic-cruising-yachts-lightbox-min', get_template_directory_uri() . '/js/imagelightbox.min.js', array('jquery'), '20150625', true );
		wp_enqueue_script( 'atlantic-cruising-yachts-lightbox', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '20150625', true );
	}

	if(has_post_thumbnail() || is_page_template('frontpage.php')) {
		wp_enqueue_script( 'atlantic-cruising-yachts-images-loaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array('jquery'), '20150610', true );
		wp_enqueue_script( 'atlantic-cruising-yachts-image-fill', get_template_directory_uri() . '/js/jquery-imagefill.min.js', array('jquery'), '20150610', true );
		wp_register_script('atlantic-cruising-yachts-autoplay-detection', get_template_directory_uri() . '/js/min/modernizr-custom-min.js', FALSE, FALSE, TRUE);
		wp_register_script('atlantic-cruising-yachts-object-fit-library', get_template_directory_uri() . '/js/min/ofi.min.js', FALSE, FALSE, TRUE);
	}

	// if(is_page('inventory')) {
	// 	wp_enqueue_script( 'atlantic-cruising-boat-inventory-jqueryUI', get_template_directory_uri() . '/js/jquery-ui-1.11.4/jquery-ui.min.js', array('jquery'), '20150625', true );
	// 	wp_enqueue_script( 'atlantic-cruising-boat-inventory', get_template_directory_uri() . '/js/boat-inventory.js', array('jquery','underscore'), '20150625', true );
	// 	wp_enqueue_style( 'atlantic-cruising-boat-inventory-style', get_template_directory_uri().'/js/jquery-ui-1.11.4/jquery-ui.structure.min.css' );
	// 	wp_enqueue_style( 'atlantic-cruising-boat-jquery-ui', get_template_directory_uri().'/js/jquery-ui-1.11.4/jquery-ui.min.css' );
	// 	wp_enqueue_style( 'atlantic-cruising-boat-jquery-ui-theme', get_template_directory_uri().'/js/jquery-ui-1.11.4/jquery-ui.theme.css' );
	// 	wp_enqueue_style( 'atlantic-cruising-boat-inventory-base', get_template_directory_uri().'/boat-inventory.css' );
	// }

	if(is_home()) {
		$page_for_posts = get_option( 'page_for_posts' );
		$img =  get_the_post_thumbnail($page_for_posts, 'yacht-feature');
		if( $img ) {
			wp_enqueue_script( 'atlantic-cruising-yachts-images-loaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array('jquery'), '20150610', true );
			wp_enqueue_script( 'atlantic-cruising-yachts-image-fill', get_template_directory_uri() . '/js/jquery-imagefill.min.js', array('jquery'), '20150610', true );
		}
	}

	wp_enqueue_script( 'atlantic-cruising-yachts-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

  wp_register_script( 'atlantic-cruising-yachts-cookies', get_template_directory_uri() . '/js/jquery.cookie.min.js', array('jquery'), '20162309', true );
  wp_enqueue_script( 'atlantic-cruising-yachts', get_template_directory_uri() . '/js/modal-window.js', array('atlantic-cruising-yachts-cookies'), '20162309', true );

}
add_action( 'wp_enqueue_scripts', 'atlantic_cruising_yachts_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function atlantic_cruising_yachts_boat_page_body_classes( $classes ) {
	if ( is_page_template('page-yacht.php') && function_exists(get_field) ) {
		if( have_rows('videos') ) {
			$classes[] = 'has-video';
		} else if ( !have_rows('videos') ) {
			$classes[] = 'no-video';
		}
	}

	return $classes;
}
add_filter( 'body_class', 'atlantic_cruising_yachts_boat_page_body_classes' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * REMOVE EMOJIS FOR WORDPRESS 4.2
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * REQUIRE/RECOMMEND PLUGINS
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'donaldson_group_register_required_plugins' );

function donaldson_group_register_required_plugins() {
	$plugins = array(
		array(
            'name'      => 'Advanced Custom Fields',
            'slug'      => 'advanced-custom-fields',
            'required'  => true,
        ),
		array(
            'name'      => 'WP-PageNavi',
            'slug'      => 'wp-pagenavi',
            'required'  => false,
        ),
    );
	$config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
	tgmpa( $plugins, $config );
}

/**
 * CUSTOM POST STUFF
 */

function atlantic_cruising_yachts_create_custom_posts() {
	/*register_post_type( 'yachts',
		array(
			'labels' => array(
				'name' => __( 'Yachts' ),
				'add_new' => __( 'Add New Yacht' ),
				'add_new_item' => __( 'Add New Yacht' ),
				'edit' => __( 'Edit' )
			),
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions'),
			'public' => true,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-flag',
			'has_archive' => false
		)
	);*/
	register_post_type( 'home-page-highlights',
		array(
			'labels' => array(
				'name' => __( 'Home Page Highlights' ),
				'add_new' => __( 'Add New Highlight' ),
				'add_new_item' => __( 'Add New Highlight' ),
				'edit' => __( 'Edit' )
			),
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions'),
			'public' => true,
			'menu_position' =>5,
			'menu_icon' => 'dashicons-star-filled',
			'has_archive' => false
		)
	);
}
add_action( 'init', 'atlantic_cruising_yachts_create_custom_posts' );

/**
 * INCLUDE PLUGINS
 */
include_once( get_stylesheet_directory() . '/plugins/wp-imagelightbox/wp-imagelightbox.php' );

/**
 * BLOG CUSTOMIZATIONS
 */

function atlantic_cruising_yachts_modify_read_more_link() {
	return '<a class="more-link" href="' . get_permalink() . '">Continue Reading...</a>';
}

add_filter( 'the_content_more_link', 'atlantic_cruising_yachts_modify_read_more_link' );

/**
 * MAIN MEGA MENU
 */
class description_walker extends Walker_Nav_Menu {
    protected $topLevelId = NULL;
    protected $topLevelCount = NULL;
    protected $templateURL = NULL;

    function description_walker() {
        $this->templateURL = get_theme_root() . '/' . get_template() . '/';
    }

    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';

        if ($depth == 0)
            $this->topLevelId = $item->ID;

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="'. esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
        $attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
        $attributes .= ' class= "main-link"';


        $prepend = ''; // top level
        $append = '';  // top level
        $description  = '';

        $item_output = $args->before;
        $item_output .= '<a '. $attributes .'>';
        $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';

        if ($this->topLevelId == 1227) {
            ob_start();
			echo '<div>';
			//wp_nav_menu( array('theme_location' => 'jeanneau-menu', 'container'=>'', 'menu_id'=>'jeanneau-menu' ));
			wp_nav_menu( array('theme_location' => 'fountaine-pajot-boat-menu', 'container'=>'', 'menu_id'=>'fountaine-pajot-boat-menu' ));
			wp_nav_menu( array('theme_location' => 'fountaine-pajot-power-cat-menu', 'container'=>'', 'menu_id'=>'fountaine-pajot-power-cats-menu' ));
			//wp_nav_menu( array('theme_location' => 'find-menu', 'container'=>'', 'menu_id'=>'find-yacht-menu' )); ?>
			<?php echo '</div>';
			$item_output .= ob_get_contents();
            ob_end_clean();
        } else if($this->topLevelId == 1207) {
			 ob_start();
			echo '<div>';
			wp_nav_menu( array('theme_location' => 'jeanneau-menu', 'container'=>'', 'menu_id'=>'jeanneau-menu' )); ?>
			<?php echo '</div>';
			$item_output .= ob_get_contents();
            ob_end_clean();
		}

        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

/**
 * Remove pages from search results
 */
function exclude_pages_from_search($query) {
    if ( $query->is_search ) {
        $query->set( 'post_type', 'post' );
    }
    return $query;
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );

/**
 * ADD STYLES TO WYSIWYG
 */
// Insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Use 'mce_buttons' for button row #1, mce_buttons_3' for button row #3
add_filter('mce_buttons_2', 'my_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {
    $style_formats = array(
		array(
            'title' => 'Disclaimer', // Title to show in dropdown
            'inline' => 'span', // Element to add class to
            'classes' => 'disclaimer' // CSS class to add
        )
    );
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// EDITOR STYLES

function atlantic_cruising_yachts_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'atlantic_cruising_yachts_add_editor_styles' );

/**
 * NINJA FORMS STYLING
 */
function atlantic_cruising_yachts_add_nf_styles() {
    wp_enqueue_style( 'atlantic-cruising-yachts-ninja-forms-style', get_template_directory_uri() . '/ninja-styles.css');
}

add_action ( 'ninja_forms_display_css', 'atlantic_cruising_yachts_add_nf_styles' );


// Featured Images Light Box
function atlantic_cruising_yachts_boat_listing() {
  if( function_exists('get_field') ) {
    if( have_rows('boat_listing') ):

      // You will probably want to change this path to a minified version of the script
      wp_enqueue_script( 'atlantic-cruising-yachts-lightbox', get_template_directory_uri() . '/js/imagelightbox.min.js', array( 'jquery'), NULL, TRUE );
      $i = 0;
      ?>

      <section class="boat-listings">
        <div class="boat-listings-wrapper">
          <ul>

            <?php
            while( have_rows('boat_listing') ): the_row();
              $i++;
              $name        = get_sub_field('name');
              $thumb       = get_sub_field('main_image');
              $description = get_sub_field('description'); ?>

            <li>

              <!-- $thumb['sizes']['thumbnail'] or any custom size you have defined -->

              <div class="image-wrapper">
                <div class="image-container">
                  <img class="trigger-gallery-<?php echo $i; ?>" src="<?php echo esc_url( $thumb['sizes']['yacht-thumbnail'] ); ?>" alt="<?php echo esc_attr( $thumb['alt'] ); ?>">
                </div>
                <div class="boat">
                  <span class="name"><?php echo $name; ?></span>
                  <span class="desc"><?php echo $description; ?></span>
                </div>
              </div><!-- image-wrapper -->

              <!-- You might want to remove the inline CSS and add to your SASS files -->

              <?php if( have_rows('gallery') ): ?>

                  <div class="gallery-images" style="display:none;">
                    <ul>

                    <?php while( have_rows('gallery') ): the_row();

                      $img = get_sub_field('gallery_image'); ?>

                      <li><a href="<?php echo esc_url( $img['url'] ); ?>" data-imagelightbox="gallery-<?php echo $i; ?>"><?php echo esc_html( $img['filename'] ); ?></a></li>

                    <?php endwhile; ?>

                    </ul>
                  </div><!-- gallery-images -->

              <?php endif; ?>

              <hr>
            </li><!-- trigger-gallery -->

            <?php endwhile; ?>

          </ul>
        </div><!-- boat-listings-wrapper -->
      </section><!-- boat-listings -->

    <?php endif;
  }
}

add_action( 'wp_footer', 'atlantic_cruising_yachts_boat_listing_script', 100, 1 );
function atlantic_cruising_yachts_boat_listing_script() {
  if(function_exists('get_field')) {
    if( have_rows('boat_listing') ):
      $i = 0; ?>
      <script>
      <?php while( have_rows('boat_listing') ): the_row();
        $i++;
        // Feel free to change the options below. You can find them here: https://github.com/rejas/imagelightbox ?>
        var gallery<?php echo $i; ?> = jQuery('a[data-imagelightbox="gallery-<?php echo $i; ?>"]').imageLightbox({
          activity: true,
          arrows: true,
          button:true,
          lockbody:true,
          overlay:true,
          preloadNext: true
        });

        jQuery('.trigger-gallery-<?php echo $i; ?>').on('click', function () {
          gallery<?php echo $i; ?>.startImageLightbox();
        });
      <?php endwhile; ?>
      </script>
    <?php endif;
  }
}
// Featured Images Light Box