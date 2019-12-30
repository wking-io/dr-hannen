<?php

/**
 * Template Name: Contact
 **/

get_header(); ?>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
    <p>Sorry, there was an error getting the contact form.</p>
  <?php endif; ?>
</main>

<?php get_footer();