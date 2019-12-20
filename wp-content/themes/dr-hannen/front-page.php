<?php

get_header();

$hero = get_field( 'hero' );
$ctas = get_field( 'cta' );
$clinic = get_field( 'clinic' );
$appt = get_field( 'appointment' );
$blog = get_field( 'blog' );

$clinic['page'] = home_url( 'clinic' );
$appt['page'] = home_url( 'about#appointment' );

?>

<main>
  <?php if ( ! empty( $hero ) ) : ?>
    <section class="w-11/12 mx-auto rounded overflow-hidden mt-8 dh-shadow">
      <div class="hero-video aspect-16:9" data-video-state="">
        <div class="aspect-content">
          <?php 
            echo cl_video_tag( $hero['video'], 
              array(
                "autoplay" => true,
                "muted" => true,
                "preload" => true,
                "fallback_content" => "Your browser does not support HTML5 video tags",
                "width" => 1440,
                "crop" => "fit",
                "id" => "hero-video",
                "class" => "hero-video-frame w-full"
              )
            ); 
          ?>
          <?php echo wp_get_attachment_image( $hero['background'], 'large', false, array( 'class' => 'hero-video-img object-cover w-full h-full absolute inset-0 z-10' ) ); ?>
          <div class="hero-video-after opacity-0 text-white p-12 flex flex-col items-start justify-end absolute inset-0 z-20">
            <h3 class="font-bold md:text-xl uppercase tracking-wide"><?php echo $hero['subheading']; ?></h3>
            <h2 class="font-extrabold text-3xl md:text-4xl lg:text-5xl xl:text-6xl mt-1"><?php echo $hero['heading']; ?></h2>
            <p class="md:text-xl mt-8"><?php echo $hero['show_times']; ?></p>
            <a class="bg-gradient font-bold py-3 px-12 rounded mt-6" href="<?php echo $hero['button']['link']; ?>"><?php echo $hero['button']['text']; ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
    <section class="py-24">
      <?php if ( ! empty( $ctas ) ) : foreach ( $ctas as $count => $cta ) : ?>
        <div class="relative">
          <?php dh_display_triangles( dh_is_even( $count ) ? 'triangles triangles--left' : 'triangles triangles--right' ); ?>
          <div class="relative z-10 w-11/12 mx-auto flex flex-col <?php echo dh_is_even( $count ) ? 'md:flex-row' : 'md:flex-row-reverse'; ?> items-center py-24">
            <div class="aspect-3:2 w-6/12 flex-shrink-0 <?php echo dh_is_even( $count ) ? 'md:mr-12 lg:mr-16' : 'md:ml-12 lg:ml-16'; ?>">
              <div class="aspect-content dh-shadow rounded overflow-hidden">
                <?php echo wp_get_attachment_image( $cta['image'], 'medium_large', false, array( 'class' => 'w-full h-full object-cover') ); ?>
              </div>
            </div>
            <div class="mt-8 md:mt-0">
              <p class="text-brand-cyan text-xl uppercase tracking-wide font-bold"><?php echo $cta['subheading']; ?></p>
              <h4 class="mt-2 font-extrabold text-2xl md:text-3xl lg:text-5xl leading-tight"><?php echo $cta['heading']; ?></h4>
              <div class="dh-content text-grey-500"><?php echo $cta['content']; ?></div>
              <a class="mt-8 bg-gradient-dark py-3 px-12 text-white font-bold inline-block rounded" href="<?php echo $cta['button']['link']; ?>"><?php echo $cta['button']['text']; ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; endif; ?>
    </section>
    <section class="bg-pattern mt-32">
      <?php if ( ! empty( $clinic ) && ! empty( $appt ) ) : ?>
        <div class="w-5/6 mx-auto max-w-4xl py-24">
          <div class="flex flex-col md:flex-row -mx-8">
            <?php foreach ( array( $clinic, $appt ) as $callout ) : ?>
              <div class="callout rounded overflow-hidden dh-shadow bg-white">
                <?php echo wp_get_attachment_image( $callout['image'], 'medium', false, array( 'class' => 'w-full block' ) ); ?>
                <div class="p-8">
                  <h3 class="text-xl font-bold"><?php echo $callout['heading']; ?></h3>
                  <div class="dh-content -mt-2 text-sm"><?php echo $callout['content']; ?></div>
                  <a class="underline font-bold uppercase tracking-wide inline-block mt-6 text-sm" href="<?php echo $callout['page']; ?>"><?php echo $callout['link']; ?></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if ( ! empty( $blog ) ) : ?>
        <div></div>
      <?php endif; ?>
    </section>
</main>

<?php get_footer();