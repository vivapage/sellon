<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sellon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>

  <script src="https://use.fontawesome.com/c55a9bae97.js"></script>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <header id="masthead" class="site-header">
      <div class="header__container">
        <div class="header__container _row">
          <div class="header__container _element">
            <div class="logo">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                  src="<?php echo get_template_directory_uri(); ?>/images/logo.svg"
                  alt="<?php bloginfo('name'); ?>"></a>
            </div>
          </div>
          <div class="header__container _element">
            <nav id="site-navigation" class="main-navigation">
              <button class="menu-toggle" aria-controls="primary-menu"
                aria-expanded="false"><?php esc_html_e('Primary Menu', 'sellon'); ?></button>
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-1',
                  'menu_id'        => 'primary-menu',
                )
              );
              ?>
            </nav><!-- #site-navigation -->
          </div>
          <div class="header__container _element">
            <div class="language">
              language
            </div>
          </div>
        </div>
      </div>
    </header><!-- #masthead -->