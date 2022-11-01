<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
  </head>
  <body>

    <header class="">
      <?php
        if(function_exists('the_custom_logo')) {
          // the_custom_logo();

          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
      ?>

      <nav class="container">
        <a class="navbar-brand" href="<?php print get_home_url(); ?>">
          <img id="logo" src="<?php echo $logo[0]; ?>" alt="카페콘레체 로고">
        </a>

        <div class="nav-menu">
          <ul>
            <li><a href="<?php echo get_home_url(); ?>/grammars" class="nav-link">스페인어 문법</a></li>
            <li><a href="<?php echo get_home_url(); ?>/vocabulary" class="nav-link">테마별 단어</a></li>
            <li><a href="<?php echo get_home_url(); ?>/downloads" class="nav-link">다운로드</a></li>
            <li><a href="<?php echo get_home_url(); ?>/blog" class="nav-link">블로그</a></li>
            <li class="mode-btn-box">
              <img class="mode-toggle-btn" src="<?php echo get_template_directory_uri(); ?>/assets/images/layout/moon.svg" alt="다크 모드 전환 버튼" />
            </li>
          </ul>
        </div>

        <div class="hamburger">
          <img class="navBtn" src="<?php echo get_template_directory_uri(); ?>/assets/images/layout/nav-menu.svg" alt="mobile nav button" />
          
        </div>
      </nav>

      
    
    </header>










    