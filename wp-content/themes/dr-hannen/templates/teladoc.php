<?php

/**
 * Template Name: Teladoc
 **/

get_header(); ?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="w-5/6 max-w-6xl mx-auto">
    <h2 class="font-extrabold text-4xl md:text-5xl lg:text-6xl mt-24"><?php the_title(); ?></h2>
    <div class="dh-content mt-12 pb-24">
      <?php the_content(); ?>
    </div>
  </div>
  <?php endwhile; else : ?>
    <p>Sorry, there was an error getting the contact form.</p>
  <?php endif; ?>
</main>

<?php get_footer();