<?php

/**
 * Template Name: Clinics
 **/

$clinics = get_field('clinics');

get_header(); ?>

<main class="w-5/6 mx-auto max-w-4xl mt-16 md:mt-24 pb-24 md:pb-32 lg:pb-40">
  <h2 class="mt-3 text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">Find a clinic near you</h2>
  <?php if ( ! empty ( $clinics ) ) : ?>
    <ul class="mt-8 md:mt-16">
      <?php foreach ( $clinics as $clinic ) : ?>
        <li class="mt-8 flex flex-col md:flex-row rounded overflow-hidden bg-white shadow-md">
          <div class="aspect-5:3 md:aspect-none clinic-image">
            <?php echo wp_get_attachment_image( $clinic['image'], 'medium_large', false, array( 'class' => 'aspect-content h-full w-full object-cover' ) ); ?>
          </div>
          <div class="p-8 flex flex-col justify-center">
            <p class="uppercase text-brand-cyan font-bold tracking-wide text-sm md:text-base"><?php echo $clinic['location']; ?></p>
            <h3 class="text-lg md:text-2xl font-bold mt-1"><?php echo $clinic['name']; ?></h3>
            <p class="text-sm md:text-base flex items-center mt-6"><span class="hidden md:block font-bold mr-2">A:</span><span><?php echo $clinic['address']; ?></span></p>
            <p class="text-sm md:text-base flex items-center mt-4 md:mt-2"><span class="hidden md:block font-bold mr-2">P:</span><span><?php echo $clinic['phone_number']; ?></span></p>
            <p class="text-sm md:text-base mt-6"><a class="font-bold underline hover:no-underline uppercase tracking-wide" href="<?php echo $clinic['contact_link']; ?>">Contact Clinic</a></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</main>

<?php get_footer();