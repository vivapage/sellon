<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sellon
 */

get_header();
?>

<main id="primary" class="site-main">
  <header class="page-header">
    <div class="header-image"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fon-leads.jpg');">
    </div>
    <div class="header-title">
      <h1>ЗАЯВКИ НА ОПТОВЫЕ ПАРТИИ ТОВАРОВ</h1>
    </div>

  </header><!-- .page-header -->


  <div class="container">
    <header class="page-header">
      <?php
			the_archive_title('<h2 class="page-title">', '</h2>');
			?>
    </header><!-- .page-header -->
    <?php get_search_form(); ?>
    <div class="content">
      <?php get_sidebar(); ?>

      <?php if (have_posts()) : ?>
      <div class="page__content">

        <?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
					get_template_part('template-parts/content', 'leads_category');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
				?>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php

get_footer();