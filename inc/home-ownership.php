<?php
/**
 * Custom function for homepage
 *
 * @package Atlantic Cruising Yachts
 */

function atlantic_cruising_yachts_homepage_ownership_section() {
  if ( function_exists( 'get_field' ) ) {
    $split_section_img = get_field('home_page_split_section_background_image');
    $split_section_title = get_field('home_page_split_section_title');
    $split_section_content = get_field('home_page_split_section_content'); ?>

    <?php if ($split_section_title): ?>

      <section class="home-ownership">
        <div class="home-ownership-wrapper">

          <?php if ($split_section_img): ?>

            <img src="<?php echo esc_url( $split_section_img['sizes']['ownership-background-image'] ); ?>" alt="<?php echo esc_attr( $split_section_img['alt'] ); ?>" description="<?php echo esc_attr( $split_section_img['description'] ); ?>">

          <?php endif ?>

          <div class="home-ownership-inner-wrapper">

            <?php if ($split_section_title): ?>

              <h2><?php echo esc_html( $split_section_title ); ?></h2>

            <?php endif ?>

            <?php if ($split_section_content): ?>

              <div class="content-wrapper">
                <?php echo $split_section_content ?>
              </div>

            <?php endif ?>

          </div>
        </div>
      </section>

    <?php endif ?>

  <?php

  }

}
