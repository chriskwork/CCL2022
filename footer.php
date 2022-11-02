<footer class="section-padding">
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

      <a class="sns-instagram" href="https://www.instagram.com/coffii__milk" target="_blank">
        <li class="icon instagram">
          <span class="tooltip">Instagram</span>
          
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
        </li>
      </a>

      <a class="sns-twitter" href="" target="_blank">
        <li class="icon twitter">
          <span class="tooltip">Twitter</span>
        
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
          
        </li>
      </a>
      
      <a class="sns-facebook" href="https://www.facebook.com/cafeconlechefb" target="_blank">
        <li class="icon facebook">
          <span class="tooltip">Facebook</span>
        
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#cfcfcf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
          
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