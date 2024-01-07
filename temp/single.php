<!-- single post -->

<?php get_header(); ?>

<div class="blog-post-page-wrapper post-padding">

<!-- hero로 feat img 넣고 싶을 때 아래 활성화 -->
<!-- <?php echo get_the_post_thumbnail( $post_id, 'large' ); ?> -->

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
  

    
    <!-- 사이드바 -->
  
    <div class="blog-side-bar">
      <?php dynamic_sidebar('sidebar-1'); ?>
      
    </div>

    
    <!-- Comments -->
    <div class="blog-comments">
      <?php comments_template(); ?>
    </div>

  </div>


</div>



<?php get_footer(); ?>
