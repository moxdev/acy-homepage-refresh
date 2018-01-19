<?php
/**
 * Plugin Name: ImageLightbox.js
 * Plugin URI: http://linge-ma.ws/wp-imagelightbox
 * Description: Responsive and Touch-Friendly Lightbox for Wordpress, JS by Osvaldas Valutis.
 * Version: r6
 * Author: Znuff
 * Author URI: http://z.linge-ma.ws
 * License: MIT
 */

function iljs_enqueue() {
   //wp_enqueue_style('imagelightbox', plugin_dir_url(__FILE__).'imagelightbox.css', false, 'r6');
   wp_enqueue_script('imagelightbox', get_template_directory_uri() . '/plugins/wp-imagelightbox/imagelightbox.js', array('jquery'), 'r6', true);
}


function iljs_mod_tags ($content) {
   global $post;
   $type="f"; // the type of imagelightbox, f: combined

   $pattern = "/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
   $replacement = '<a$1href=$2$3.$4$5$6 data-imagelightbox="'.$type.'">';
   $content = preg_replace($pattern, $replacement, $content);

   return $content;
}

// run only on posts, pages, attachments(?) and galleries, no reason to run on the front page, yet...?
function iljs_mod_content() {
   if ( !is_page_template('page-yacht.php') ) {
      
      // registering styles and scripts
      add_action( 'wp_enqueue_scripts', 'iljs_enqueue' );

      // adds the filter for single content images
      add_filter('the_content', 'iljs_mod_tags');

      // adds the filter for image galleries
      add_filter('wp_get_attachment_link','iljs_mod_tags');
   }
}

add_filter("template_redirect", "iljs_mod_content", 10, 1);

?>
