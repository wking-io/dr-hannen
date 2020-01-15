<?php

get_header();

$hero = get_field( 'hero' );
$ctas = get_field( 'cta' );
$clinic = get_field( 'clinic' );
$appt = get_field( 'appointment' );
$blog = get_field( 'blog' );

$clinic['page'] = home_url( 'clinic' );
$appt['page'] = home_url( 'about#appointment' );

if ( ! empty( $blog ) ) :
  $previews = array(
    'body'  => $blog['body_choose_custom_post'],
    'soul'    => $blog['soul_choose_custom_post'],
    'spirit' => $blog['spirit_choose_custom_post'],
  );

  foreach ( $previews as $category => $is_custom ) :
    if ( $is_custom ) :
      $previews[$category] = $blog[$category . '_featured_post'];
    else :
      $query = new WP_Query( array(
        'posts_per_page' => 1,
        'category_name' => $category,
        'no_found_rows' => false,
        'fields' => 'ids',
      ) );
    
      if ( $query->have_posts() ) {
        $previews[$category] = end($query->posts);
      }
    endif;
  endforeach;


endif;

?>

<main>
  <?php if ( ! empty( $hero ) ) : ?>
    <section class="w-11/12 mx-auto rounded overflow-hidden mt-8 dh-shadow">
      <div class="hero-video relative md:aspect-16:9" data-video-state="">
        <div class="md:aspect-content">
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
                "class" => "hidden md:block hero-video-frame w-full"
              )
            ); 
          ?>
          <?php echo wp_get_attachment_image( $hero['background'], 'large', false, array( 'class' => 'hero-video-img object-cover w-full h-full absolute inset-0 z-10 hidden md:block' ) ); ?><?php echo wp_get_attachment_image( $hero['background_mobile'], 'large', false, array( 'class' => 'hero-video-img object-cover w-full h-full absolute inset-0 z-10 md:hidden' ) ); ?>
          <div class="hero-video-after md:opacity-0 text-white pt-40 pb-12 px-8 md:p-12 lg:p-20 xl:py-32 flex flex-col items-start justify-end relative md:absolute inset-0 z-20">
            <h3 class="hidden md:block font-bold text-sm md:text-xl uppercase tracking-wide"><?php echo $hero['subheading']; ?></h3>
            <h2 class="font-extrabold text-3xl md:text-4xl lg:text-5xl xl:text-6xl mt-4 md:mt-1 leading-tight"><?php echo $hero['heading']; ?></h2>
            <p class="md:text-xl mt-4 md:mt-8"><?php echo $hero['show_times']; ?></p>
            <a class="text-sm md:text-base bg-gradient font-bold py-3 px-12 rounded mt-12 md:mt-6" href="<?php echo $hero['button']['link']; ?>"><?php echo $hero['button']['text']; ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
    <section class="pb-8 md:py-24">
      <?php if ( ! empty( $ctas ) ) : foreach ( $ctas as $count => $cta ) : ?>
        <div class="relative">
          <?php dh_display_triangles( dh_is_even( $count ) ? 'triangles triangles--left' : 'triangles triangles--right' ); ?>
          <div class="relative z-10 w-11/12 mx-auto flex flex-col <?php echo dh_is_even( $count ) ? 'md:flex-row' : 'md:flex-row-reverse'; ?> items-center py-8 md:py-12 lg:py-24">
            <div class="aspect-3:2 w-full md:w-6/12 flex-shrink-0 <?php echo dh_is_even( $count ) ? 'md:mr-12 lg:mr-16' : 'md:ml-12 lg:ml-16'; ?>">
              <div class="aspect-content dh-shadow rounded overflow-hidden">
                <?php echo wp_get_attachment_image( $cta['image'], 'medium_large', false, array( 'class' => 'w-full h-full object-cover') ); ?>
              </div>
            </div>
            <div class="mt-8 md:mt-0 w-full">
              <div class="w-full md:max-w-lg mx-auto">
                <p class="text-brand-cyan text-base lg:text-xl uppercase tracking-wide font-bold"><?php echo $cta['subheading']; ?></p>
                <h4 class="mt-2 font-extrabold text-3xl lg:text-5xl leading-tight"><?php echo $cta['heading']; ?></h4>
                <div class="dh-content text-grey-500"><?php echo $cta['content']; ?></div>
                <a class="mt-8 bg-gradient-dark py-3 px-12 text-white font-bold inline-block rounded" href="<?php echo $cta['button']['link']; ?>"><?php echo $cta['button']['text']; ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; endif; ?>
    </section>
    <section class="bg-pattern md:mt-16">
      <?php if ( ! empty( $clinic ) && ! empty( $appt ) ) : ?>
        <div class="w-5/6 mx-auto max-w-4xl pt-4 pb-24 md:py-24">
          <div class="w-full md:w-auto flex flex-col md:flex-row mx-auto md:-mx-8">
            <?php foreach ( array( $clinic, $appt ) as $callout ) : ?>
              <div class="callout rounded overflow-hidden shadow-md bg-white mt-8">
                <?php echo wp_get_attachment_image( $callout['image'], 'large', false, array( 'class' => 'w-full block' ) ); ?>
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
        <div class="mt-8 md:mt-24">
          <h2 class="text-3xl md:text-4xl lg:text-5xl text-center w-5/6 mx-auto max-w-4xl font-extrabold leading-tight"><?php echo $blog['heading']; ?></h2>
          <div class="featured-articles mt-16 md:mt-20">
            <?php foreach ( $previews as $category => $post_id ) : ?>
              <div class="relative article article--<?php echo $category; ?>">
                <div class="article__background absolute inset-0">
                  <?php echo get_the_post_thumbnail( $post_id, 'medium_large', array( 
                    'class' => 'article__background-image w-full h-full object-cover',
                  ) ); ?>
                </div>
                <div class="article__content h-full relative z-10 text-white px-8 py-12 flex flex-col justify-end items-start">
                  <h4 class="text-2xl lg:text-3xl font-extrabold leading-tight"><?php echo get_the_title( $post_id ); ?></h4>
                  <p class="article__excerpt text-sm md:text-base leading-relaxed mt-8"><?php echo get_the_excerpt( $post_id ); ?></p>
                  <a class="text-sm xl:text-base border border-white bg-transparent font-bold py-3 px-12 inline-block rounded mt-8" href="<?php echo get_the_permalink( $post_id ); ?>">Read More</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </section>
</main>

<?php get_footer();