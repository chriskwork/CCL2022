<?php get_header(); ?>

<div class="blog-index post-padding">

  <div class="container">

  <article>
  <?php 
    if(have_posts()){
      while(have_posts()){
        the_post();
        
        get_template_part('template-parts/content', 'archive');
      }
    }
  ?>
  </article>

  </div>
</div>


<?php get_footer(); ?>
