<?php
	add_action( 'wp_enqueue_scripts', 'style_theme');
	add_action( 'wp_footer', 'scripts_theme');
	add_action('after_setup_theme', 'theme_register_nav_menu');

	function theme_register_nav_menu(){
		register_nav_menu('top', 'меню в шапке');
	}

	function style_theme(){
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('foundation', get_template_directory_uri() . '/foundation/assets/css/foundation.css' );
		wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
		wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
	}

	function scripts_theme(){
		wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
		wp_enqueue_script('jquery');
		wp_enqueue_script('foundation-js', get_template_directory_uri() . '/foundation/assets/js/foundation.js', array('jquery', 'jquery-js'), true );
		wp_enqueue_script('vendor-js', get_template_directory_uri() . '/foundation/assets/js/vendor.js', array('jquery', 'jquery-js'), true );
		wp_enqueue_script('slick_script', get_template_directory_uri() . '/assets/js/slick.js');
		wp_enqueue_script('slick_min_script', get_template_directory_uri() . '/assets/js/slick.min.js');
		
	}
	
?>
