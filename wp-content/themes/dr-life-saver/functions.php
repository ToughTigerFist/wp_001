<?php

require get_stylesheet_directory() . '/inc/customizer.php';

add_action( 'wp_enqueue_scripts', 'dr_life_saver_chld_thm_parent_css' );
function dr_life_saver_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'dr_life_saver_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );

    wp_enqueue_script( 
        'dr_life_saver_customs_js', 
        get_stylesheet_directory_uri() . '/assets/js/customs.js', 
        array(), 
        '0.1', 
        true 
    );
}

/**
* Changed the blog layout to 3 columns
*/
add_filter( 'bizberg_sidebar_settings', 'dr_life_saver_sidebar_settings' );
function dr_life_saver_sidebar_settings(){
	return '4';
}