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
    <div class="header-image leads"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fon-leads.jpg');">
    </div>
    <div class="header-title">
      <h1>ЗАЯВКИ НА ОПТОВЫЕ ПАРТИИ ТОВАРОВ</h1>
    </div>

  </header><!-- .page-header -->
  <div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    <?php get_search_form(); ?>

    <div class="content">
      <?php get_sidebar('leads'); ?>
      <?php if (have_posts()) : ?>
      <div class="page__content">
        <?php
        /* Start the Loop */
        while (have_posts()) :
          the_post();
          get_template_part('template-parts/content', get_post_type());
        endwhile;
        the_posts_pagination();
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