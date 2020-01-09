<?php

function with_default( $default, $key, $array ) {
  return array_key_exists( $key, $array ) && ! empty( $array[$key] ) ? $array[$key] : $default;
}

function dh_is_even( $int = 0 ) {
  return $int === 0 || $int % 2 === 0;
}

function dh_category_to_color( $cat = 'body' ) {
  switch ( $cat ) {
    case 'body':
      return 'brand-cyan';
      break;
    case 'soul':
      return 'brand-blue';
      break;
    case 'spirit':
      return 'brand-navy';
      break;
    default:
      return 'brand-cyan';
      break;
  }
}

function dh_get_first_category( $cats = array() ) {
  if ( ! empty( $cats ) ) : foreach ( $cats as $cat ) :
    if ( 0 === $cat->parent ) :
      return $cat->name;
    endif;
  endforeach; endif;

  return '';
}

function dh_get_main_category( $parent, $cats = array() ) {
  if ( ! empty( $cats ) ) : foreach ( $cats as $cat ) :
    if ( $cat->parent === $parent->term_id ) :
      return strtolower( $cat->name );
    endif;
  endforeach; endif;

  return strtolower( $parent->name );
}

function dh_get_parent_category( $category ) {
  if ( ! empty( $category ) ) :
    $cat_obj = get_category( get_cat_ID( $category ) );
    $parent = get_category( $cat_obj->parent );

    if ( ! empty( $parent ) && ! is_wp_error( $parent ) ) :
      return dh_get_parent_category( $parent->name );
    else :
      return strtolower( $category );
    endif;
  endif;
}

function dh_make_attrs ( $attrs = array() ) {
  $result = array();
  foreach ( $attrs as $k => $v ) :
    $result[] = $k . '="' . esc_attr( $v ) . '"';
  endforeach;

  return implode( ' ', $result );
}

function dh_get_post_categories( $categories = array() ) {
  $children = array();
  $parents = array();

  foreach ( $categories as $cat ) :
    if ( ! empty( $cat->parent ) ) :
      $children[ dh_get_parent_category( $cat->name ) ] = $cat->name;
    else :
      $parents[ strtolower( $cat->name ) ] = $cat->name;
    endif;
  endforeach;

  return ! empty( $children ) ? $children : $parents;
}