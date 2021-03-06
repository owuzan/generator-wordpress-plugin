<?php

/**
 * <%= childClassName %>_Taxonomy.
 *
 * <%= description %>
 *
 * @since <%= projectVersion %>
 *
 * @author <%= projectAuthor %>
 * @license <%= projectLicense %>
 *
 */
class <%= childClassName %>_Taxonomy {

	public function __construct() {
    add_action( 'init', array($this, 'create_taxonomy'), 0 );
	}

  public function create_taxonomy() {
    $labels = array(
  		'name'                       => _x( '<%= plural_name %>', 'Taxonomy General Name', '<%= projectName %>' ),
  		'singular_name'              => _x( '<%= singular_name %>', 'Taxonomy Singular Name', '<%= projectName %>' ),
  		'menu_name'                  => __( '<%= singular_name %>', '<%= projectName %>' ),
  		'all_items'                  => __( 'All Items', '<%= projectName %>' ),
  		'parent_item'                => __( 'Parent Item', '<%= projectName %>' ),
  		'parent_item_colon'          => __( 'Parent Item:', '<%= projectName %>' ),
  		'new_item_name'              => __( 'New Item Name', '<%= projectName %>' ),
  		'add_new_item'               => __( 'Add New Item', '<%= projectName %>' ),
  		'edit_item'                  => __( 'Edit Item', '<%= projectName %>' ),
  		'update_item'                => __( 'Update Item', '<%= projectName %>' ),
  		'view_item'                  => __( 'View Item', '<%= projectName %>' ),
  		'separate_items_with_commas' => __( 'Separate items with commas', '<%= projectName %>' ),
  		'add_or_remove_items'        => __( 'Add or remove items', '<%= projectName %>' ),
  		'choose_from_most_used'      => __( 'Choose from the most used', '<%= projectName %>' ),
  		'popular_items'              => __( 'Popular Items', '<%= projectName %>' ),
  		'search_items'               => __( 'Search Items', '<%= projectName %>' ),
  		'not_found'                  => __( 'Not Found', '<%= projectName %>' ),
  		'no_terms'                   => __( 'No items', '<%= projectName %>' ),
  		'items_list'                 => __( 'Items list', '<%= projectName %>' ),
  		'items_list_navigation'      => __( 'Items list navigation', '<%= projectName %>' ),
  	);

  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => <%= hierarchical %>,
  		'public'                     => <%= public %>,
  		'show_ui'                    => <%= show_ui %>
  	);

  	register_taxonomy( 'taxonomy', array( '<%= post_types.join('\', \'') %>' ), $args );
  }

}
