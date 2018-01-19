=== Plugin Name ===
Contributors: znuff
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=NM48ZRRRBYK5N
Tags: lightbox, imagelightbox.js
Requires at least: 3.0.1
Tested up to: 4.4
Stable tag: trunk
License: MIT
License URI: http://opensource.org/licenses/MIT

Responsive and touch-friendly lightbox for Wordpress. Uses ImageLightbox.js by Osvaldas Valutis

== Description ==

Responsive and touch-friendly lightbox for Wordpress.

Has no options. It will run on posts/pages/attachments. It will NOT run on categories, archives, front page etc. 

This plugin uses the excellent [ImageLightbox.js by Osvaldas Valutis](http://osvaldas.info/image-lightbox-responsive-touch-friendly).


== Installation ==

1. Upload wp-imagelightbox to `/wp-content/plugins`
2. Activate plugin from admin interface


== Frequently Asked Questions ==

= Where are the options? =

There aren't any at the moment!

= How to change the imagelightbox type? =

At the moment there is no way to change the type unless you edit the code of the plugin. Inside wp-imagelightbox.php you can edit the line containing `$type="f"`. Change the letter "f" to different types that you can see on Osvaldas Valutis' demo page.


== Screenshots ==

== Changelog ==

= r6 =
* Forgot to add the new .js name to the repo (can we have git, please, wordpress.org?)

= r5 =
* Fixed version number loading

= r4 = 
* Added a "view original image" button which opens the current image in a new tab
* Defaulting to mode=f which corresponds to Osvaldas' "combination" mode
* Stuff that I forgot?


= r3 =
* Fixed dependency on jQuery

= r2 =
* Tweaked the CSS a bit. Overlay is now dark, nav is "tigther". Looks better on mobiles phones, too (imho).

= r1 =
* Initial release
