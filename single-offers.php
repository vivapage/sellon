<?php

/**
 * The template for displaying all single leads
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="post__container">
    <div class="container">
      <?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>
      <div class="content">

        <?php get_sidebar('offers'); ?>
        <section>
          <?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content-offer');


						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'sellon') . '</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'sellon') . '</span>',
							)
						);

					endwhile; // End of the loop.
					?>
        </section>
      </div>
    </div>
  </div>
</main><!-- #main -->


<?php
get_footer();