<?php
/**
 * Rex functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rex
 */

if ( ! function_exists( 'rex_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rex_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Rex, use a find and replace
	 * to change 'rex' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'rex', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'rex' ),
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'rex_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'rex_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rex_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rex_content_width', 640 );
}
add_action( 'after_setup_theme', 'rex_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rex_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rex' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function rex_scripts() {

    /*-----------------------*/
	/*styles*/
    /*-----------------------*/

	wp_enqueue_style('rex_style', get_template_directory_uri() . '/style.css');

	wp_enqueue_style( 'rex_style1', get_template_directory_uri() . '/assets/css/animate.css');

	wp_enqueue_style( 'rex_style2', get_template_directory_uri() . '/assets/css/bootstrap.css');

	wp_enqueue_style( 'rex_style3', get_template_directory_uri() . '/assets/css/font-awesome.css');

	wp_enqueue_style( 'rex_style4', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');

	wp_enqueue_style( 'rex_style5', get_template_directory_uri() . '/assets/css/slick.css');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    /*theme-color*/
    wp_enqueue_style( 'rex_style6', get_template_directory_uri() . '/assets/css/theme-color/bridge-theme.css');

    wp_enqueue_style( 'rex_style7', get_template_directory_uri() . '/assets/css/theme-color/dark-red-theme.css');

    wp_enqueue_style( 'rex_style8', get_template_directory_uri() . '/assets/css/theme-color/default.css');

    wp_enqueue_style( 'rex_style9', get_template_directory_uri() . '/assets/css/theme-color/green-theme.css');

    wp_enqueue_style( 'rex_style10', get_template_directory_uri() . '/assets/css/theme-color/lite-blue-theme.css');

    wp_enqueue_style( 'rex_style11', get_template_directory_uri() . '/assets/css/theme-color/orange-theme.css');

    wp_enqueue_style( 'rex_style12', get_template_directory_uri() . '/assets/css/theme-color/pink-theme.css');

    wp_enqueue_style( 'rex_style13', get_template_directory_uri() . '/assets/css/theme-color/purple-theme.css');

    wp_enqueue_style( 'rex_style14', get_template_directory_uri() . '/assets/css/theme-color/red-theme.css');

    wp_enqueue_style( 'rex_style15', get_template_directory_uri() . '/assets/css/theme-color/yellow-theme.css');

    /*-----------------------*/
    /*scripts*/
    /*-----------------------*/

    wp_enqueue_script( 'rex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'rex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'rex-scripts1', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');

    wp_enqueue_script( 'rex-scripts2', get_template_directory_uri() . '/assets/js/custom.js');

    wp_enqueue_script( 'rex-scripts3', get_template_directory_uri() . '/assets/js/jquery.counterup.js');

    wp_enqueue_script( 'rex-scripts4', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js');

    wp_enqueue_script( 'rex-scripts5', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js');

    wp_enqueue_script( 'rex-scripts6', get_template_directory_uri() . '/assets/js/jquery.mixitup.js');

//    wp_enqueue_script( 'rex-scripts7', get_template_directory_uri() . '/assets/js/bootstrap.js');

    wp_enqueue_script( 'rex-scripts8', get_template_directory_uri() . '/assets/js/slick.js');

	wp_enqueue_script( 'rex-scripts9', get_template_directory_uri() . '/assets/js/waypoints.js');

	wp_enqueue_script( 'rex-scripts10', get_template_directory_uri() . '/assets/js/waypoints.min.js');

	wp_enqueue_script( 'rex-scripts11', get_template_directory_uri() . '/assets/js/wow.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rex_scripts' );

/*____________________________________________________________________________________*/
//Add social icons
function my_customizer_social_media_array()
{
	$social_sites = array('facebook', 'twitter' , 'google-plus', 'youtube', 'linkedin', 'pinterest', 'dribbble', 'flickr', 'tumblr', 'rss', 'instagram', 'email');
	return $social_sites;
}

add_action('customize_register', 'my_add_social_sites_customizer');

function my_add_social_sites_customizer($wp_customize)
{

	$wp_customize->add_section('my_social_settings', array(
		'title' => __('Social Media Icons', 'text-domain'),
		'priority' => 35,
	));

	$social_sites = my_customizer_social_media_array();
	$priority = 5;

	foreach ($social_sites as $social_site) {

		$wp_customize->add_setting("$social_site", array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw'
		));

		$wp_customize->add_control($social_site, array(
			'label' => __("$social_site url:", 'text-domain'),
			'section' => 'my_social_settings',
			'type' => 'text',
			'priority' => $priority,
		));

		$priority = $priority + 5;
	}
}

function my_social_media_icons()
{
	$social_sites = my_customizer_social_media_array();
	foreach ($social_sites as $social_site) {
		if (strlen(get_theme_mod($social_site)) > 0) {
			$active_sites[] = $social_site;
		}
	}
	if (!empty($active_sites)) {
		echo "<ul class='social-icons'>";
		foreach ($active_sites as $active_site) {
			$class = 'fa fa-' . $active_site;
			if ($active_site == 'email') {
				?>
				<li>
					<a class="email" target="_blank"
					   href="mailto:<?php echo antispambot(is_email(get_theme_mod($active_site))); ?>">
						<span class="fa fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></span>
					</a>
				</li>
			<?php } else { ?>
				<li>
					<a class="<?php echo $active_site; ?>" target="_blank"
					   href="<?php echo esc_url(get_theme_mod($active_site)); ?>">
                        <span class="<?php echo esc_attr($class); ?>"
							  title="<?php printf(__('%s icon', 'text-domain'), $active_site); ?>"></span>
					</a>
				</li>
				<?php
			}
		}
		echo "</ul>";
	}
}

/*____________________________________________________________________________________*/
/**
 * Adds a section, the parameters and controls (control) on the theme settings page
 */
add_action('customize_register', function ($customizer) {
	$customizer->add_section(
		'edits-copyright',
		array(
			'title' => 'Copyright',
			'description' => 'Edit',
			'priority' => 35,
		)
	);
	$customizer->add_setting(
		'copyright_name',
		array('default' => 'MarkUps.io')
	);
	$customizer->add_control(
		'copyright_name',
		array(
			'label' => 'Site name',
			'section' => 'edits-copyright',
			'type' => 'text',
		)
	);
	$customizer->add_setting(
		'copyright_year',
		array('default' => '2016')
	);
	$customizer->add_control(
		'copyright_year',
		array(
			'label' => 'Year',
			'section' => 'edits-copyright',
			'type' => 'text',
		)
	);
	$customizer->add_control(
		'hide_copyright',
		array(
			'type' => 'checkbox',
			'label' => 'Hide text copyright',
			'section' => 'edit-copyright',
		)
	);
});
/*__________________________________________________*/
/*create slider post type*/
add_action('init', 'create_slider_post_type');

function create_slider_post_type()
{
	register_post_type('slider',
		array(
			'labels' => array(
				'name' => __('Slider'),
				'singular_name' => __('Slider')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'slider'),
			'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
}

/*__________________________________________________*/
/*create slider taxonomy*/
add_action('init', 'create_my_slider_tax');

function create_my_slider_tax()
{
	register_taxonomy(
		'slider_tax',
		'slider',
		array(
			'label' => __('Categories'),
			'rewrite' => array('slug' => 'slider_tax'),
			'hierarchical' => true,
		)
	);
}
/*__________________________________________________*/
/*create about post type*/
add_action('init', 'create_about_post_type');

function create_about_post_type()
{
    register_post_type('about',
        array(
            'labels' => array(
                'name' => __('About'),
                'singular_name' => __('About')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'about'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create about taxonomy*/
add_action('init', 'create_about_tax');

function create_about_tax()
{
    register_taxonomy(
        'about_tax',
        'about',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'about_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create team post type*/
add_action('init', 'create_team_post_type');

function create_team_post_type()
{
    register_post_type('team',
        array(
            'labels' => array(
                'name' => __('Team'),
                'singular_name' => __('Team')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create team taxonomy*/
add_action('init', 'create_team_tax');

function create_team_tax()
{
    register_taxonomy(
        'team_tax',
        'team',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'team_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create services post type*/
add_action('init', 'create_services_post_type');

function create_services_post_type()
{
    register_post_type('team',
        array(
            'labels' => array(
                'name' => __('Services'),
                'singular_name' => __('Services')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}

/*__________________________________________________*/
/*create services taxonomy*/
add_action('init', 'create_services_tax');

function create_services_tax()
{
    register_taxonomy(
        'services_tax',
        'services',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'services_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create portfolio post type*/
add_action('init', 'create_portfolio_post_type');

function create_portfolio_post_type()
{
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio'),
                'singular_name' => __('Portfolio')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}


/*__________________________________________________*/
/*create portfolio taxonomy*/
add_action('init', 'create_portfolio_tax');

function create_portfolio_tax()
{
    register_taxonomy(
        'portfolio_tax',
        'portfolio',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'portfolio_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create counter post type*/
add_action('init', 'create_counter_post_type');

function create_counter_post_type()
{
    register_post_type('counter',
        array(
            'labels' => array(
                'name' => __('Counter'),
                'singular_name' => __('Counter')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'counter'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}


/*__________________________________________________*/
/*create counter taxonomy*/
add_action('init', 'create_counter_tax');

function create_counter_tax()
{
    register_taxonomy(
        'counter_tax',
        'counter',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'counter_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create pricing post type*/
add_action('init', 'create_pricing_post_type');

function create_pricing_post_type()
{
    register_post_type('pricing',
        array(
            'labels' => array(
                'name' => __('Pricing'),
                'singular_name' => __('Pricing')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'pricing'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}


/*__________________________________________________*/
/*create pricing taxonomy*/
add_action('init', 'create_pricing_tax');

function create_pricing_tax()
{
    register_taxonomy(
        'pricing_tax',
        'pricing',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'pricing_tax'),
            'hierarchical' => true,
        )
    );
}
/*__________________________________________________*/
/*create blog post title post type*/
add_action('init', 'create_blog_post_type');

function create_blog_post_type()
{
    register_post_type('blog',
        array(
            'labels' => array(
                'name' => __('Blog post title'),
                'singular_name' => __('Blog post title')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'blog'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}


/*__________________________________________________*/
/*create pricing taxonomy*/
add_action('init', 'create_blog_tax');

function create_blog_tax()
{
    register_taxonomy(
        'blog_tax',
        'blog',
        array(
            'label' => __('Categories'),
            'rewrite' => array('slug' => 'blog_tax'),
            'hierarchical' => true,
        )
    );
}

/*__________________________________________________________*/
/*create logo in theme customize*/
/*_____________________________________*/
function gootheme_theme_customizer($wp_customize)
{

	$wp_customize->add_section('gootheme_logo_section', array(
		'title' => __('Site logo', 'gootheme'),
		'priority' => 30,
		'description' => 'Upload a logo for this theme',
	));

	$wp_customize->add_setting('gootheme_logo', array(
		'default' => get_bloginfo('template_directory') . '/assets/images/logo.jpg',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gootheme_logo', array(

		'label' => __('Current logo', 'gootheme'),
		'section' => 'gootheme_logo_section',
		'settings' => 'gootheme_logo',
	)));

}

add_action('customize_register', 'gootheme_theme_customizer');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
