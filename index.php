<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php the_content(); ?></p>
      
      <?php endwhile; else : ?>
      
        <h1><?php _e( 'Nothing to See Here' ); ?></h1>
        <p><?php _e( 'There doesn\'t seem to be any posts here.' ); ?></p>
      
      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>