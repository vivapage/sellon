<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package sellon
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sellon_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'sellon_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sellon_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'sellon_pingback_header');


add_action('admin_head', 'remove_default_category_description');
function remove_default_category_description()
{
	global $current_screen;
	if ($current_screen->id == 'edit-leads_category') {
?>
<script type="text/javascript">
jQuery(function($) {
  $('textarea#description').closest('tr.form-field').remove();
});
</script>
<?php
	}
}

add_filter('get_the_archive_title', 'replaceCategoryName');
function replaceCategoryName($title)
{

	$title =  single_cat_title('', false);
	return $title;
}

function my_data($input_date)
{
	return date_i18n("d.m.Y", strtotime($input_date));
}



// function to add a custom admin stylesheet
function my_admin_style_sheet()
{
	echo '<style>
	#gravityforms-update, #gravityforms-phone-extension-update, #gravityformsadvancedpostcreation-update, #gravityformsuserregistration-update, #gravityview-importer-update, #pods-gravity-forms-update {display: none;}
	.media-modal {width: 60%; height: 80%; }
	</style>';
}

add_action('admin_head', 'my_admin_style_sheet');