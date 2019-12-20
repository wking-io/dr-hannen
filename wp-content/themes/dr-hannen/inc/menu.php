<?php

class Main_Menu extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0 , $args=array(), $id = 0 ) {

    $id = $item->ID;
		$title = $item->title;
    $permalink = $item->url;
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $item_classes = array( 'main-menu__item' );

    $link_classes = array( 'text-white', 'hover:underline', 'menu-item-link', 'uppercase', 'font-bold', 'text-lg', 'sm:text-2xl' );

    $output .= '<li id="menu-item-' . esc_attr( $id ) . '" class="' . implode( " ", array_merge( $item_classes, $classes ) ) . '">';
    $output .= '<a class="' . implode( " ", $link_classes ) . '" id="menu-item-' . esc_attr( $id ) . '-link" href="' . esc_attr( $permalink ) . '">';
		$output .= $title;
    $output .= '</a>';
	}

	function end_el(&$output, $item, $depth = 0 , $args=array(), $id = 0 ) {
			$output .= '</li>';
	}
}

class Footer_Menu extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0 , $args=array(), $id = 0 ) {

    $id = $item->ID;
		$title = $item->title;
    $permalink = $item->url;
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $item_classes = array( 'footer-menu__item' );

    $link_classes = array( 'text-white', 'hover:underline', 'menu-item-link', 'uppercase', 'font-bold', 'text-base', 'mx-4', 'tracking-wide', 'mt-4', 'inline-block' );

    $output .= '<li id="menu-item-' . esc_attr( $id ) . '" class="' . implode( " ", array_merge( $item_classes, $classes ) ) . '">';
    $output .= '<a class="' . implode( " ", $link_classes ) . '" id="menu-item-' . esc_attr( $id ) . '-link" href="' . esc_attr( $permalink ) . '">';
		$output .= $title;
    $output .= '</a>';
	}

	function end_el(&$output, $item, $depth = 0 , $args=array(), $id = 0 ) {
			$output .= '</li>';
	}
}