<?php

/**
 * Tell WordPress to run twentyeleven_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'plains_setup' );


/**
 * Sets up theme defaults and registers support for some WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links, custom headers
 * 	and backgrounds, and post formats.
 *
 * @since Plains 0.1
 */
function plains_setup() {
 
	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );
	
	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );	

}


/**
 * Returns the Year of the first Post.
 *
 *
 * @uses get_posts() To access the first published Post
 *
 * @since Plains 0.1
 */

function plains_get_first_year(){
   $mypost = get_posts(array('order' => 'ASC', 'numberposts' => '1'));	  
   $firstyear = date('Y', strtotime($mypost[0]->post_date));
   return $firstyear;
}





?>