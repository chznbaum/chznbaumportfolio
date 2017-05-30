<?php
/*
Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><?php the_content(); ?></p>
      
          <?php endwhile; else : ?>
      
            <h1><?php _e( 'Nothing to See Here' ); ?></h1>
            <p><?php _e( 'There doesn\'t seem to be any pages here.' ); ?></p>
      
          <?php endif; ?>

        </div>
      </div>
      <!-- Secondary Column -->
      <div class="small-12 medium-4 medium-pull-8 columns">
        <div class="secondary">
          <div class="module-category">
            <h2 class="module-heading">Sidebar</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>