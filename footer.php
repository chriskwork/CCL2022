<footer class="section-padding">

  <button id="scrollToTopBtn" onclick="scrollToTop()">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
  </button>


  <div class="container">
    <!-- <div class="social-media-links">
      <a class="" href="https://www.youtube.com/channel/UCYZ2YcGbV97dfbBA20QZwrg" target="_blank">Youtube</a>
      <a class="" href="" target="_blank">Twitter</a>
      <a class="" href="https://www.facebook.com/cafeconlechefb" target="_blank">Facebook</a>
    </div> -->

    
    <ul class="sns-wrapper">

      <a class="sns-youtube" href="https://www.youtube.com/@cafe-con-leche" target="_blank">
        <li class="icon youtube">
          <span class="tooltip">Youtube</span>
          
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
        </li>
      </a>

      <a class="sns-twitter" href="" target="_blank">
        <li class="icon twitter">
          <span class="tooltip">X</span>
        
            <svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="100px" height="100px"><path d="M 5.9199219 6 L 20.582031 27.375 L 6.2304688 44 L 9.4101562 44 L 21.986328 29.421875 L 31.986328 44 L 44 44 L 28.681641 21.669922 L 42.199219 6 L 39.029297 6 L 27.275391 19.617188 L 17.933594 6 L 5.9199219 6 z M 9.7167969 8 L 16.880859 8 L 40.203125 42 L 33.039062 42 L 9.7167969 8 z"/></svg>
          
        </li>
      </a>

    </ul>
    
  
    <p class="text-14">&copy;<span id="year"></span> 카페콘레체</p>

  </div>
</footer>

<!-- Javascript files and code -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<script>
  const yearElement = document.querySelector('#year');
  const year = new Date().getFullYear();
  yearElement.textContent = year;
</script>


<?php wp_footer(); ?>

</body>
</html>