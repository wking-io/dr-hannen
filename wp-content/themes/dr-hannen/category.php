<?php
$parent = get_term( get_queried_object_id() );

$categories = get_categories(
  array( 'parent' => $cat )
);

$children = array(
  'default' => 'Filter by subcategory',
);

foreach ( $categories as $child ) :
  $children[get_category_link( $child->term_id )] = $child->name;
endforeach;

$featured = new WP_Query( array(
  'category_name' => $parent->name,
  'posts_per_page' => 1,
  'order' => 'ASC',
  'orderby' => 'menu_order'
) );

get_header(); ?>

<main>
  <?php if ( have_posts() ) : ?>
    <?php if ( $featured->have_posts() && ! is_paged() ) : ?>
      <section class="w-11/12 mx-auto rounded overflow-hidden mt-8 dh-shadow">
        <?php while ( $featured->have_posts() ) : $featured->the_post(); ?>
          <div class="featured-post featured-post--<?php echo strtolower( $parent->name ); ?> relative md:aspect-16:9 text-white">
            <div class="absolute inset-0 top-0 left-0">
              <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
              <div class="featured__overlay absolute inset-0 top-0 left-0"></div>
            </div>
            <div class="md:aspect-content p-6 md:p-8 lg:p-16 flex flex-col items-start relative h-full w-full md:w-4/5 lg:w-3/5 max-w-3xl">
              <h3 class="uppercase font-bold tracking-wide text-lg lg:text-xl flex-1"><?php echo dh_get_main_category( $parent, get_the_category( get_the_ID() ) ); ?></h3>
              <h2 class="font-extrabold text-2xl md:text-3xl lg:text-4xl xl:text-5xl lg:mt-12"><?php the_title(); ?></h2>
              <div class="mt-8 leading-relaxed lg:text-lg xl:text-xl"><?php the_excerpt(); ?></div>
              <p class="flex-1 mt-12"><a class="inline-block border border-white rounded py-3 px-12 font-bold" href="<?php the_permalink(); ?>">Read This Article</a></p>
            </div>
          </div>
        <?php endwhile; ?>
      </section>
    <?php endif; ?>
    <section class="w-11/12 mx-auto <?php echo is_paged() ? 'mt-16' : 'mt-16 md:mt-24'; ?> pb-24">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <h3 class="capitalize text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold">All Articles On <?php echo $parent->name; ?> Health</h3>
        <?php if ( ! empty( $categories ) ) : ?>
          <?php dh_display_select( array(
            'options' => $children,
            'classes' => 'w-full mt-8 md:mt-0 md:w-5/12 lg:w-3/12',
            'id' => 'category-select',
            'use_key' => true,
            'selected' => 'default'
          ) ); ?>
        <?php endif; ?>
      </div>
      <ul class="flex flex-wrap md:-mx-4 md:mt-4">
        <?php while ( have_posts() ) : the_post();
          $category_name = dh_get_main_category( $parent, get_the_category() );
          dh_display_post( $category_name, get_the_ID() );
        endwhile; ?>
      </ul>
      <div class="post-nav flex items-center justify-between mt-12 p-0">
        <?php next_posts_link( 'Older Articles' ); ?>
        <?php previous_posts_link( 'Newer Articles' ); ?>
      </div>
    </section>
  <?php else : ?>
    <p>Sorry, there are no posts for this category.</p>
  <?php endif; ?>
</main>

<?php get_footer();