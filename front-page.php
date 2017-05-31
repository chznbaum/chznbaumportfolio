<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p><?php the_content(); ?></p>
      
      <?php endwhile; endif; ?>

    </div>
  </div>
</section>

<?php get_template_part( 'content', 'portfolio' ); ?>

<?php get_footer(); ?>