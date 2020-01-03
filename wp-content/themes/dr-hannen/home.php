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
  'body' => array(
    'heading' => $body['heading'],
    'content' => $body['content'],
    'custom' => $body['custom_feature'],
    'posts' => $body['custom_feature'] ? $body['featured_posts'] : new WP_Query( dh_category_query( 'body' ) ),
  ),
  'soul' => array(
    'heading' => $soul['heading'],
    'content' => $soul['content'],
    'custom' => $soul['custom_feature'],
    'posts' => $soul['custom_feature'] ? $soul['featured_posts'] : new WP_Query( dh_category_query( 'soul' ) ),
  ),
  'spirit' => array(
    'heading' => $spirit['heading'],
    'content' => $spirit['content'],
    'custom' => $spirit['custom_feature'],
    'posts' => $spirit['custom_feature'] ? $spirit['featured_posts'] : new WP_Query( dh_category_query( 'spirit' ) ),
  ),
);

get_header(); ?>

<main>
  <?php foreach ( $index as $category_name => $category ) : ?>
    <section>
      <div>
        <h2><?php echo $category['heading']; ?></h2>
      </div>
      <?php if ( $category['custom'] ) : ?>
        <?php if ( ! empty( $category['posts'] ) ) : ?>
          <ul>
            <?php foreach ( $category['posts'] as $the ) : ?>
              <?php dh_display_post( $category_name, $the['post'] ); ?>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      <?php else : ?>
        <?php if ( $category['posts']->have_posts() ) : ?>
          <ul>
            <?php while ( $category['posts']->have_posts() ) : $category['posts']->the_post(); ?>
              <?php dh_display_post( $category_name, get_the_ID() ); ?>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      <?php endif; ?>
    </section>
  <?php endforeach; ?>
</main>

<?php get_footer();