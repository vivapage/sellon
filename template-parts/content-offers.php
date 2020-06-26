<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sellon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
		endif;

		?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <div class="briefly">
      <div><span class="item-list">Страна покупателя:</span>
        <?php $offer_country = get_post_meta(get_the_id(), 'offer_country');
				print_r($offer_country['name']);
				?>
      </div>
      <div><span class="item-list">Дата создания оферты:</span>
        <?php $offer_date = get_post_meta(get_the_id(), 'offer_date');
				print_r($offer_date[0]);
				?>
      </div>
      <div><span class="item-list">Срок действия оферты:</span>
        <?php $validity_date = get_post_meta(get_the_id(), 'validity_date');
				print_r($validity_date[0]);
				?>
      </div>
      <div><span class="item-list">Объем товара:</span>
        <?php $product_volume = get_post_meta(get_the_id(), 'product_volume');
				print_r($product_volume[0]);
				?>
      </div>
      <div><span class="item-list">Цена за единицу товара:</span>
        <?php $offer_pric = get_post_meta(get_the_id(), 'offer_price');
				if (!empty($offer_pric[0])) {
					print_r($offer_pric[0]);
					$offer_currency = get_post_meta(get_the_id(), 'offer_currency');
					echo " ";
					print_r($offer_currency[0]);
					$offer_quantity = get_post_meta(get_the_id(), 'offer_quantity');
					echo " - ";
					print_r($offer_quantity[0]);
					$offer_units = get_post_meta(get_the_id(), 'offer_units');
					echo " ";
					print_r($offer_units[0]);
				}
				?>
      </div>

    </div>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <a href="<?php the_permalink(); ?>">Открыть Заявку » </a>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->