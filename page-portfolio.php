<?php
/*
  Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <?php
      $query1 = new WP_Query( array( 'post_type' => 'page', 'name' => 'portfolio' ) ); ?>
      <?php if ( $query1->have_posts() ) : while ( $query1->have_posts() ) : $query1->the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <?php /* Restore original Post Data */
      wp_reset_postdata();
      endwhile; else : ?>
        <h1><?php _e( 'Nothing to See Here' ); ?></h1>
        <p><?php _e( 'There doesn\'t seem to be any portfolio items here.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="row no-max pad">
  <?php
  $query2 = new WP_Query( array( 'post_type' => 'portfolio' ) ); ?>

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

<?php get_footer(); ?>