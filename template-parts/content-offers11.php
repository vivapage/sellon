<?php

/**
 * Template part for displaying leads
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
    ?>
  </header><!-- .entry-header -->
  <div class="entry-content">
    <?php
    the_content();
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <a href="<?php the_permalink(); ?>">Открыть Заявку » </a>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->