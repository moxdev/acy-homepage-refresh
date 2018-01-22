<?php
/**
 * Custom function for homepage
 * 
 * @package Atlantic Cruising Yachts
 */

function atlantic_cruising_yachts_homepage_highlights_section() {
  if(function_exists('get_field')) {
    $highlights = get_field('home_highlights'); ?>

    <section class="home-highlight-section">

      <?php if( have_rows('home_highlights') ) { ?>
        <div class="home-highlights">
          <?php while ( have_rows('home_highlights') ) : the_row();
          $title = get_sub_field('highlight_title');
          $img = get_sub_field('highlight_image');
          $url = get_sub_field('highlight_link'); ?>
          <a href="<?php echo esc_attr( $url ); ?>">
            <span><?php echo esc_html( $title ); ?></span>
            <img src="<?php echo esc_attr( $img['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>">
          </a>
          <?php endwhile; ?>
        </div>
      <?php } ?>

    </section>
    
    <?php
  }
}
