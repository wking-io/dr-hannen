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