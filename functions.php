<?php

function loadResources() {
	//style
	wp_enqueue_style( 'font-pacifico', 'https://fonts.googleapis.com/css?family=Pacifico');
	wp_enqueue_style( 'bootstrap' , get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'flexboxgrid' , get_template_directory_uri() . '/bower_components/flexboxgrid/dist/flexboxgrid.min.css');
	wp_enqueue_style( 'fontawesome' , get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'style', get_stylesheet_uri());
	//scripts
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js','','',true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js','','',true);
	wp_enqueue_script( 'prime-script', get_template_directory_uri() . '/js/theme-function.js','','',true);

}
add_action('wp_enqueue_scripts', 'loadResources');

//enable img-thumb
if (function_exists('add_theme_support')) add_theme_support('post-thumbnails');

//register menus
register_nav_menus([
	'primary' => 'Header',
	'secondary' => 'Footer',
	'last' => 'Privacy policy..'
]);

//custom search in menu
function add_search_form($items, $args) {
	if( $args->theme_location == 'primary' )
		$items .= '<li>' . get_search_form( FALSE ) . '</li>';
	return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

function new_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

//add custom post-type
function my_custom_init() {
	$labels = array(
		'name' => 'Портфолио',
		'singular_name' => 'Портфолио',
		'add_new' => 'Добавить новое',
		'add_new_item' => 'Добавить новое портфолио',
		'edit_item' => 'Редактировать портфолио',
		'new_item' => 'Новое портфолио',
		'view_item' => 'Посмотреть портфолио',
		'search_items' => 'Найти портфолио',
		'not_found' =>  'Портфолий не найдено',
		'not_found_in_trash' => 'В корзине портфолий не найдено',
		'parent_item_colon' => '',
		'menu_name' => 'Портфолио'

	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	);
	register_post_type('portfolio',$args); }
add_action('init', 'my_custom_init');

//add custom taxonomy
function create_portfolio_taxonomies(){
	$labels = array(
		'name' => _x( 'Genres', 'taxonomy general name' ),
		'singular_name' => _x( 'Genre', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Genres' ),
		'all_items' => __( 'All Genres' ),
		'parent_item' => __( 'Parent Genre' ),
		'parent_item_colon' => __( 'Parent Genre:' ),
		'edit_item' => __( 'Edit Genre' ),
		'update_item' => __( 'Update Genre' ),
		'add_new_item' => __( 'Add New Genre' ),
		'new_item_name' => __( 'New Genre Name' ),
		'menu_name' => __( 'Genre' ),
	);

	register_taxonomy('genre', array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'genre' ),
	)); }
add_action( 'init', 'create_portfolio_taxonomies', 0 );