<?php
/**
 * SQZ Toolbox functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SQZ_Toolbox
 */

if ( ! function_exists( 'sqz_toolbox_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sqz_toolbox_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on SQZ Toolbox, use a find and replace
		 * to change 'sqz-toolbox' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'sqz-toolbox', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		// Navigation Menus
// Theme setup
function sqz_toolbox_lignt_setup() {
	// Navigation Menus
	register_nav_menus(array(
	'primary-nav' => __('Primary Navigation'),
	'footer-nav' => __('Footer Navigation'),
	'mobile-nav' => __('Mobile Navigation'),
	));

	// add featured image support
	add_theme_support('post-thumbnails');
	add_image_size( 'banner_image', 1920, 1080, true);
	add_image_size( 'banner_image_2x', 3840, 2160, true);

	add_image_size( 'calloff_thumb', 1570, 1570, true);
	add_image_size( 'calloff_thumb_2x', 3140, 3140, true);

	add_image_size( 'studiohome', 700, 400, true);
	add_image_size( 'studiohome_2x', 1400, 800, true);

	add_image_size( 'twoblock_image', 950, 600, true);
	add_image_size( 'twoblock_image_2x', 950, 600, true);

	add_image_size( 'threecolumn_img', 350, 200, true);
	add_image_size( 'threecolumn_img_2x', 700, 400, true);

	add_image_size( 'bloglistings_image', 500, 999999, false);
	add_image_size( 'bloglistings_image_2x', 1000, 999999, false);


	// Add post format support
	//add_theme_support('post-formats', array('gallery','video','image'));
}

add_action('after_setup_theme', 'sqz_toolbox_lignt_setup');


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'sqz_toolbox_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sqz_toolbox_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sqz_toolbox_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'sqz_toolbox_content_width', 640 );
}
add_action( 'after_setup_theme', 'sqz_toolbox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sqz_toolbox_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sqz-toolbox' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sqz-toolbox' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sqz_toolbox_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sqz_toolbox_scripts() {

	wp_enqueue_style( 'sqz-toolbox-style-custom', get_template_directory_uri() . '/css/sqz-styles.css');

    wp_enqueue_style('fancybox', get_template_directory_uri() . "/library/fancybox/jquery.fancybox.css");
    wp_enqueue_style('sqz-styles', get_template_directory_uri() . "/css/sqz-styles.css", array(), rand(111, 9999), 'all');
    wp_enqueue_style('theme-styles', get_stylesheet_uri());

	wp_enqueue_style('slick', get_template_directory_uri() . "/library/slick/slick.css");
	wp_enqueue_style('slick-theme', get_template_directory_uri() . "/library/slick/slick-theme.css");
    

    wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', false, '2.8.3');
	wp_enqueue_script( 'sqz-toolbox-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	 wp_enqueue_script('masonary', get_template_directory_uri(). "/js/vendor/masonry.pkgd.min.js");
	wp_enqueue_script('infinitescroll', get_template_directory_uri(). "/js/vendor/infinite-scroll.pkgd.min.js");
    wp_enqueue_script('slick-js', get_template_directory_uri() . "/library/slick/slick.min.js");
    wp_enqueue_script('fancybox', get_template_directory_uri() . "/library/fancybox/jquery.fancybox.js");
    wp_enqueue_script('jquery-selectbox', get_template_directory_uri() . "/library/jquery-nice-select/js/jquery.nice-select.min.js");
    wp_enqueue_script('retina', get_template_directory_uri() . "/js/vendor/retina.min.js");
    wp_enqueue_script('sqz-sripts', get_template_directory_uri() . "/js/main.js", array(), rand(111, 9999), 'all');
    wp_enqueue_script('sqz-sripts-bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js", array(), rand(111, 9999), 'all');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );

	}
}
add_action( 'wp_enqueue_scripts', 'sqz_toolbox_scripts' );
wp_enqueue_script('jquery');




/**
 * Enqueue block editor style
 */
function sqz_block_editor_js_css() {
wp_enqueue_style( 'sqz-editor-custom', get_template_directory_uri().'/css/sqz-editor.style.css');
wp_enqueue_script('sqz-sripts-bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js", array(), rand(111, 9999), 'all');
wp_enqueue_style('slick', get_template_directory_uri() . "/library/slick/slick.css");
wp_enqueue_style('slick-theme', get_template_directory_uri() . "/library/slick/slick-theme.css");
wp_enqueue_script('slick-js', get_template_directory_uri() . "/library/slick/slick.min.js");

}
add_action( 'enqueue_block_editor_assets', 'sqz_block_editor_js_css' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the gutenberg blocks.
 */
require get_template_directory() . '/inc/gutenberg-blocks.php';



/******************************blocks***********************************/
add_action('admin_head', 'customcss_overider');

function customcss_overider() {
  echo '<style>
    a:not(.sqz-btn) {
     border-bottom: 0 solid #000 !important;
    }

    #adminmenu .wp-menu-image img {
        padding: 4px !important;
        width: 31px !important;
    }

    #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
          font-size: 15px !important;

    }

    #wpcontent, #wpfooter {
        margin-left: 180px ;
    }
      </style>';
}

function theme_name_setup() {
    add_theme_support( 'align-wide' );
 //   add_theme_support('wp-block-styles');

}
add_action( 'after_setup_theme', 'theme_name_setup' );



/*
registerBlockType('namespace/block-all', {
    title: 'Block Name',
    icon: 'smiley',
    category: 'common',

    supports: { // Hey WP, I want to use your alignment toolbar!
        align: true,
    },
}*/

add_action('acf/init', 'squeeze_register_blocks');
function squeeze_register_blocks() {
    if( function_exists('acf_register_block_type') ) {

        // Register a  Columns with media and text block.
        acf_register_block_type(array(
            'name'              => 'accordion-blocks',
            'title'             => __('Accordion '),
            'description'       => __('A custom accordion block in gutenberg.'),
            'render_template'   => 'template-parts/gutenberg/accordion.php',
            'category'          => 'sqz-blocks-full',
            'icon'              => 'feedback',
            'mode'				=> 'false',
            'supports' => array( 
                'align' => array('center','wide', 'full' ), 
            ),

        ));

  		// testimonial
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/testimonial/testimonial.php',
            'category'          => 'sqz-blocks',
             'mode'				=> 'false',
            'supports' => array( 
                'align' => array('center','wide', 'full' ), 
            ),
           
        ));

        //slider
        acf_register_block_type(array(
            'name'              => 'mainsliders',
            'title'             => __('Slider'),
            'mode'				=> 'false',
            'description'       => __('Please Choose Template for Main Slider.'),
            'render_template'   => 'template-parts/gutenberg/main-slider.php',
            'category'          => 'sqz-blocks',
            'icon'              => 'format-gallery',
            'supports' => array( 
                'align' => array('center','wide', 'full' ), 
            ),             
        ));


        // Register a  Columns block.
        acf_register_block_type(array(
            'name'              => 'column-blocks',
            'title'             => __('Add Columns'),
            'description'       => __('A custom columns block in gutenberg.'),
            'render_template'   => 'template-parts/gutenberg/column.php',
            'category'          => 'sqz-blocks-full',
            'icon'              => 'admin-site-alt2',
            'mode'				=> 'false',
            'supports' => array( 
                'align' => array('center','wide' ), 
            ),

        ));
        // Register a  vertical space block.
        acf_register_block_type(array(
            'name'              => 'vertical-space-blocks',
            'title'             => __('Vertical Space '),
            'description'       => __('A custom vertical space block in gutenberg.'),
            'render_template'   => 'template-parts/gutenberg/vertical-space.php',
            'category'          => 'sqz-blocks-full',
            'icon'              => 'admin-site-alt1',
            'mode'				=> 'false',
            'supports' => array( 
                'align' => array( 'full' ), 
            ),
        ));


        // Register a  Media with text block.
        acf_register_block_type(array(
            'name'              => 'media-text-blocks',
            'title'             => __('Media with Text'),
            'description'       => __('A custom Media with text block in gutenberg.'),
            'render_template'   => 'template-parts/gutenberg/media-text.php',
            'category'          => 'sqz-blocks-full',
            'icon'              => 'excerpt-view',
            'mode'				=> 'false',
            'supports' => array( 
                'align' => array('center','wide', 'full' ), 
            ),
        ));


        // Register a Carousel block.
        acf_register_block_type(array(
            'name'              => 'carousel-blocks',
            'title'             => __('Carousel'),
            'description'       => __('A custom Carousel block in gutenberg.'),
            'render_template'   => 'template-parts/gutenberg/carousel.php',
            'category'          => 'sqz-blocks-full',
            'icon'              => 'slides',
            'mode'				=> 'false',
            'supports' => array( 
                'align' => array('center','wide', 'full' ), 
            ),
        ));


        // Register a  Call to Action block.
        acf_register_block_type(array(
            'name'              => 'cta-blocks',
            'title'             => __('Call to Action'),
            'description'       => __('A custom Call to Action block in gutenberg.'),
            'render_template'   => 'template-parts/gutenberg/cta.php',
            'category'          => 'sqz-blocks-full',
            'icon'              => 'format-chat',
            'mode'				=> 'false',
            'supports' => array( 
                'align' => array('center','wide', 'full' ), 
            ),
        ));

        // Register a  Video with text block.
        acf_register_block_type(array(
            'name'              => 'video-text-blocks',
            'title'             => __('Video with Text'),
            'description'       => __('A custom Video with text block in gutenberg.'),
            'render_template'   => 'template-parts/gutenberg/video-text.php',
            'category'          => 'sqz-blocks-full',
            'icon'              => 'playlist-video',
            'mode'				=> 'false',
            'supports' => array( 
                'align' => array('center','wide', 'full' ), 
            ),
        ));


    }

}
