<!-- FOOTER 2 BLACK -->
<footer id="footer3" class="page-section pt-80 pb-50 footer2-black">
  <div class="container">
    <div class="row">

      <div class="col-md-3 col-sm-3 widget">
        <div class="logo-footer-cont">
          <a href="index.html">
            <img class="logo-footer" src="<?php echo bloginfo('template_directory') ?>/assets/images/logo.png" alt="logo">
          </a>
        </div>
        <div class="footer-2-text-cont">
          <address>
            Dr. Ing. h.c. F. Porsche AG <br>
            Porscheplatz 1
            <br>
            D - 70435 Stuttgart
          </address>
        </div>
        <div class="footer-2-text-cont">
          Telefon (0711) 911 - 0<br>
          Fax +49 (0) 711/ 911 - 25777
        </div>
      </div>

      <div class="col-md-3 col-sm-3 widget">
        <h4>Navigate</h4>
        <ul class="links-list a-text-cont">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Reviews</a></li>
          <li><a href="#">Archives</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>

      <div class="col-md-3 col-sm-3 widget">
        <h4>About us</h4>
        <ul class="links-list a-text-cont">
          <li><a href="#">Company</a></li>
          <li><a href="#">What we do</a></li>
          <li><a href="#">Help center</a></li>
          <li><a href="#">Terms of service</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="col-md-3 col-sm-3 widget">
        <h4>Useful links</h4>
        <ul class="links-list a-text-cont">
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Cookies policy</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-2-copy-cont clearfix">
      <!-- Social Links -->
      <div class="footer-2-soc-a right">
        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="#" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
      </div>

      <!-- Copyright -->
      <div class="left">
        <a class="footer-2-copy" href="<?php echo get_page_link(get_page_by_title("HOME")->ID); ?>" target="_blank">&copy; PORSCHE TODAY 2024</a>
      </div>


    </div>

  </div>
</footer>

<!-- BACK TO TOP -->
<p id="back-top">
  <a class="btn-back-top" href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>

</div><!-- End BG -->
</div><!-- End wrap -->

<?php
wp_footer();


?>

</body>

</html>