<?php

function dh_category_query ( $category_name = '' ) {
  return array(
    'category_name' => $category_name,
    'posts_per_page' => 6,
  );
}

$post_id = get_option('page_for_posts');

$body = get_field('body', $post_id);
$soul = get_field('soul', $post_id);
$spirit = get_field('spirit', $post_id);

$index = array(
  'body'      => array(
    'heading' => $body['heading'],
    'content' => $body['content'],
    'image'   => $body['image'],
    'custom'  => $body['custom_feature'],
    'posts'   => $body['custom_feature'] ? $body['featured_posts'] : new WP_Query( dh_category_query( 'body' ) ),
  ),
  'soul'      => array(
    'heading' => $soul['heading'],
    'content' => $soul['content'],
    'image'   => $soul['image'],
    'custom'  => $soul['custom_feature'],
    'posts'   => $soul['custom_feature'] ? $soul['featured_posts'] : new WP_Query( dh_category_query( 'soul' ) ),
  ),
  'spirit'    => array(
    'heading' => $spirit['heading'],
    'content' => $spirit['content'],
    'image'   => $spirit['image'],
    'custom'  => $spirit['custom_feature'],
    'posts'   => $spirit['custom_feature'] ? $spirit['featured_posts'] : new WP_Query( dh_category_query( 'spirit' ) ),
  ),
);

get_header(); ?>

<main>
  <?php foreach ( $index as $category_name => $category ) : ?>
    <section class="flex flex-col md:flex-row py-8 md:pr-8 w-5/6 mx-auto md:w-full">
      <div class="text-white category-summary category-summary--<?php echo $category_name; ?> relative flex-shrink-0 w-full md:max-w-sm rounded md:rounded-r overflow-hidden mr-8">
        <div class="absolute inset-0 top-0 left-0">
          <?php echo wp_get_attachment_image( $category['image'], 'medium_large', false, array( 'class' => 'w-full h-full object-cover') ); ?>
          <div class="category__overlay absolute inset-0 top-0 left-0"></div>
        </div>
        <div class="p-8 flex flex-col items-start relative h-full">
          <h3 class="uppercase font-bold tracking-wide text-lg"><?php echo $category_name; ?></h3>
          <h2 class="font-extrabold text-2xl sm:text-3xl md:text-2xl mt-12 md:mt-48"><?php echo $category['heading']; ?></h2>
          <div class="mt-8 leading-relaxed"><?php echo $category['content']; ?></div>
          <p class="mt-16"><a class="inline-block border border-white rounded py-3 px-12 font-bold" href="<?php echo get_category_link( get_cat_ID( $category_name ) ); ?>">View All Articles</a></p>
        </div>
      </div>
      <?php if ( $category['custom'] ) : ?>
        <?php if ( ! empty( $category['posts'] ) ) : ?>
          <ul class="flex flex-col md:flex-row flex-wrap md:-mx-4 md:-mt-8">
            <?php foreach ( $category['posts'] as $the ) :
              $parent = get_category( get_cat_ID( $category_name ) );
              $child = dh_get_main_category( $parent, get_the_category( $the['post'] ) );
              dh_display_post( $child, $the['post'] );
            endforeach; ?>
          </ul>
        <?php endif; ?>
      <?php else : ?>
        <?php if ( $category['posts']->have_posts() ) : ?>
          <ul class="flex flex-col md:flex-row flex-wrap md:-mx-4 md:-mt-8">
            <?php while ( $category['posts']->have_posts() ) : $category['posts']->the_post();
              $parent = get_category( get_cat_ID( $category_name ) );
              $child = dh_get_main_category( $parent, get_the_category( $the['post'] ) );
              dh_display_post( $child, get_the_ID() );
            endwhile; ?>
          </ul>
        <?php endif; ?>
      <?php endif; ?>
    </section>
  <?php endforeach; ?>
</main>

<?php get_footer();