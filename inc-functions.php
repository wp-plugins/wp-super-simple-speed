<?php

function start_cleanup() {
  add_action('init', 'cleanup_head');
} 

function cleanup_head() {
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'rel_canonical', 10, 0 );
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  remove_action( 'wp_head', 'wp_generator' );
}

add_action('after_setup_theme','start_cleanup');

function remove_qstrings_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}

add_filter( 'style_loader_src', 'remove_qstrings_css_js', 9999 );
add_filter( 'script_loader_src', 'remove_qstrings_css_js', 9999 );

function dequeue_fa() {

    global $wp_styles;
    $patterns = array(
        'font-awesome.css',
        'font-awesome.min.css'
        );

    $regex = '/(' .implode('|', $patterns) .')/i';
    foreach((array) $wp_styles -> registered as $registered) {

        if( preg_match( $regex, $registered->src) ) {
            wp_dequeue_style( $registered->handle );
            wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
			}
		}
	}

add_action( 'wp_enqueue_scripts', 'dequeue_fa' );

function enqueue_jquery_google_cdn() {
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1');
    wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_jquery_google_cdn' );

function disable_autosave() {
	wp_deregister_script('autosave');
}

add_action('wp_print_scripts','disable_autosave');

?>