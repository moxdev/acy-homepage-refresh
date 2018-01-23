<?php
/**
 * Custom function for homepage
 *
 * @package Atlantic Cruising Yachts
 */

function atlantic_cruising_yachts_homepage_ownership_section() {
  if ( function_exists( 'get_field' ) ) {
    $img = get_field('home_page_split_section_background_image');
    $title = get_field('home_page_split_section_title');
    $content = get_field('home_page_split_section_content'); ?>

    <?php if ($title): ?>

      <section class="home-ownership">
        <div class="home-ownership-wrapper">

          <?php if ($img): ?>

            <img src="<?php echo esc_url( $img['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">

          <?php endif ?>

          <div class="home-ownership-inner-wrapper">

            <?php if ($title): ?>

              <h2><?php echo esc_html( $title ); ?></h2>

            <?php endif ?>

            <?php if ($content): ?>

              <div class="content-wrapper">
                <?php echo $content ?>
              </div>

            <?php endif ?>

          </div>
          <div class="overlay"></div>

        </div>
      </section>

    <?php endif ?>

  <?php

  }

}
