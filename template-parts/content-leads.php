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

		if ('post' === get_post_type()) :
		?>
    <div class="entry-meta">
      <?php
				sellon_posted_on();
				sellon_posted_by();
				?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <div class="briefly">
      <div><span class="item-list">Страна покупателя:</span>
        <?php $leads_country = get_post_meta(get_the_id(), 'leads_country');
				print_r($leads_country['name']);
				?>
      </div>
      <div><span class="item-list">Дата создания заявки:</span>
        <?php $leads_date = get_post_meta(get_the_id(), 'leads_date');
				print_r($leads_date[0]);
				?>
      </div>
      <div><span class="item-list">Объем закупки:</span>
        <?php $amount = get_post_meta(get_the_id(), 'amount');
				if (!empty($amount[0])) {
					print_r($amount[0]);
					$units = get_post_meta(get_the_id(), 'units');
					echo " ";
					print_r($units[0]);
				}
				?>
        <?php $wholesale = get_post_meta(get_the_id(), 'wholesale');
				if (!empty($wholesale[0])) {
					echo "Оптовые закупки";
				}
				?>
        <?php $factory = get_post_meta(get_the_id(), 'factory');
				if (!empty($factory[0])) {
					echo "Производственная линия или завод";
				}
				?>
      </div>
      <div><span class="item-list">Условия поставки:</span>
        <?php $delivery_basis = get_post_meta(get_the_id(), 'delivery_basis');
				print_r($delivery_basis[0]);
				?>
      </div>
    </div>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <a href="<?php the_permalink(); ?>">Открыть Заявку » </a>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->