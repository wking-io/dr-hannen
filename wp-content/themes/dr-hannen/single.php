<?php


$parent = get_category( get_cat_ID( $category_name ) );
$categories = dh_get_post_categories( get_the_category() );

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article class="w-5/6 max-w-3xl mx-auto mt-24">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="aspect-5:3 rounded overflow-hidden">
        <?php the_post_thumbnail( 'medium_large', array( 'class' => 'absolute inset-0 w-full h-full object-cover' ) ); ?>
      </div>
    <?php endif; ?>
    <div class="flex items-center justify-between mt-12">
      <?php if ( ! empty( $categories ) ) : ?>
        <div class="flex items-center">
          <?php foreach ( $categories as $parent => $category_name ) : ?>
            <p class="bg-<?php echo dh_category_to_color( $parent ); ?> rounded dh-shadow z-10 text-white uppercase font-bold px-2 py-1 leading-tight text-sm tracking-wide"><?php echo $category_name; ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <div class="uppercase tracking-wide font-bold flex items-center">
        <p>Share:</p>
        <ul class="flex items-center">
          <li class="h-4 ml-4"><a href="" class="text-black hover:text-brand-cyan"><?php dh_display_twitter(); ?></a></li>
          <li class="h-4 ml-4"><a href="" class="text-black hover:text-brand-cyan"><?php dh_display_insta(); ?></a></li>
          <li class="h-4 ml-4"><a href="" class="text-black hover:text-brand-cyan"><?php dh_display_facebook(); ?></a></li>
          <li class="h-4 ml-4"><a href="" class="text-black hover:text-brand-cyan"><?php dh_display_pinterest(); ?></a></li>
        </ul>
      </div>
    </div>
    <h2 class="font-serif font-bold text-4xl md:text-5xl leading-tight mt-6"><?php echo the_title(); ?></h2>
    <div class="flex items-center text-grey-400 font-semibold text-sm md:text-base lg:text-lg mt-6">
      <p class="flex items-center mr-8">
        <span class="h-4"><?php dh_display_author(); ?></span>
        <span class="ml-3 text-grey-900"><?php the_author_meta( 'display_name' ); ?></span>
      </p>
      <p class="flex items-center">
        <span class="h-4"><?php dh_display_date(); ?></span>
        <span class="ml-3 text-grey-900"><?php the_date( 'M j, Y' ); ?></span>
      </p>
    </div>
    <div class="dh-content pt-8 mb-8"><?php the_content(); ?></div>
  </article>
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer();