<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Tao_PR_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function taopr_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'taopr_body_classes' );

/**
 *
 */
function taopr_social_buttons() {
    $id = get_theme_mod('tao_twitter');

    if (!empty($id)) {
        $url = 'http://www.twitter.com/' . $id;
        echo '<a href="' . $url .'" target="_blank">';
        echo '<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>';
        echo '</a>';
    }

    $id = get_theme_mod('tao_facebook');

    if (!empty($id)) {
        $url = 'http://www.facebook.com/' . $id;
        echo '<a href="' . $url .'" target="_blank">';
        echo '<i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>';
        echo '</a>';
    }

    $id = get_theme_mod('tao_youtube');

    if (!empty($id)) {
        $url = 'http://www.youtube.com/' . $id;
        echo '<a href="' . $url .'" target="_blank">';
        echo '<i class="fa fa-youtube fa-2x" aria-hidden="true"></i>';
        echo '</a>';
    }

    $id = get_theme_mod('tao_instagram');

    if (!empty($id)) {
        $url = 'http://www.instagram.com/' . $id;
        echo '<a href="' . $url .'" target="_blank">';
        echo '<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>';
        echo '</a>';
    }
}