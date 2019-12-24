<?php

/**
 * Template Name: Book
 **/

 $hero           = get_field('hero');
 $selling_points = get_field('selling_points');
 $gallery        = get_field('gallery');
 $testimonials   = get_field('testimonials');

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
  <?php if ( ! empty( $testimonials ) ) : ?>
    <section class="bg-pattern py-24 md:py-32 text-center">
      <div class="w-5/6 max-w-4xl mx-auto">
        <h3 class="uppercase text-brand-cyan font-bold md:text-lg lg:text-xl tracking-wide"><?php echo $testimonials['subheading']; ?></h3>
        <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl text-center font-extrabold leading-tight max-w-3xl mx-auto"><?php echo $testimonials['heading']; ?></h2>
        <div class="testimonial-list flex flex-col md:flex-row md:flex-wrap -mx-4 mt-8">
        <?php foreach ( $testimonials['quotes'] as $testimonial ) : ?>
          <blockquote class="testimonial rounded bg-white p-8 shadow-md text-left mt-8">
            <div class="flex items-center">
              <svg class="text-brand-cyan" width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.5082 18V9.6H16.3092C16.4309 6.72 18.074 4.38 20.8125 3.36V0C15.0313 1.26 11.9885 4.98 11.9885 10.8V18H20.5082ZM8.51974 18V9.6H4.32072C4.44243 6.72 6.08553 4.38 8.82401 3.36V0C3.04276 1.26 0 4.98 0 10.8V18H8.51974Z" class="fill-current" />
              </svg>
              <cite class="not-italic font-bold text-lg block ml-4"><?php echo $testimonial['name']; ?></cite>
            </div>
            <p class="mt-4"><?php echo $testimonial['quote']; ?></p>
          </blockquote>
        <?php endforeach; ?>
        </div>
        <div class="text-center mt-16">
          <a class="py-3 px-12 bg-gradient-dark font-bold rounded inline-block text-white" href="<?php echo $testimonials['button']['link']; ?>"><?php echo $testimonials['button']['text']; ?></a>
        </div>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php get_footer();