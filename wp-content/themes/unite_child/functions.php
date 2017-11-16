<?php
 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

function get_realty_sidebar(){	
	$args = array(
		'show_option_all'    => '',		
		'order'              => 'ASC',
		'show_last_update'   => 0,
		'style'              => 'list',
		'show_count'         => 1,
		'hide_empty'         => 0,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'feed'               => '',
		'feed_type'          => '',
		'feed_image'         => '',
		'exclude'            => '',
		'exclude_tree'       => '',
		'include'            => '',
		'hierarchical'       => true,
		'title_li'           => __( '<h3 class="widget-title">Предложения от агентств</h3>' ),
		'number'             => NULL,
		'echo'               => 1,
		'depth'              => 0,
		'current_category'   => 0,
		'pad_counts'         => 0,
		'taxonomy'           => 'realtors',
		'walker'             => null,
		'hide_title_if_empty' => false,
		
	);
	
	return wp_list_categories( $args );
}