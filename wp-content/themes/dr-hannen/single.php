<?php

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="">
    <h2 class="font-serif font-bold text-4xl md:text-5xl leading-tight pt-12 mb-8"><?php echo the_title(); ?></h2>
    <div class="flex items-center text-grey-600 uppercase text-sm md:text-base lg:text-lg">
      <p><?php echo esc_html( get_the_author_meta( 'display_name', $rp['post_author'] ) ); ?></p>
      <span class="h-px w-12 mx-4 bg-grey-600"></span>
      <p><?php echo esc_html( date_i18n( 'M j, Y', strtotime( $rp['post_date'] ) ) ); ?></p>
    </div>
    <div class="general-content pt-16 mb-8"><?php the_content(); ?></div>
  </article>
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer();