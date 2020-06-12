<?php

/**
 * sellon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sellon
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('sellon_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sellon_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sellon, use a find and replace
		 * to change 'sellon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('sellon', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'sellon'),
				'footer' => esc_html__('Footer menu', 'sellon'),
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
				'sellon_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
endif;
add_action('after_setup_theme', 'sellon_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sellon_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('sellon_content_width', 640);
}
add_action('after_setup_theme', 'sellon_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sellon_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sellon'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sellon'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'sellon_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sellon_scripts()
{
	wp_enqueue_style('sellon-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('sellon-style', 'rtl', 'replace');

	wp_enqueue_script('sellon-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), _S_VERSION, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sellon_scripts');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';






//Clean HTML

/**
 * Remove block library css
 */

function sellon_remove_block_library_css()
{
	wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'sellon_remove_block_library_css');

function itsme_disable_feed()
{
	wp_die(__('No feed available, please visit the <a href="' . esc_url(home_url('/')) . '">homepage</a>!'));
}

add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

remove_action('wp_head', 'wp_generator');

global $sitepress;
remove_action('wp_head', array($sitepress, 'meta_generator_tag'));

remove_action('wp_head', 'wlwmanifest_link');

remove_action('wp_head', 'rsd_link');

remove_action('wp_head', 'wp_shortlink_wp_head');

remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');

/**
 * Disable the emoji's
 */
function disable_emojis()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
	add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
	if ('dns-prefetch' == $relation_type) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

		$urls = array_diff($urls, array($emoji_svg_url));
	}

	return $urls;
}
/*
add_filter('user_contactmethods', 'custom_user_contactmethods');
function custom_user_contactmethods($user_contact)
{
	$user_contact['ext_phone'] = 'Phone number';
	$user_contact['tin'] = 'Tin number';

	return $user_contact;
}
*/


//add_filter('gform_enable_field_label_visibility_settings', '__return_true');

/*
add_filter('gform_username', 'auto_username', 10, 4);
function auto_username($username, $feed, $form, $entry)
{
	GFCommon::log_debug(__METHOD__ . '(): running.');
	$username = "user";

	if (empty($username)) {
		GFCommon::log_debug(__METHOD__ . '(): Value for username is empty.');
		return $username;
	}

	if (!function_exists('username_exists')) {
		require_once(ABSPATH . WPINC . '/registration.php');
	}

	if (username_exists($username)) {
		GFCommon::log_debug(__METHOD__ . '(): Username already exists, generating a new one.');
		$i = 10000000;
		while (username_exists($username . $i)) {
			$i++;
		}
		$username = $username . $i;
		GFCommon::log_debug(__METHOD__ . '(): New username: ' . $username);
	};

	return $username;
}
*/
add_filter('gform_field_value_username', 'populate_username');
function populate_username($value)
{
	GFCommon::log_debug(__METHOD__ . '(): running.');
	$username = "user";

	if (empty($username)) {
		GFCommon::log_debug(__METHOD__ . '(): Value for username is empty.');
		return $username;
	}

	if (!function_exists('username_exists')) {
		require_once(ABSPATH . WPINC . '/registration.php');
	}

	if (username_exists($username)) {
		GFCommon::log_debug(__METHOD__ . '(): Username already exists, generating a new one.');
		$i = 10000000;
		while (username_exists($username . $i)) {
			$i++;
		}
		$username = $username . $i;
		GFCommon::log_debug(__METHOD__ . '(): New username: ' . $username);
	};
	return $username;
}