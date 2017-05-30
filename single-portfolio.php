<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
          <div class="work-item">
            <?php
            $portfolio_image_values = get_post_custom_values( 'portfolio-meta-box-images');
            foreach( $portfolio_image_values as $key => $value ) {
            echo $value;
            }
          ?>
          </div>
        </div>
      </div>
      <!-- Secondary Column -->
      <div class="small-12 medium-4 medium-pull-8 columns">
        <div class="secondary">
          <div class="module-category">
            <h1><?php the_title(); ?></h1>
            <p><?php
          $portfolio_description_values = get_post_custom_values( 'portfolio-meta-box-description');
          foreach( $portfolio_description_values as $key => $value ) {
            echo $value;
          }
          ?></p>
          <hr>
          <p><?php previous_post_link(); ?></p>
          <p><a href="<?php bloginfo(url);?>/portfolio">Back to Portfolio</a></p>
          <p><?php next_post_link(); ?></p>
          </p>
          </div>
        </div>
      </div>

      <?php endwhile; else : ?>
      
        <h1><?php //_e( 'Nothing to See Here' ); ?></h1>
        <p><?php //_e( 'There doesn\'t seem to be any pages here.' ); ?></p>
      
      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>