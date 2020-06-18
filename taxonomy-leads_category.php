<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sellon
 */
$posttype = get_post_type(get_the_ID());
get_header();
?>

<main id="primary" class="site-main">
  <header class="page-header">
    <div class="header-image"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/fon-leads.jpg');">
    </div>
    <div class="header-title">
      <?php if ($posttype == 'leads') :
        echo "<h1>ЗАЯВКИ НА ОПТОВЫЕ ПАРТИИ ТОВАРОВ</h1>";
      elseif ($posttype == 'offer') :
        echo "<h1>ПРЕДЛОЖЕНИЯ НА ОПТОВЫЕ ПАРТИИ ТОВАРОВ</h1>";
      endif;
      ?>


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
      <?php
      if ($posttype == 'leads') :
        get_sidebar('leads');
      elseif ($posttype == 'offer') :
        get_sidebar('offer');
      endif; ?>

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

          if ($posttype == 'leads') :
            get_template_part('template-parts/content', 'leads_category');
          elseif ($posttype == 'offer') :
            get_template_part('template-parts/content', 'offers_category');
          endif;


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