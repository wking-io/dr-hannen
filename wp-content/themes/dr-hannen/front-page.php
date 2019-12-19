<?php

get_header();

$hero = get_field( 'hero' );
$cta = get_field( 'cta' );
$clinic = get_field( 'clinic' );
$appt = get_field( 'appointment' );
$blog = get_field( 'blog' );

$clinic['page'] = home_url( 'clinic' );
$appt['page'] = home_url( 'about#appointment' );

?>

<main>
  <?php if ( ! empty( $hero ) ) : ?>
    <section class="w-11/12 mx-auto rounded overflow-hidden mt-8">
      <div class="hero-video aspect-16:9 relative" data-video-state="">
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
                "class" => "hero-video-frame"
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
  <?php if ( ! empty( $cta ) ) : ?>
    <section class="w-11/12 mx-auto">
    </section>
  <?php endif; ?>
  <?php if ( ! empty( $clinic ) && ! empty( $appt ) ) : ?>
    <section class="">
      <div class="w-5/6 mx-auto">
        <?php foreach ( array( $clinic, $appt ) as $callout ) : ?>
          <div>
            <?php wp_get_attachment_image( $callout['image'], 'medium', false, array( 'class' => 'w-full block' ) ); ?>
            <div>
              <h3><?php echo $callout['heading']; ?></h3>
              <p><?php echo $callout['content']; ?></p>
              <a href="<?php echo $callout['page']; ?>"><?php echo $callout['link']; ?></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ( ! empty( $blog ) ) : ?>
    <section class="w-11/12 mx-auto">
    </section>
  <?php endif; ?>
</main>

<?php get_footer();