
<?php get_header(); ?>


  <div class="blog-index post-padding">

  <div class="container">

    
    <?php 
      if(have_posts()){
        while(have_posts()){
          the_post();
          
          get_template_part('template-parts/content', 'archive');
        }
      }
    ?>

    <!-- 포스트 페이지네이션 -->
    <?php the_posts_pagination(); ?>
    
  
  </div>
  </div>


<?php get_footer(); ?>