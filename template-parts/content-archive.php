<article class="blog-article-box">

<a class="blog-thumb-img-link" href="<?php the_permalink(); ?>">  
  <img class="blog-thumb-img" src="<?php the_post_thumbnail_url('medium'); ?>" alt="블로그 포스트 이미지" />
</a>

  <div class="blog-post">
    <h3 class="blog-title">
      <a href="<?php the_permalink(); ?>">  
        <?php the_title(); ?>
      </a>
    </h3>
      
    <div class="blog-meta-data">
      <?php the_tags(''); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php comments_number(); ?>
    </div>
  
    <div class="blog-excerpt">
      <?php the_excerpt(); ?>
      <div class="blog-read-more-btn-box">
        <span> &raquo; </span>
        <a href="<?php the_permalink(); ?>" class="blog-read-more-btn">계속 읽기</a>
      </div>
    </div>
  </div>

</article>
