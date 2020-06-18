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
  <div class="repeating-content">
    <div class="indent"></div>
    <div class="gray-block">
      <h4>Для связи с продавцом, заполните форму</h4>
      <a href="" class="button-link popmake-contact-seller">Открыть</a>

    </div>
    <div class="repeating-block">
      Если Вы хотите найти продавцов оптовых партий товаров — разместите свой <a
        href="/request-for-quotation/">ЗАПРОС</a> в эту товарную группу, или любую
      другую и продавцы предложат Вам свои товары на выбор.</div>
    <div class="repeating-block">Если же Вы желаете продать оптом свои товары, сформируйте экспортную <a
        href="#">ОФЕРТУ</a> на партию
      товара, и мы предложим Вашу оферту потенциальным покупателям.</div>

  </div>
  <footer class="entry-footer">
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->