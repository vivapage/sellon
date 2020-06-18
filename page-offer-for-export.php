<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sellon
 */
if (!is_user_logged_in()) {
	$url = '/seller-registration/';
	wp_redirect($url);
	exit();
}


get_header();

?>

<main id="primary" class="site-main">
  <div class="container">

    <?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page');
			if (current_user_can('editor') || current_user_can('administrator')) {
				echo "<h2 class=\"error\">Администраторы сайта не могут добавлять заявки через эту форму</h2>";
			} else {
				gravity_form(5, false, false, false, '', true);
			}
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
  </div>
</main><!-- #main -->

<?php

get_footer();