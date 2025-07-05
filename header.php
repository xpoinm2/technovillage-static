<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="block-wrapper">
  <div class="block-container" data-aos="fade-up">

    <header class="site-header">
      <div class="container header-inner">
        <div class="site-logo">
          <?php
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
              the_custom_logo();
            } else { ?>
              <a href="<?php echo esc_url( home_url() ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"
                     alt="<?php bloginfo( 'name' ); ?>">
              </a>
          <?php } ?>
        </div>

        <nav class="main-nav">
          <?php wp_nav_menu( [
            'theme_location' => 'main-menu',
            'container'      => false,
            'fallback_cb'    => false,
            'menu_class'     => '',
          ] ); ?>
        </nav>

        <div class="messenger-icons" style="--messenger-icons-top: 5vh; --messenger-icons-right: 12vw;">
          <a href="https://wa.me/..." class="icon" aria-label="WhatsApp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt="WhatsApp">
          </a>
          <a href="https://t.me/..." class="icon" aria-label="Telegram">
            <img src="<?php echo get_template_directory_uri(); ?>/img/telegram.svg" alt="Telegram">
          </a>
                  </div>
          <div class="header-button-wrapper" style="--header-button-top: 5vh; --header-button-right: 7vw;">
            <a href="#contact-form" class="btn header-button">ОСТАВИТЬ ЗАЯВКУ</a>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/phone.png" class="header-photo" alt="">
        </div>
</header>
