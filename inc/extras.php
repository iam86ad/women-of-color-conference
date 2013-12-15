<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Women of color conference
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */

//Custom Thumbnails
add_theme_support( 'post-thumbnails' );

 add_image_size( 'wocc_thumbnail', 320, 320, true );

function women_of_color_conference_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'women_of_color_conference_page_menu_args' );

// Create Speakers Post type
add_action('init', 'speakers_register');

function speakers_register() {

    $labels = array(
        'name' => _x('Speakers', 'post type general name'),
        'singular_name' => _x('Speakers Item', 'post type singular name'),
        'add_new' => _x('Add New', 'Speaker'),
        'add_new_item' => __('Add New Speaker'),
        'edit_item' => __('Edit Speaker'),
        'new_item' => __('New Speaker'),
        'view_item' => __('View Speaker'),
        'search_items' => __('Search speaker'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail')
      );

    register_post_type( 'speakers' , $args );
}

function change_default_title( $title ){
     $screen = get_current_screen();

     if  ( $screen->post_type == 'speakers' ) {
          return 'Enter speaker name';
     }
}

add_filter( 'enter_title_here', 'change_default_title' );

// End Speakers Post type

// Create Schedule Post type
add_action('init', 'schedule_register');

function schedule_register() {

    $labels = array(
        'name' => _x('schedule', 'post type general name'),
        'singular_name' => _x('Schedule Item', 'post type singular name'),
        'add_new' => _x('Add New Schedule Item', 'Schedule Item'),
        'add_new_item' => __('Add New Schedule Item'),
        'edit_item' => __('Edit Schedule Item'),
        'new_item' => __('New Schedule Item'),
        'view_item' => __('View Schedule Item'),
        'search_items' => __('Search Schedule Item'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'menu_icon' => get_stylesheet_directory_uri() . '/article16.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','excerpt','thumbnail')
      );

    register_post_type( 'schedule' , $args );
}

// Register Taxonomy

add_action( 'init', 'register_taxonomy_week_days' );

function register_taxonomy_week_days() {

    $labels = array(
        'name' => _x( 'Week Days', 'week_days' ),
        'singular_name' => _x( 'Week Day', 'week_days' ),
        'search_items' => _x( 'Search Week Days', 'week_days' ),
        'popular_items' => _x( 'Popular Week Days', 'week_days' ),
        'all_items' => _x( 'All Week Days', 'week_days' ),
        'parent_item' => _x( 'Parent Week Day', 'week_days' ),
        'parent_item_colon' => _x( 'Parent Week Day:', 'week_days' ),
        'edit_item' => _x( 'Edit Week Day', 'week_days' ),
        'update_item' => _x( 'Update Week Day', 'week_days' ),
        'add_new_item' => _x( 'Add New Week Day', 'week_days' ),
        'new_item_name' => _x( 'New Week Day', 'week_days' ),
        'separate_items_with_commas' => _x( 'Separate week days with commas', 'week_days' ),
        'add_or_remove_items' => _x( 'Add or remove week days', 'week_days' ),
        'choose_from_most_used' => _x( 'Choose from the most used week days', 'week_days' ),
        'menu_name' => _x( 'Week Days', 'week_days' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'week_days', array('schedule'), $args );
}

add_action( 'init', 'register_taxonomy_time_of_day' );

function register_taxonomy_time_of_day() {

    $labels = array(
        'name' => _x( 'time of day', 'time_of_day' ),
        'singular_name' => _x( 'time of day', 'time_of_day' ),
        'search_items' => _x( 'Search time of day', 'time_of_day' ),
        'popular_items' => _x( 'Popular time of day', 'time_of_day' ),
        'all_items' => _x( 'All time of day', 'time_of_day' ),
        'parent_item' => _x( 'Parent time of day', 'time_of_day' ),
        'parent_item_colon' => _x( 'Parent time of day:', 'time_of_day' ),
        'edit_item' => _x( 'Edit time of day', 'time_of_day' ),
        'update_item' => _x( 'Update time of day', 'time_of_day' ),
        'add_new_item' => _x( 'Add New time of day', 'time_of_day' ),
        'new_item_name' => _x( 'New time of day', 'time_of_day' ),
        'separate_items_with_commas' => _x( 'AM, PM', 'time_of_day' ),
        'add_or_remove_items' => _x( 'Add or remove time of day', 'time_of_day' ),
        'choose_from_most_used' => _x( 'Choose from the most used time of day', 'time_of_day' ),
        'menu_name' => _x( 'time of day', 'time_of_day' ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'time_of_day', array('schedule'), $args );
}

// Taxomy End

function change_schedule_title( $title ){
     $screen = get_current_screen();

     if  ( $screen->post_type == 'schedule' ) {
          return 'Give this sub-event a title';
     }
}

add_filter( 'enter_title_here', 'change_schedule_title' );

// End Schedule Post type


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function women_of_color_conference_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}


add_filter( 'body_class', 'women_of_color_conference_body_classes' );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function women_of_color_conference_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() ) {
		return $title;
	}

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'women-of-color-conference' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'women_of_color_conference_wp_title', 10, 2 );
