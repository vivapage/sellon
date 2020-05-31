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

get_header();
?>

<main id="primary" class="site-main">
	<header class="page-header">
		<div class="header-image contact" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/contuct-fon.jpg');">
		</div>

	</header><!-- .page-header -->
	<div class="container">
		<div class="contact_row">
			<div class="contact_col">
				<h2>СВЯЗАТЬСЯ С НАМИ</h2>
				<?php gravity_form(3, false, false, false, '', true, 12); ?>
			</div>
			<div class="contact_col">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content-contact');

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>

	</div>
</main><!-- #main -->

<?php

get_footer();
