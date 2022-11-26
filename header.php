<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- meta tags -->
    <meta name="description" content="스페인어 혼자 공부하신다고요? 제가 도와드릴게요." />
    <meta name="keywords" content="스페인어, 스페인어표현, 스페인여행, 스페인어독학, 스페인일상, 원어민표현" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="카페콘레체 - 스페인어 독학하기" />
    <meta property="og:url" content="https://cafeconlecheesp.com" />
    <meta property="og:image" content="https://cafeconlecheesp.com/wp-content/themes/CCL2022/assets/images/social/wp-og-image-thumbnail.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- 구글 애드센스 자동광고 코드 -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7513179138355363"
     crossorigin="anonymous"></script>

    <?php wp_head(); ?>
  </head>
  <body class="">

    <header>
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
            <li><a href="https://caconle.blogspot.com/" class="nav-link" target="_blank">블로그</a></li>
            <!-- <li><a href="<?php echo get_home_url(); ?>/blog" class="nav-link">블로그</a></li> -->
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










    