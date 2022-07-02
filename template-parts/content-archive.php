<article class="blog-article-box">

  <img class="blog-thumb-img" src="<?php the_post_thumbnail_url('medium'); ?>" alt="블로그 포스트 이미지" />

  <div class="blog-post">
    <h2 class="blog-title">
      <a href="<?php the_permalink(); ?>">  
        <?php the_title(); ?>
      </a>
    </h2>
      
    <div class="blog-meta-data">
      <?php the_tags(''); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php comments_number(); ?>
    </div>
  
    <div class="blog-excerpt">
      <?php the_excerpt(); ?>
      <span> &raquo; </span>
      <a href="<?php the_permalink(); ?>" class="blog-read-more-btn">계속 읽기</a>
    </div>
  </div>

</article>
