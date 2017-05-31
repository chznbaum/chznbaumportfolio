<section class="row no-max pad">
  <?php
  $num_posts = ( is_front_page() ) ? 4 : -1;
  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
    );
  $query2 = new WP_Query( $args ); ?>

  <?php if ( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post(); ?>
    <div class="small-6 medium-4 large-3 columns grid-item">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    </div>
  <?php /* Restore original Post Data */
  wp_reset_postdata();
  endwhile; else : ?>
      
    <h1><?php _e( 'Nothing to See Here' ); ?></h1>
    <p><?php _e( 'There doesn\'t seem to be any portfolio items here.' ); ?></p>
      
  <?php endif; ?>
</section>