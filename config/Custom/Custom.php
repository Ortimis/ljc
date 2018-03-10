<?php

namespace ljc\Custom;

/**
 * Custom
 * use it to write your custom functions.
 */
class Custom
{
	/**
     * register default hooks and actions for WordPress
     * @return
     */
	public function register()
	{
		add_action( 'init', array( $this, 'custom_post_type' ) );
		add_action( 'after_switch_theme', array( $this, 'rewrite_flush' ) );
	}

	/**
	 * Create Custom Post Types
	 * @return The registered post type object, or an error object
	 */
	public function custom_post_type() 
	{
		$labels = array(
			'name'               => _x( 'Arbeitsphasen', 'post type general name', 'ljc' ),
			'singular_name'      => _x( 'Arbeitsphase', 'post type singular name', 'ljc' ),
			'menu_name'          => _x( 'Arbeitsphasen', 'admin menu', 'ljc' ),
			'name_admin_bar'     => _x( 'Arbeitsphase', 'add new on admin bar', 'ljc' ),
			'add_new'            => _x( 'Add New', 'book', 'ljc' ),
			'add_new_item'       => __( 'Add New Arbeitsphase', 'ljc' ),
			'new_item'           => __( 'New Arbeitsphase', 'ljc' ),
			'edit_item'          => __( 'Edit Arbeitsphase', 'ljc' ),
			'view_item'          => __( 'View Arbeitsphase', 'ljc' ),
			'view_items'         => __( 'View Arbeitsphasen', 'ljc' ),
			'all_items'          => __( 'All Arbeitsphasen', 'ljc' ),
			'search_items'       => __( 'Search Arbeitsphasen', 'ljc' ),
			'parent_item_colon'  => __( 'Parent Arbeitsphasen:', 'ljc' ),
			'not_found'          => __( 'No Arbeitsphasen found.', 'ljc' ),
			'not_found_in_trash' => __( 'No Arbeitsphasen found in Trash.', 'ljc' )
		);

		$args = array(
			'labels'             => $labels,
			'description'        => __( 'Description.', 'ljc' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-book-alt',
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'phase' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 2, 
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

		register_post_type( 'phase', $args );
	}

	/**
	 * Flush Rewrite on CPT activation
	 * @return empty
	 */
	public function rewrite_flush() 
	{   
		// call the CPT init function
		$this->custom_post_type();

		// Flush the rewrite rules only on theme activation
		flush_rewrite_rules();
	}
}
