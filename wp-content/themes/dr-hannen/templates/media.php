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
    <h2 class="uppercase tracking-wide text-brand-cyan md:text-lg font-bold"><?php the_field('subheading'); ?></h2>
    <h3 class="text-2xl md:text-3xl lg:text-6xl max-w-2xl font-extrabold leading-tight mt-4"><?php the_field('heading'); ?></h3>
  </div>
  <?php if ( ! empty( $videos ) ) : ?>
    <div class="media mt-24">
      <div class="flex items-center justify-between w-5/6 md:w-11/12 mx-auto">
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
      <div class="slider w-11/12 ml-auto mt-4">
        <?php foreach ( $videos as $id => $video ) : ?>
          <button class="bg-white rounded shadow-md flex items-center p-4 m-2" aria-controls="video-<?php echo $id; ?>">
            <div class="w-4 mr-4"><?php dh_display_play(); ?></div>
            <p class="font-bold"><?php echo $video['title']; ?></p>
          </button>
          <aside id="video-<?php echo $id; ?>" class="" data-popup-hidden="true">
            <button class="popup-bg" aria-controls="video-<?php echo $id; ?>"><button>
            <div class=""></div>
          </aside>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>
</main>

<?php get_footer();