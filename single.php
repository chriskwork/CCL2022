<!-- single post -->

<?php get_header(); ?>

<div class="blog-index">

  <div class="container">
    
    <article>
    <?php 
      if(have_posts()){
        while(have_posts()){
          the_post();
          
          get_template_part('template-parts/content', 'article');
        }
      }
    ?>
    </article>
  
    <br />
    <hr />
    <br />
    <!-- 사이드바 -->
  
    <div class="blog-side-bar">
      <?php dynamic_sidebar('sidebar-1'); ?>
    </div>

    <br />
    <hr />
    <br />
    
    <!-- Comments -->
    <div class="blog-comments">
      <?php comments_template(); ?>
    </div>

  </div>


</div>



<?php get_footer(); ?>
