<?php

function alvien_script_enqueue(){

	//wp_enqueue_style($handle, $src, $deps, $ver, $media);
	wp_enqueue_style('customstyle',get_template_directory_uri() . '/css/alvien.css', array() ,'1.0.0','all');
	// wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
	wp_enqueue_script('customjs',get_template_directory_uri() . '/js/alvien.js',array(),'1.0.0',true);
	

}

// add_action($tag, $function_to_add, $priority, $accepted_args);
add_action('wp_enqueue_scripts','alvien_script_enqueue');

//8February2019
function alvien_theme_setup(){
	add_theme_support('menus');
	// register_nav_menu($location, $description);
	register_nav_menu('primary','Primary Header Navigation');
	register_nav_menu('secondary','Footer Navigation');

}
add_action('init','alvien_theme_setup');

