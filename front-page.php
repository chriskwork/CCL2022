<?php get_header(); ?>


<!-- get_search_form(); -->


<!-- #####################
CONTENTS HERE
######################### -->

<!-- ########### Intro Section -->

<main>
  <section class="top-section-img">
    <div class="ccl-hero intro container">
      <div class="intro-text">
        <h1 class="welcome alphabet">¡BIENVENIDOS!</h1>
        <p>
          이 사이트는 스페인어를 혼자 공부하시는 분들께 도움을 드리기 위한 목적으로 만들어졌습니다.
        </p>
        <a href="<?php echo get_home_url(); ?>/grammars/" class="btn-primary btn-call-action">
          문법 공부 시작하기
        </a>
      </div>
      <img class="intro-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/intro-image.svg" alt="">
    </div>
  </section>

  <!-- ########### Cards Section -->
  
  <section class="cards">
    <div class="ccl-cards container">

      <div class="ccl-card">
        <div class="ccl-card-icon">
          <img class="intro-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/book.svg" alt="">
        </div>
        <div class="ccl-card-text">
          <h4><a href="<?php echo get_home_url(); ?>/grammars">#스페인어 문법</a></h4>
          <p>
            알쏭달쏭한 스페인어 문법을 최대한 쉽게 설명하기 위해 노력하고 있습니다.
          </p>
        </div>
      </div>

      <div class="ccl-card">
        <div class="ccl-card-icon">
          <img class="intro-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/theme-word.svg" alt="">
        </div>
        <div class="ccl-card-text">
          <h4><a href="<?php echo get_home_url(); ?>/vocabulary">#테마별 단어</a></h4>
          <p>
            현재 총 34개 테마, 약 2174개 단어가 테마별로 나뉘어서 정리되어 있습니다.
          </p>
        </div>
      </div>

      <div class="ccl-card">
        <div class="ccl-card-icon">
          <img class="intro-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/download.svg" alt="">
        </div>
        <div class="ccl-card-text">
          <h4><a href="<?php echo get_home_url(); ?>/downloads">#다운로드</a></h4>
          <p>
            모든 자료는 PDF 파일로도 만들어져 업로드 되어있습니다.
          </p>
        </div>
      </div>

      <div class="ccl-card">
        <div class="ccl-card-icon">
          <img class="intro-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/blog.svg" alt="">
        </div>
        <div class="ccl-card-text">
          <h4><a href="https://caconle.blogspot.com/" target="_blank">#블로그</a></h4>
          <p>
            스페인 관련 이야기, 일상 등 개인적인 생각을 모아놓은 공간입니다.
          </p>
        </div>
      </div>

    </div>
  </section>

<!-- ########### 블로그 최신 글 섹션 -->

  


<!-- 카페콘레체는.. (About) -->

  <section class="about section-padding">
    <div class="container">
      <h2 class="section-header">카페콘레체는..</h2>
      <p>
        서른이 넘어 시작한 스페인어는 너무나도 어려웠습니다.<br />
        인터넷에 스페인어 공부와 관련된 자료도 은근히 많지 않았기 때문에, '내가 공부한 것들을 정리해서 스페인어를 공부하려는 다른 분들과 공유해야겠다'라는 마음으로 시작하게 되었습니다.<br />
        도움이 되셨다면, 커피 한 잔 사주세요! ☕
      </p>

      <a href="https://www.buymeacoffee.com/cafeconleche" target="_blank">
        <img class="buymeacoffee-banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/orange-button.png" alt="">
    </a>
    </div>
  </section>

</main>

<!-- footer -->

<?php get_footer(); ?>
