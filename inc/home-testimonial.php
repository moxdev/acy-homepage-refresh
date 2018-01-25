<?php
/**
 * Custom function for homepage
 *
 * @package Atlantic Cruising Yachts
 */

function atlantic_cruising_yachts_homepage_testimonial_section() {
	if ( function_exists( 'get_field' ) ) {
    $testimonial           = get_posts( array('post_type' => 'testimonials', 'posts_per_page' => -1) );
    $testimonial_btn_text  = get_field( 'testimonial_button_text' );
    $testimonial_page_link = get_field( 'testimonial_page_link' );
    $testimonial_img       = get_field( 'testimonial_background_image');

    if ($testimonial) {
        // WP_Query arguments
        $args = array(
            'post_type'   => array( 'testimonials' ),
            'post_status' => array( 'publish' ),
            'nopaging'    => true,
            'order'       => 'DESC',
            'orderby'     => 'date',
        );
        // The Query
        $testimonials = new WP_Query( $args );
        // The Loop
        if ( $testimonials->have_posts() ) { ?>

          <section class="home-testimonial">

            <?php if ( $testimonial_img ): ?>

              <img src="<?php echo esc_url( $testimonial_img['sizes']['testimonial-background-image'] ); ?>" alt="<?php echo esc_attr( $testimonial_img['alt'] ); ?>" description="<?php echo esc_attr( $testimonial_img['description'] ); ?>">

            <?php endif ?>
            <div class="home-testimonial-wrapper">
              <div class="testimonial-carousel">

              <?php while ( $testimonials->have_posts() ) {
                  $testimonials->the_post();
                  $excerpt = get_field( 'testimonial_excerpt', $post->ID );

                  ?>

                  <div class="cell">
                    <div class="cell-wrapper">
                      <div class="excerpt-wrapper">

                        <span class="excerpt">"<?php echo esc_html( $excerpt ); ?>"</span>
                        <span class="title">&mdash; &nbsp; <?php the_title(); ?></span>

                      </div>

                      <div class="testimonial-content-wrapper">
                        <?php the_content(); ?>
                      </div>

                    </div>
                  </div><!-- cell -->

                <?php

              } ?>

              </div><!-- testimonial-carousel -->

              <a class="btn" href="<?php echo esc_attr( $testimonial_page_link ); ?>"><?php echo esc_html( $testimonial_btn_text ); ?></a>

            </div><!-- home-testimonial-wrapper -->
          </section>

        <?php
        }
        // Restore original Post Data
        wp_reset_postdata();
    }
	}
}
