<?php

/**
 * Template Name: TV
 **/

 $hero           = get_field('hero');
 $selling_points = get_field('selling_points');
 $gallery        = get_field('gallery');
 $show_times     = get_field('show_times');

get_header(); ?>

<main>
  <section>
    <?php if ( ! empty( $hero ) ) : ?>
      <?php dh_display_triangles( 'absolute top-0 left-0 -ml-24 w-full md:w-9/12' ); ?>
      <div class="relative z-10 w-5/6 md:w-11/12 mx-auto flex flex-col md:flex-row-reverse items-center py-8 md:py-12 lg:py-24">
        <div class="aspect-3:2 w-full md:w-6/12 flex-shrink-0 md:ml-12 lg:ml-16">
          <div class="aspect-content dh-shadow rounded overflow-hidden">
            <?php echo wp_get_attachment_image( $hero['image'], 'medium_large', false, array( 'class' => 'w-full h-full object-cover') ); ?>
          </div>
        </div>
        <div class="mt-8 md:mt-0 w-full">
          <div class="w-full md:max-w-lg mx-auto">
            <h3 class="text-brand-cyan text-base lg:text-xl uppercase tracking-wide font-bold"><?php echo $hero['subheading']; ?></h3>
            <h2 class="mt-2 font-extrabold text-3xl lg:text-5xl leading-tight"><?php echo $hero['heading']; ?></h2>
            <div class="dh-content text-grey-500"><?php echo $hero['content']; ?></div>
            <a class="mt-8 bg-gradient-dark py-3 px-12 text-white font-bold inline-block rounded" href="<?php echo $hero['button']['link']; ?>"><?php echo $hero['button']['text']; ?></a>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if ( ! empty( $selling_points ) ) : ?>
      <div class="w-5/6 mx-auto mt-8 md:mt-16 lg:mt-24">
        <div class="flex flex-col md:flex-row md:-mx-8">
          <?php foreach ( $selling_points as $point ) : ?>
            <div class="selling-point mt-8 md:mt-0 md:mx-8">
              <h3 class="font-extrabold text-xl lg:text-2xl"><?php echo $point['heading']; ?></h3>
              <div class="mt-4 text-grey-500 dh-content"><?php echo $point['content']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>
  </section>
  <?php if ( ! empty( $gallery ) ) : ?>
    <section>
      <div id="marquee" class="marquee mt-24">
        <?php foreach ( $gallery as $photo ) : ?>
          <?php echo wp_get_attachment_image( $photo['ID'], 'medium_large' ); ?>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ( ! empty( $show_times ) ) : ?>
    <section class="bg-pattern py-24 md:py-32 text-center">
      <div class="w-5/6 max-w-4xl mx-auto">
        <h3 class="uppercase text-brand-cyan font-bold md:text-lg lg:text-xl tracking-wide"><?php echo $show_times['subheading']; ?></h3>
        <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl text-center font-extrabold leading-tight"><?php echo $show_times['heading']; ?></h2>
        <div class="show-time-list flex items-center justify-center flex-col md:flex-row mt-12">
        <?php foreach ( $show_times['times'] as $time ) : ?>
          <div class="show-time px-8 flex-1">
            <p class="text-xl md:text-2xl font-bold"><?php echo $time['day']; ?></p>
            <p><?php echo $time['time']; ?></p>
          </div>
        <?php endforeach; ?>
        </div>
        <div class="text-center mt-16">
          <a class="py-3 px-12 bg-gradient-dark font-bold rounded inline-block text-white" href="<?php echo $show_times['button']['link']; ?>"><?php echo $show_times['button']['text']; ?></a>
        </div>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php get_footer();