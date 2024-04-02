<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_field('title_title')?></title>
    <link rel="stylesheet" href="./css/main.css" />
    <script
      src="https://kit.fontawesome.com/a6726e13c6.js"
      crossorigin="anonymous"
    ></script>
    <?php wp_head() ?>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <a href="" class="branding"><img src="<?php echo get_field('header_logo')?>" alt="" /></a>
          <div class="header__nav">
            <ul class="nav">
              <li><a href="#home"><?php echo get_field('header_nav')?></a></li>
              <li><a href="#services"><?php echo get_field('header_nav_2')?></a></li>
              <li><a href="#projects"><?php echo get_field('header_nav_3')?></a></li>
              <li><a href="#contacts"><?php echo get_field('header_nav_4')?></a></li>
              <ul class="social">
                <li id="email">
                  <a href=""><i class="<?php echo get_field('footer_email')?>"></i></a>
                </li>
                <li id="twitter">
                  <a href=""><i class="<?php echo get_field('footer_twitter')?>"></i></a>
                </li>
                <li id="facebook">
                  <a href=""><i class="<?php echo get_field('footer_facebook')?>"></i></a>
                </li>
              </ul>
            </ul>

            <a href=""><img src="<?php echo get_field('header_logo')?>" alt="" /></a>
          </div>
          <div class="toggle__menu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>