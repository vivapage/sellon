<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sellon
 */
$posttype = get_post_type(get_the_ID());

$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
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
      elseif ($posttype == 'offers') :
        get_sidebar('offers');
      endif; ?>

      <?php if (have_posts()) : ?>
      <div class="page__content">

        <?php
        /* Start the Loop */


        $cat = $term->slug; // will show the slug




        if ($posttype == 'leads') :
          while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'leads_category');
          endwhile;
        elseif ($posttype == 'offers') :
          while (have_posts()) :
            the_post();
          //get_template_part('template-parts/content', 'offers_category');
          endwhile;
        endif;


        /*

        if ($posttype == 'leads') :
          $args = array(
            'post_type' => 'leads',
            'leads_category' => $cat,

          );
          $query = new WP_Query($args);
          while ($query->have_posts()) {
            $query->the_post();

            get_template_part('template-parts/content', 'leads_category');
          }
          wp_reset_postdata();

        endif;

*/


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