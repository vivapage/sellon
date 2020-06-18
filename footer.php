<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sellon
 */

?>

<footer id="colophon" class="site-footer">
  <div class="site-info container">
    <?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'menu_id'        => 'footer-menu',
			)
		);
		?>

    <p><a href="<?php echo esc_url(home_url('/')); ?>privacy-policy/">Политика Конфиденциальности</a></p>
    <p>© Glomark 2020, Консалтинговое агентство в сфере экспорта</p>
    <p>305000, г. Курск, ул. Дзержинского, д. 9А, оф. 3. тел.: +7 (499) 112-42-90</p>

    <hr>
    <a href="/wp-login.php?action=logout">logout</a>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>