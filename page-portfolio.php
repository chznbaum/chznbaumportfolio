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

<?php get_template_part( 'content', 'portfolio' ); ?>

<?php get_footer(); ?>