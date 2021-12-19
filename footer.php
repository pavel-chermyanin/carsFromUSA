 <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        
        <?php the_custom_logo(); ?>

        <div class="social footer__social">
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/telegram.svg" alt="telegram icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/whatsapp.svg" alt="whatsapp icon">
          </a>
          <a class="social__link" href="#">
            <img class="social__img" src="<?php bloginfo("template_url"); ?>/assets/images/facebook.svg" alt="facebook icon">
          </a>
        </div>
        <a class="footer__copy" href="#">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </footer> 

  <?php wp_footer(); ?>


</body>

</html>