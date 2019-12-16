<?php

function with_default( $default, $key, $array ) {
  return array_key_exists( $key, $array ) && ! empty( $array[$key] ) ? $array[$key] : $default;
}