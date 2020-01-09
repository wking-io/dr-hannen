<?php

get_header(); ?>

<main>
  <?php if ( have_posts() ) : ?>
    <section class="w-11/12 max-w-5xl mx-auto mt-16 md:mt-24 pb-24">
      <h3 class="capitalize text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold">Search results for: <span class="text-brand-cyan"><?php the_search_query(); ?></span></h3>
      <ul class="flex flex-wrap md:-mx-4 md:mt-4">
        <?php while ( have_posts() ) : the_post();
          $category_name = dh_get_first_category( get_the_category() );
          dh_display_post( $category_name, get_the_ID() );
        endwhile; ?>
      </ul>
    </section>
  <?php else : ?>
    <h3 class="capitalize text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold">Sorry, there are no posts for the search term: <?php the_search_query(); ?></h3>
  <?php endif; ?>
</main>

<?php get_footer();