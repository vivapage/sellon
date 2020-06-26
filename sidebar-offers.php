<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sellon
 */
/*
if (!is_active_sidebar('sidebar-offers')) {
	return;
}
*/
?>

<aside id="secondary" class="widget-area">
  <section id="pods_widget_list-2" class="widget pods_widget_list">
    <h2 class="widget-title">Категории</h2>
    <nav class="cat-menu">
      <?php

			if (wp_is_mobile()) {

				echo '<select onchange="location = this.value;">';
				echo '<option value="" selected="selected">Выбрать категорию</option>';
				$custom_terms = get_terms('leads_category');

				foreach ($custom_terms as $custom_term) {
					wp_reset_query();
					$args = array(
						'post_type' => 'offers',
						'tax_query' => array(
							array(
								'taxonomy' => 'leads_category',
								'field' => 'slug',
								'terms' => $custom_term->slug,
							),
						),
					);

					$loop = new WP_Query($args);
					if ($loop->have_posts()) {

						echo '<option value="/offers/category/' . $custom_term->slug . '">' . $custom_term->name . '</option>';

						while ($loop->have_posts()) : $loop->the_post();

						endwhile;
					}
				}
				echo '</select>';
			} else {
				echo '<ul>';
				$custom_terms = get_terms('leads_category');

				foreach ($custom_terms as $custom_term) {
					wp_reset_query();

					$args = array(
						'post_type' => 'offers',
						'post_status' => 'published',
						'posts_per_page' => -1,
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' => 'leads_category',
								'field' => 'slug',
								'terms' => $custom_term->slug,
							),
						),
					);

					$loop = new WP_Query($args);
					if ($loop->have_posts()) {

						echo '<li><a href="/offers/category/' . $custom_term->slug . '">' . $custom_term->name . '</a></li>';


						while ($loop->have_posts()) : $loop->the_post();

						endwhile;
					}
				}
				echo '</ul>';
			}
			?>
    </nav>
  </section>
  <?php
	dynamic_sidebar('sidebar-offer');
	?>
</aside><!-- #secondary -->