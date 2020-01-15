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

  <div class="w-5/6 md:w-11/12 max-w-6xl mx-auto mt-16 md:mt-24 lg:mt-32">
    <h2 class="uppercase tracking-wide text-brand-cyan md:text-lg font-bold"><?php the_field('subheading'); ?></h2>
    <h3 class="text-2xl md:text-3xl lg:text-6xl max-w-2xl font-extrabold leading-tight mt-4"><?php the_field('heading'); ?></h3>
  </div>

  <?php if ( ! empty( $photos ) ) : ?>
    <div class="media--photo mt-16 md:mt-24">
      <div class="flex items-center justify-between w-5/6 md:w-11/12 max-w-6xl mx-auto">
        <h4 class="text-lg md:text-xl font-extrabold">Photos</h4>
        <div class="flex items-center">
          <button class="button-prev h-4">
            <?php dh_display_arrow(); ?>
          </button>
          <button class="button-next h-4 flip">
            <?php dh_display_arrow(); ?>
          </button>
        </div>
      </div>
      <div class="slider w-5/6 md:w-11/12 max-w-6xl mx-auto mt-4">
        <?php foreach ( $photos as $id => $photo ) : ?>
          <div class="bg-white rounded shadow-md m-2 aspect-5:3 photo-card overflow-hidden">
            <div class="aspect-content">
              <?php echo wp_get_attachment_image( $photo['ID'], 'large', false, array( 'class' => 'w-full h-full object-cover') ); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ( ! empty( $videos ) ) : ?>
    <div class="media--video mt-16 md:mt-24">
      <div class="flex items-center justify-between w-5/6 md:w-11/12 max-w-6xl mx-auto">
        <h4 class="text-lg md:text-xl font-extrabold">Videos</h4>
        <div class="flex items-center">
          <button class="button-prev h-4">
            <?php dh_display_arrow(); ?>
          </button>
          <button class="button-next h-4 flip">
            <?php dh_display_arrow(); ?>
          </button>
        </div>
      </div>
      <div class="slider w-5/6 md:w-11/12 max-w-6xl mx-auto mt-4">
        <?php foreach ( $videos as $id => $video ) : ?>
          <div class="bg-white rounded shadow-md m-2 media-card overflow-hidden">
            <button class="flex bg-white text-left" data-popup-control aria-controls="video-<?php echo $id; ?>" title="<?php echo $video['title']; ?>">
              <div class="flex items-center w-12 p-4 bg-gradient flex-shrink-0"><?php dh_display_play(); ?></div>
              <p class="font-bold p-4"><?php echo $video['title']; ?></p>
            </button>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php foreach ( $videos as $id => $video ) : ?>
      <aside id="video-<?php echo $id; ?>" class="fixed inset-0 popup flex items-center justify-center" data-popup-hidden="true">
        <button class="absolute inset-0 w-full h-full popup-bg" data-popup-control aria-controls="video-<?php echo $id; ?>"></button>
        <div class="relative z-10 aspect-16:9 w-5/6">
          <div class="aspect-content">
            <?php echo $video['video']; ?>
          </div>
        </div>
      </aside>
    <?php endforeach; ?>
  <?php endif; ?>

  <?php if ( ! empty( $articles ) ) : ?>
    <div class="media--article mt-16 md:mt-24">
      <div class="flex items-center justify-between w-5/6 md:w-11/12 max-w-6xl mx-auto">
        <h4 class="text-lg md:text-xl font-extrabold">Articles</h4>
        <div class="flex items-center">
          <button class="button-prev h-4">
            <?php dh_display_arrow(); ?>
          </button>
          <button class="button-next h-4 flip">
            <?php dh_display_arrow(); ?>
          </button>
        </div>
      </div>
      <div class="slider w-5/6 md:w-11/12 max-w-6xl mx-auto mt-4">
        <?php foreach ( $articles as $id => $article ) : ?>
          <div class="bg-white rounded shadow-md m-2 media-card overflow-hidden">
            <a class="flex" href="<?php echo $article['link']; ?>" title="<?php echo $article['title']; ?>">
              <div class="flex items-center w-12 p-4 bg-gradient flex-shrink-0"><?php dh_display_link(); ?></div>
              <p class="font-bold p-4"><?php echo $article['title']; ?></p>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ( ! empty( $partners ) ) : ?>
    <div class="w-5/6 md:w-11/12 max-w-6xl mx-auto mt-16 md:mt-24 pb-24 md:pb-32">
      <h4 class="text-lg md:text-xl font-extrabold">Partners</h4>
      <ul class="flex flex-wrap -mx-8 md:-mx-12">
        <?php foreach ( $partners as $partner ) : ?>
          <li class="aspect-4:3 overflow-hidden mx-8 md:mx-12 partner mt-12">
            <div class="aspect-content">
              <p class="visually-hidden"><?php echo $partner['name']; ?></p>
              <?php echo wp_get_attachment_image( $partner['logo'], 'large', false, array( 'class' => 'w-full h-full object-cover', 'aria-hidden' => 'true') ); ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>


</main>

<?php get_footer();