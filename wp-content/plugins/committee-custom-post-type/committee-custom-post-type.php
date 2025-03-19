<?php
/**
 * Plugin Name: Committee Custom Post Type
 * Plugin URI: https://example.com
 * Description: Registers a custom post type called "Committee" for managing committees.
 * Version: 1.1
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL2
 * Text Domain: text_domain
 */

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Committees', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Committee', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Committees', 'text_domain' ),
		'name_admin_bar'        => __( 'Committee', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Committee', 'text_domain' ),
		'description'           => __( 'VA Committee Custom Post Type', 'text_domain' ),
		'labels'                => $labels,
		// Enabled supports: title, editor, and featured image (thumbnail)
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'committee', $args );
}
add_action( 'init', 'custom_post_type', 0 );


/**
 * Add custom page template to the list of available templates.
 *
 * @param array $templates The array of page templates.
 * @return array Modified array with our template.
 */
function committee_register_template( $templates ) {
    $templates['committee-listing.php'] = 'Committee Listing Gutenberg';
    return $templates;
}
add_filter( 'theme_page_templates', 'committee_register_template' );

/**
 * Load our custom page template when selected.
 *
 * @param string $template The path to the template file.
 * @return string Modified template path if our template is selected.
 */
function committee_load_template( $template ) {
    if ( is_page() && get_page_template_slug() === 'committee-listing.php' ) {
        $plugin_template = plugin_dir_path( __FILE__ ) . 'templates/committee-listing.php';
        if ( file_exists( $plugin_template ) ) {
            return $plugin_template;
        }
    }
    return $template;
}
add_filter( 'template_include', 'committee_load_template' );


/**
 * Enqueue custom plugin styles.
 */
function committee_enqueue_styles() {
    wp_enqueue_style(
        'committee-plugin-styles', // Handle for the stylesheet.
        plugin_dir_url( __FILE__ ) . 'css/committee-styles.css', // Path to the CSS file.
        array(), // Dependencies (if any).
        '1.0.0' // Version number.
    );
}
add_action( 'wp_enqueue_scripts', 'committee_enqueue_styles' );

