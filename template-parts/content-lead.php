<?php

/**
 * Template part for displaying leads
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h3 class="entry-title single"><?php the_title(); ?></h3>
  </header><!-- .entry-header -->
  <div class="entry-content single">
    <?php
    the_content();
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">

  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->