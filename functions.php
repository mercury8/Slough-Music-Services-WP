<?php
/**
 * Slough Music Service functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Slough_Music_Service
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function slough_music_service_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Slough Music Service, use a find and replace
		* to change 'slough-music-service' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'slough-music-service', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'slough-music-service' ),
			'menu-2' => esc_html__( 'Secondary', 'footer-slough-music-service' ),
		)
	);


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'slough_music_service_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'slough_music_service_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function slough_music_service_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'slough_music_service_content_width', 640 );
}
add_action( 'after_setup_theme', 'slough_music_service_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function slough_music_service_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'slough-music-service' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'slough-music-service' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'slough_music_service_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function slough_music_service_scripts() {


	
	wp_enqueue_style( 'slough-music-service-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'slough-music-service-style', 'rtl', 'replace' );

	wp_enqueue_style( 'output', get_template_directory_uri() . '/dist/output.css', array(), _S_VERSION );


	wp_enqueue_script( 'slough-music-service-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true);
	wp_enqueue_script( 'slough-music-service-slider', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), true);
	wp_enqueue_script( 'slough-music-service-slider', get_template_directory_uri() . '//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array( 'jquery' ), false, true);

	

	wp_enqueue_style('slick-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_script('slick-script', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), null, true);



	wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">');


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'slough_music_service_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'     => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'        => false
	));

	acf_add_options_sub_page(array(
		'page_title'     => 'Theme Header Settings',
		'menu_title'    => 'Header',
		'parent_slug'    => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title'     => 'Theme Footer Settings',
		'menu_title'    => 'Footer',
		'parent_slug'    => 'theme-general-settings',
	));
}

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'Events feed type 1',
            'title'             => __('Events feed type 1'),
            'description'       => __('Events feed type 1'),
            'render_template'   => 'template-parts/blocks/events_feed.php',
            'category'          => 'media',
            'icon'              => 'schedule',
            'keywords'          => array('Events', 'feed'),
        ));
		acf_register_block_type(array(
            'name'              => 'Events feed type 2',
            'title'             => __('Events feed type 2'),
            'description'       => __('Events feed type 2'),
            'render_template'   => 'template-parts/blocks/events_feed_widget.php',
            'category'          => 'media',
            'icon'              => 'schedule',
            'keywords'          => array('Events', 'feed'),
        ));
		acf_register_block_type(array(
            'name'              => 'image_ticker',
            'title'             => __('Image Ticker'),
            'description'       => __('Image Ticker'),
            'render_template'   => 'template-parts/blocks/image_ticker.php',
			'category'          => 'media',
            'icon'              => 'image',
        ));
		acf_register_block_type(array(
            'name'              => 'Contact Form',
            'title'             => __('Contact Form'),
            'description'       => __('Contact Form'),
            'render_template'   => 'template-parts/blocks/Contact-form.php',
			'category'          => 'media',
            'icon'              => 'phone',
        ));
		acf_register_block_type(array(
            'name'              => 'Hero',
            'title'             => __('Hero'),
            'description'       => __('Hero'),
            'render_template'   => 'template-parts/blocks/hero.php',
			'category'          => 'media',
            'icon'              => 'media',
        ));
		acf_register_block_type(array(
            'name'              => 'Image left, text right',
            'title'             => __('Image left, text right'),
            'description'       => __('Image left, text right'),
            'render_template'   => 'template-parts/blocks/image-left-text-right.php',
			'category'          => 'media',
            'icon'              => 'media',
        ));
		acf_register_block_type(array(
            'name'              => 'Lessons tabs',
            'title'             => __('Lessons tabs'),
            'description'       => __('Lessons tabs'),
            'render_template'   => 'template-parts/blocks/lesson-tabs.php',
			'category'          => 'media',
            'icon'              => 'media',
        ));
		acf_register_block_type(array(
            'name'              => 'Term Dates',
            'title'             => __('Term Dates'),
            'description'       => __('Term Dates'),
            'render_template'   => 'template-parts/blocks/term-dates.php',
			'category'          => 'media',
            'icon'              => 'media',
        ));
		acf_register_block_type(array(
            'name'              => 'Team image ticker',
            'title'             => __('Team image ticker'),
            'description'       => __('Team image ticker'),
            'render_template'   => 'template-parts/blocks/image_ticker_team.php',
			'category'          => 'team',
            'icon'              => 'team',
        ));
		acf_register_block_type(array(
            'name'              => 'Services Tabs',
            'title'             => __('Services Tabs'),
            'description'       => __('Services Tabs'),
            'render_template'   => 'template-parts/blocks/services.php',
			'category'          => 'media',
            'icon'              => 'team',
        ));
		acf_register_block_type(array(
            'name'              => 'Calender of Events',
            'title'             => __('Calender of Events'),
            'description'       => __('Calender of Events'),
            'render_template'   => 'template-parts/blocks/calender-of-events.php',
			'category'          => 'media',
            'icon'              => 'date',
        ));
		acf_register_block_type(array(
            'name'              => 'Contact Form page',
            'title'             => __('Contact Form page'),
            'description'       => __('Contact Form page'),
            'render_template'   => 'template-parts/blocks/Contact-form-page.php',
			'category'          => 'media',
            'icon'              => 'phone',
        ));
		acf_register_block_type(array(
            'name'              => 'All Team',
            'title'             => __('All Team'),
            'description'       => __('All Team'),
            'render_template'   => 'template-parts/blocks/all_team.php',
			'category'          => 'media',
            'icon'              => 'phone',
        ));
		acf_register_block_type(array(
            'name'              => 'Button:sms',
            'title'             => __('Button:sms'),
            'description'       => __('Button:sms'),
            'render_template'   => 'template-parts/blocks/button.php',
			'category'          => 'media',
            'icon'              => 'button',
        ));

    }
	
}

function testimonial_loop_func( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );

    if ( $query->have_posts() ) { ?>
        <div  id="mainslide_single" class="slider-for">
            <?php while ( $query->have_posts() ) : $query->the_post(); $position = get_field('position', get_the_ID());?>
            <div class="slick-container">
				<?php the_post_thumbnail(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
				<?php echo $position ?>
            </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
};

add_shortcode( 'testimonialSlider', 'testimonial_loop_func' );
