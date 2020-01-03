<?php

/**
 * Template Name: About
 **/

$hero    = get_field('hero');
$about   = get_field('about');
$consult = get_field('consultation');
$survey  = get_field('survey');

get_header(); ?>

<main class="pb-24 lg:pb-32">
  <?php if ( ! empty( $hero ) ) : ?>
    <section class="mt-8 md:mt-12 md:w-9/12 md:ml-auto relative">
      <?php echo wp_get_attachment_image( $hero['headshot'], 'large', false, array( 'class' => 'w-full' ) ); ?>
      <h2 class="w-5/6 mx-auto md:w-full mt-8 md:mt-0 font-extrabold text-3xl sm:text-4xl relative about-heading"><?php echo $hero['heading']; ?></h2>
    </section>
  <?php endif; ?>
  <?php if ( ! empty( $about ) ) : ?>
    <section class="w-5/6 mx-auto md:w-9/12 md:mr-0 mt-16 md:mt-24">
      <div class="md:w-5/6">
        <h3 class="text-xl md:text-3xl lg:text-4xl text-grey-600 font-bold"><?php echo $about['subheading']; ?></h3>
        <div class="dh-two-column mt-8 md:mt-16">
          <?php echo $about['content']; ?>
        </div>
        <?php if ( ! empty( $about['brands'] ) ) : ?>
          <ul class="flex flex-col md:flex-row md:flex-wrap md:-mx-4 mt-8 md:mt-16">
            <?php foreach ( $about['brands'] as $brand ) : ?>
              <li class="aspect-4:3 brand-item md:mx-4 mt-8 overflow-hidden rounded">
                <div aria-hidden class="aspect-content">
                  <?php echo wp_get_attachment_image( $brand['logo'], 'large', false, array( 'class' => 'object-cover w-full h-full' ) ); ?>
                </div>
                <p class="visually-hidden"><?php echo $brand['name']; ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ( ! empty( $consult ) ) : ?>
    <section class="w-5/6 mx-auto md:w-9/12 md:mr-0 mt-24">
    <div class="md:w-5/6">
      <h4 class="uppercase text-brand-cyan font-bold md:text-lg lg:text-xl tracking-wide"><?php echo $consult['subheading']; ?></h4>
      <h3 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight max-w-5xl"><?php echo $consult['heading']; ?></h3>
      <div class="dh-content mt-8 md:mt-16 dh-split-list">
        <?php echo $consult['content']; ?>
      </div>
      <div class="bg-grey-100 mt-3 md:mt-8 p-8 md:p-12 xl:p-16 rounded">
        <h4 class="text-2xl md:text-3xl lg:text-4xl font-extrabold leading-tight"><?php echo $consult['form_box']['heading']; ?></h4>
        <div class="h-1 w-48 bg-brand-cyan mt-6 rounded"></div>
        <div class="dh-content pt-2">
          <?php echo $consult['form_box']['content']; ?>
        </div>
        <button class="bg-gradient text-white font-bold py-3 px-12 mt-8 rounded">Book Appointment Now</button>
      </div>
    </div>
    </section>
  <?php endif; ?>
  <?php if ( ! empty( $survey ) ) : ?>
    <section class="w-5/6 mx-auto md:w-9/12 md:mr-0 mt-24">
    <div class="md:w-5/6">
      <h4 class="uppercase text-brand-cyan font-bold md:text-lg lg:text-xl tracking-wide"><?php echo $survey['subheading']; ?></h4>
      <h3 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-extrabold leading-tight max-w-5xl"><?php echo $survey['heading']; ?></h3>
      <div class="dh-content mt-8 md:mt-16">
        <?php echo $survey['content']; ?>
      </div>
      <div class="bg-grey-100 mt-8 p-8 md:p-12 xl:p-16 rounded">
        <h4 class="text-2xl md:text-3xl lg:text-4xl font-extrabold leading-tight"><?php echo $survey['form_box']['heading']; ?></h4>
        <div class="h-1 w-48 bg-brand-cyan mt-6 rounded"></div>
        <div class="dh-content pt-2">
          <?php echo $survey['form_box']['content']; ?>
        </div>
        <button class="bg-gradient text-white font-bold py-3 px-12 mt-8 rounded">Take Survey</button>
      </div>
    </div>
    </section>
  <?php endif; ?>
</main>

<?php get_footer();