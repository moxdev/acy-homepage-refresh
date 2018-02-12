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

          $home_highlight_title  = get_sub_field('home_highlight_title');
          $home_highlight_img    = get_sub_field('home_highlight_image');
          $home_highlight_url    = get_sub_field('home_highlight_link'); ?>

          <div class="highlights-wrapper">
            <img src="<?php echo esc_url( $home_highlight_img['sizes']['highlight-background-image'] ); ?>" alt="<?php echo esc_attr( $home_highlight_img['alt'] ); ?>" description="<?php echo esc_attr( $home_highlight_img['description'] ); ?>">

            <div class="link-wrapper">
              <a href="<?php echo esc_attr( $home_highlight_url ); ?>"><?php echo esc_html( $home_highlight_title ); ?></a>
            </div>
          </div>

          <?php endwhile; ?>
        </div>
      <?php } ?>

    </section>

    <?php
  }
}