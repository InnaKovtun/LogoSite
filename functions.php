<?php
	add_action( 'wp_enqueue_scripts', 'style_theme');
	add_action( 'wp_footer', 'scripts_theme');
	add_action('after_setup_theme', 'theme_register_nav_menu');
	add_action('after_setup_theme', 'theme_register_footer_nav_menu');
	add_action( 'init_cards', 'create_cards_posttype' );
	add_action( 'widgets_init', 'register_my_widgets' );
	add_theme_support('post-thumbnails');

	function register_my_widgets(){
		register_sidebar( array(
			'name'          => 'Posts Sidebar',
			'id'            => 'posts-sidebar',
			'description'   => 'Sidebar with recent posts',
			'class'         => 'sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => "</h2>\n",
		) );
	}
	
	function theme_register_nav_menu(){
		register_nav_menu('top', 'меню в шапке');
	}

	function theme_register_footer_nav_menu(){
		register_nav_menu('footer', 'меню в футере');
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

	function create_cards_posttype() {
		register_post_type( 'cards',
			array(
				'labels' => array(
				'name' => __( 'Cards' ),
				'singular_name' => __( 'Card' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'card'),
			)
		);
	}

	
?>
