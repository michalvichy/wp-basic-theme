<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

/**
 * Remove the slug from published post permalinks.
 */
function custom_remove_cpt_slug( $post_link, $post, $leavename ) {

    if ( 'edition' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter('post_type_link', __NAMESPACE__ . '\\custom_remove_cpt_slug', 10, 3);

/**
 * Some hackery to have WordPress match postname to any of our public post types
 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
 * Typically core only accounts for posts and pages where the slug is /post-name/
 */
function custom_parse_request_tricksy( $query ) {

    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;

    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'edition', 'page' ) );
    }
}
add_action('pre_get_posts', __NAMESPACE__ . '\\custom_parse_request_tricksy');

function insert_overlay($name, $fields) {
    if (!empty($fields['edition_'.$name])) {
        get_template_part('templates/overlays/'.$name);
    }
}
