<footer class="section-padding">
  <div class="container">
    <div class="social-media-links">
      <a class="" href="https://www.youtube.com/channel/UCYZ2YcGbV97dfbBA20QZwrg" target="_blank">Youtube</a>
      <a class="" href="" target="_blank">Twitter</a>
      <a class="" href="https://www.facebook.com/cafeconlechefb" target="_blank">Facebook</a>
    </div>
  
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