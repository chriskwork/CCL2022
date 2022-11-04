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
          <h4><a href="<?php echo get_home_url(); ?>/blog">#블로그</a></h4>
          <p>
            스페인 관련 이야기, 일상 등 개인적인 생각을 모아놓은 공간입니다.
          </p>
        </div>
      </div>

    </div>
  </section>

<!-- ########### 블로그 최신 글 섹션 -->

  <section class="blog section-padding">
    <div class="container">

      <div class="section-header">
        <h2>블로그 최신 글</h2>
        <!-- <a class="link-underline" href="<?php echo get_home_url(); ?>/blog">글 더보기 &raquo;</a> -->
      </div>

      <div class="blog-wrapper">
        <!-- 블로그 최근 글 5개 불러오기 -->
        <?php
  
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 6
          ));
  
          while($homepagePosts -> have_posts()){
            $homepagePosts -> the_post(); ?>
  
              <div class="blog-card">

                <div class="blog-card-thumb-img">
                  <div class="post-category">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    <p>
                      <?php echo get_the_category_list(' '); ?>
                    </p>
                  </div>

                  <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail( $post_id, 'large' ); ?>
                  </a>
                </div>

                <div class="blog-card-data">
                  <h4>
                    <a href="<?php the_permalink(); ?>">
                      <?php echo wp_trim_words(get_the_title(), 5); ?>
                    </a>
                  </h4>

                  <p class="blog-card-date"><?php the_time('Y. m. j'); ?></p>

                  <p class="blog-card-post">
                    <?php echo wp_trim_words(get_the_content(), 20); ?>

                    <a href="<?php the_permalink(); ?>" class="read-more">계속 읽기</a>
                  </p>


                </div>


              </div>
            
  
          <?php  
          }
          wp_reset_postdata();
        ?>
  
      </div>

      <div class="see-all-posts">
        <a href="<?php echo get_home_url(); ?>/blog">
          <strong>블로그 글 전체보기</strong>
          <img class="underline-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/underline.svg" alt="" />
        </a>
      </div>
    </div>
  </section>


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
