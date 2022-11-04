<div class="blog-article-wrapper">

  <div class="blog-article">
    <h2><?php the_title(); ?></h2>
    
    <div class="blog-meta-data">
      <span><?php the_tags(''); ?>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
      <span><?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;</span>
      <span><?php comments_number(); ?></span>
    </div>

    <div class="blog-content">
      <?php the_content(); ?>
    </div>
  </div>

  

</div>
