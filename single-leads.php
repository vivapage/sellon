<?php

/**
 * The template for displaying all single leads
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="post__container">
    <div class="container">
      <div class="content">
        <?php get_sidebar(); ?>

        <?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content-lead');

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'sellon') . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'sellon') . '</span> <span class="nav-title">%title</span>',
						)
					);

				endwhile; // End of the loop.
				?>
      </div>
    </div>
  </div>
</main><!-- #main -->


<?php
get_footer();