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
    <div class="header-image services"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/services-fon.jpg');">
      <div class="container">
        <div class="services-header">
          <h1>наши<br />сервисы</h1>
        </div>
      </div>
    </div>

  </header><!-- .page-header -->
  <div class="container">

    <?php
    while (have_posts()) :
      the_post();

      get_template_part('template-parts/content-nonehead');

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