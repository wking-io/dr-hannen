<?php

function with_default( $default, $key, $array ) {
  return array_key_exists( $key, $array ) && ! empty( $array[$key] ) ? $array[$key] : $default;
}

function dh_is_even( $int = 0 ) {
  return $int === 0 || $int % 2 === 0;
}