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
    <section class="w-11/12 mx-auto">
      <?php 
        echo cl_video_tag( $tb_hero_content, 
          array(
            "loop" => true,
            "autoplay" => true,
            "muted" => true,
            "preload" => true,
            "fallback_content" => "Your browser does not support HTML5 video tags",
            "width" => 1000,
            "crop" => "fit",
          )
        ); 
      ?>
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