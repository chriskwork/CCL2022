<!-- Blog index page -->


<?php get_header(); ?>


  <div class="blog-index container">

    <!-- Post searching form -->
    <form 
      role="search"
      method="get" 
      class="post-search-form" 
      action="<?php echo esc_url(home_url('/blog')); ?>"
    >

      <input
        id="search"
        class="post-search-input"
        type="search" 
        placeholder="무엇을 찾으세요?" 
        aria-label="search" 
        name="s" />

      <button type="submit" class="post-search-btn">검색</button>

    </form>

    <div class="blog-index-wrapper">

      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            
            get_template_part('template-parts/content', 'archive');
          }
        }
      ?>

      <!-- Posts pagination -->
      <?php the_posts_pagination(); ?>
      
    
    </div>
  </div>


<?php get_footer(); ?>