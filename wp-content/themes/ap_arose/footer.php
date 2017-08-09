  <section class="regular slider">
    <?php $sliders = get_field('sliders_clientes', 'option') ?>
    <?php for ($i=0; $i < count($sliders); $i++): ?>
      <div>
        <img src="<?php echo $sliders[$i]['url']?>">
      </div>
    <?php endfor; ?>
  </section>

  <!-- =========================
              FOOTER
   ============================== -->
  <footer class="footer-section footer-2">
    <div class="row show-grid contacto">
      <div class="col-xs-6 col-sm-4"><img src="https://placeholdit.co//i/500x500?&bg=fff&fc=000%22" width="100%"></div>
      <div class="col-xs-6 col-sm-4"><img src="https://placeholdit.co//i/500x500?&bg=ccc&fc=000%22" width="100%"></div>
      <div class="col-xs-6 col-sm-4"><img src="https://placeholdit.co//i/500x500?&bg=fff&fc=000%22" width="100%"></div>
    </div>
    <div class="row footer-content">
      <div class="col-md-6 col-md-offset-3">
        <a href="<?php echo get_site_url()?>">
          <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/logo-01.png" alt="logo" />
        </a>
      </div>
      <div class="col-md-6 col-md-offset-3" >
        <p style="color:#a7a6a4;">Copyright © <?php echo date('Y') ?> Porter Advertising, Todos los Derechos Reservados.</p>
      </div>
    </div>

    <!-- SCROLL UP
    <div class="scroll-up">
      <a class="theme-color-bg" href="#home"><i class="fa fa-angle-up"></i></a>
    </div>
    -->

  </footer>
  <!-- /END FOOTER -->

  <!-- =========================
          SCRIPTS
     ============================== -->
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery-migrate-3.0.0.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/modernizr.custom.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/smoothscroll.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.localScroll.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/animated-headline.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/parallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.nav.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/matchMedia.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.fitvids.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.countTo.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/nivo-lightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/classie.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.ajaxchimp.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/pathLoader.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/menu.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/custom.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
</body>

<script type="text/javascript">
  $(document).on('ready', function() {
    $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1
    });
  });
</script>

</html>
