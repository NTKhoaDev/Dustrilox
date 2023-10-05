<?php



require_once get_template_directory() . '/functions/function_plugins.php';




// Add backend styles for Gutenberg.
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

function gutenberg_editor_assets() {
  // Load the theme styles within Gutenberg. CSS
	wp_enqueue_style('my-gutenberg-editor-bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css?time='), FALSE);
	wp_enqueue_style('my-gutenberg-editor-slick', get_theme_file_uri('/assets/css/slick-theme.css?time='), FALSE);
	wp_enqueue_style('my-gutenberg-editor-slick-css', get_theme_file_uri('/assets/css/slick.css?time='), FALSE);
	wp_enqueue_style('my-gutenberg-editor-progresscircle', get_theme_file_uri('/assets/css/progresscircle.css?time='), FALSE);
	wp_enqueue_style('my-gutenberg-editor-main', get_theme_file_uri('/assets/css/main.css'), FALSE);
	wp_enqueue_style('my-gutenberg-editor-admin', get_theme_file_uri('/assets/css/admin.css'), FALSE);

  // ADD JS
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true );
	wp_enqueue_script( 'progresscircle', get_template_directory_uri() . '/assets/js/progresscircle.js', array(), false, true );
	
	
}

function shop_add_css_js() {
	// ADD CSS

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css?time=' . time(), array(), false );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css?time=' . time(), array(), false );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css?time=' . time(), array(), false );
	wp_enqueue_style( 'progresscircle-css', get_template_directory_uri() . '/assets/css/progresscircle.css?time=' . time(), array(), false );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css?time=' . time(), array(), false );

	// ADD JS
	//wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'slick-min', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true );
	wp_enqueue_script( 'scrollreveal-min', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array(), false, true );
	wp_enqueue_script( 'progresscircle', get_template_directory_uri() . '/assets/js/progresscircle.js', array(), false, true );
	wp_enqueue_script( 'easypiechart-min', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array(), false, true );
	wp_enqueue_script( 'simpleParallax-min', get_template_directory_uri() . '/assets/js/simpleParallax.min.js', array(), false, true );

	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true );

	wp_localize_script(
		'js-main',
		'ajax_object',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
	);
}
add_action( 'wp_enqueue_scripts', 'shop_add_css_js', 20 );


// set up mennu
function construction_menus() {
	register_nav_menus(
		array(
			'main-menu' => __( 'Menu Primary', 'construction' ),
		)
	);
}

add_action( 'init', 'construction_menus' );

// Theme Setting
if ( function_exists( 'acf_add_options_page' ) ) {
	$parent = acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
		)
	);
	acf_add_options_page(array(
            'page_title' => __('Header', 'construction'),
            'menu_title' => __('Header', 'construction'),
            'parent_slug' => $parent['menu_slug'],
        ));
        acf_add_options_page(array(
            'page_title' => __('Footer', 'construction'),
            'menu_title' => __('Footer', 'construction'),
            'parent_slug' => $parent['menu_slug'],
        ));
}

// Breadcrumb
function get_breadcrumb() {
	 global $post;
	echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
	if ( is_category() || is_single()) {
		echo '&nbsp;&nbsp;&#124;&nbsp;&nbsp;';
		the_category( ' &bull; ' );

		if ( is_single() && $post->post_type == ( 'service' ) ) {
			$name_cat = get_the_terms( $post, 'services_category' )[0];
			echo apply_filters( 'the_content', $name_cat->name );
			echo ' &nbsp;&nbsp;&#124;&nbsp;&nbsp;';

			the_title();
		}
	} elseif ( is_page() || $post->post_type == "page" ) {
		echo '&nbsp;&nbsp;&#124;&nbsp;&nbsp;';
		echo the_title();
	} elseif ( is_search() ) {
		echo '&nbsp;&nbsp;&#124;&nbsp;&nbsp;Search Results for... ';
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	}
}

// register blocks
function tt_register_module_blocks() {
	if ( ! function_exists( 'acf_register_block_type' ) ) {
		return;
	}
	$block_types = array(
		array(
			'name'     => 'banner-home',
			'title'    => __( 'Banner Home', 'construction' ),
			'keywords' => array( 'banner_home' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'banner',
			'title'    => __( 'Banner', 'construction' ),
			'keywords' => array( 'banner' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'about-us',
			'title'    => __( 'About Us', 'construction' ),
			'keywords' => array( 'about_us' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'services',
			'title'    => __( 'Services', 'construction' ),
			'keywords' => array( 'services' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'accordion',
			'title'    => __( 'Accordion', 'construction' ),
			'keywords' => array( 'accordion' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'brands',
			'title'    => __( 'Brands', 'construction' ),
			'keywords' => array( 'brands' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'features',
			'title'    => __( 'Features', 'construction' ),
			'keywords' => array( 'features' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'feedback',
			'title'    => __( 'Feedback', 'construction' ),
			'keywords' => array( 'feedback' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'manager',
			'title'    => __( 'Manager', 'construction' ),
			'keywords' => array( 'manager' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'process',
			'title'    => __( 'Process', 'construction' ),
			'keywords' => array( 'process' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'history',
			'title'    => __( 'History', 'construction' ),
			'keywords' => array( 'history' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'team',
			'title'    => __( 'Team', 'construction' ),
			'keywords' => array( 'team' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'tab',
			'title'    => __( 'Tab', 'construction' ),
			'keywords' => array( 'tab' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'insights',
			'title'    => __( 'Insights', 'construction' ),
			'keywords' => array( 'insights' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'funfact',
			'title'    => __( 'Funfact', 'construction' ),
			'keywords' => array( 'funfact' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'news',
			'title'    => __( 'News', 'construction' ),
			'keywords' => array( 'news' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'connect',
			'title'    => __( 'Connect', 'construction' ),
			'keywords' => array( 'connect' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'form-contact',
			'title'    => __( 'Form Contact', 'construction' ),
			'keywords' => array( 'form_contact' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'study',
			'title'    => __( 'Study', 'construction' ),
			'keywords' => array( 'study' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'member',
			'title'    => __( 'Member', 'construction' ),
			'keywords' => array( 'member' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'skills',
			'title'    => __( 'Skills', 'construction' ),
			'keywords' => array( 'skills' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'certificate',
			'title'    => __( 'Certificate', 'construction' ),
			'keywords' => array( 'certificate' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'single-description',
			'title'    => __( 'Single Description', 'construction' ),
			'keywords' => array( 'single_description' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'single-image',
			'title'    => __( 'Single Image', 'construction' ),
			'keywords' => array( 'single_image' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'single-list-des',
			'title'    => __( 'Single List Des', 'construction' ),
			'keywords' => array( 'single_list_des' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'single-list-image',
			'title'    => __( 'Single List Image', 'construction' ),
			'keywords' => array( 'single_list_image' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'single-title-small',
			'title'    => __( 'Single Title Small', 'construction' ),
			'keywords' => array( 'single_title_small' ),
			// 'category' => 'modules'
		),
		array(
			'name'     => 'video',
			'title'    => __( 'Video', 'construction' ),
			'keywords' => array( 'video' ),
			// 'category' => 'modules'
		),
	);

	foreach ( $block_types as $block_type ) {
		$args = array(
			'name'            => $block_type['name'],
			'title'           => $block_type['title'],
			'keywords'        => $block_type['keywords'],
			'icon'            => 'admin-generic',
			'render_callback' => 'etypes_acf_block_render_callback',
			'mode'            => 'view',
			// 'mode'            => 'edit',
			'supports'        => array(
				'align' => false,
				'mode'  => false,
			),
		);
		if ( array_key_exists( 'post_types', $block_type ) ) {
			$args['post_types'] = $block_type['post_types'];
		}
		acf_register_block_type( $args );
	}
}

add_action( 'acf/init', 'tt_register_module_blocks' );

function etypes_acf_block_render_callback( $block ) {
	$name = str_replace( 'acf/', '', $block['name'] );

	if ( file_exists( get_theme_file_path( "/inc/block-{$name}.php" ) ) ) {
		include get_theme_file_path( "/inc/block-{$name}.php" );
	}
}

// function get category
function get_obj_category( $post ) {
	$category_type = '';
	$category_name = '';
	switch ( $post->post_type ) {
		case 'post':
			$category_type = 'category';
			break;
		case 'service':
			$category_type = 'services_category';
			break;
	}

	if ( $category_type != '' ) {
		$temp = get_the_terms( $post, $category_type );
		if ( is_array( $temp ) && count( $temp ) > 0 ) {
			$category      = array_shift( $temp );
			$category_name = $category->name;
		}
	}

	return array(
		'name' => $category_name,
		'link' => '',
	);
}


add_action( 'after_theme_setup' , function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    if ( ! isset( $content_width ) ) {
	$content_width = 1920;
    }
});

