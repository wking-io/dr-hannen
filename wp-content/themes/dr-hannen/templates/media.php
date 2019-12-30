<?php

/**
 * Template Name: Media
 **/

$videos = get_field( 'videos' );
$photos = get_field( 'photos' );
$articles = get_field( 'articles' );
$partners = get_field( 'partners' );

get_header(); ?>

<main>
  <div class="w-5/6 md:w-11/12 mx-auto mt-16 md:mt-24 lg:mt-32">
    <h2><?php the_field('subheading'); ?></h2>
    <h3><?php the_field('heading'); ?></h3>
  </div>
  <?php if ( ! empty( $videos ) ) : ?>
    <div class="flex items-center justify-between w-5/6 md:w-11/12 mx-auto mt-8">
      <h4 class="text-lg font-extrabold">Videos</h4>
      <div class="flex items-center">
        <button class="button-prev h-4">
          <?php dh_display_arrow(); ?>
        </button>
        <button class="button-next h-4 flip">
          <?php dh_display_arrow(); ?>
        </button>
      </div>
    </div>
    <div class="media-slider w-11/12 ml-auto mt-6">
      <?php foreach ( $videos as $video ) : ?>
        <div class="bg-white rounded shadow-md flex items-center p-4">
          <div class="w-4 mr-4"><?php dh_display_play(); ?></div>
          <p class="font-bold"><?php echo $video['title']; ?></p>
        </div>
      <?php endforeach; ?>
      </div>
  <?php endif; ?>
</main>

<?php get_footer();