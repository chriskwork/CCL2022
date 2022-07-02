<div class="blog-article-wrapper">

  <div class="blog-article">
    <h1><?php the_title(); ?></h1>
    
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
