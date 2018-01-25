<?php
/**
 * Custom function for homepage
 *
 * @package Atlantic Cruising Yachts
 */

function atlantic_cruising_yachts_homepage_learn_more_section() {
  if ( function_exists( 'get_field' ) ) {
    if( have_rows('home_page_sub_content') ) {

      $count   = count(get_field('home_page_sub_content')); ?>

    <section class="home-learn-more">
      <div class="home-sub-content-wrapper col-<?php echo $count; ?>">
        <?php while ( have_rows('home_page_sub_content') ) : the_row();

          $sub_content_img    = get_sub_field('sub_content_image');
          $sub_content_title  = get_sub_field('sub_content_title');
          $sub_content        = get_sub_field('sub_content'); ?>

          <div class="home-sub-content-inner-wrapper">
            <img src="<?php echo esc_url( $sub_content_img['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $sub_content_img['alt'] ); ?>" description="<?php echo esc_attr( $sub_content_img['description'] ); ?>">
            <span><h2><?php echo esc_html( $sub_content_title ); ?></h2></span>
            <span><?php echo $sub_content; ?></span>
          </div>

        <?php endwhile; ?>

      </div><!-- home-sub-content-wrapper -->
    </section>

    <?php
    }
  }
}


