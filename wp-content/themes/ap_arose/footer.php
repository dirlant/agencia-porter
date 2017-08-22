

  <!-- =========================
              FOOTER
   ============================== -->
  <?php if(!is_front_page()): ?>
    <div class="container">
        <footer class="footer-section footer-2 ">
          <?php while(have_posts()): the_post(); ?>
            <?php
              global $post;
              $slug = $post->post_name;
            ?>

            <?php  if ($slug != 'clientes'): ?>
              <!-- seccion clientes -->
              <div class="row" >
                <div class="col-md-4">
                  <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/cliente-21.png" alt="">
                </div>
                <div class="col-md-4">
                  <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/wire-frame-final-21-4.png" alt="">
                </div>
                <div class="col-md-4">
                  <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/cliente-21.png" alt="">
                </div>

              </div>
            <?php endif; ?>
          <?php endwhile; ?>

          <!-- seccion contacto -->
          <div class="row">
            <div class="col-md-4 align-table height-contacto" style="background-color: #1A1A1A" >
              <a href="#" class="align-table-cell">
                <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/contacto-21.png" class="img-contacto">
              </a>
            </div>
            <div class="col-md-4 align-table height-contacto" style="background-color: #333333; border: 1px solid black;">
              <a href="#" class="align-table-cell">
                <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/contacto-21.png" class="img-contacto">
              </a>
            </div>
            <div class="col-md-4 align-table height-contacto" style="background-color: #1A1A1A; border: 1px solid black;">
              <a href="#" class="align-table-cell">
                <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/contacto-21.png" class="img-contacto">
              </a>
            </div>
          </div>


          <!-- seccion logo -->

          <div class="row footer-content">
            <div class="col-md-2 col-md-offset-5">
              <a href="<?php echo get_site_url()?>">
                <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/logo-01.png" style?""/>
              </a>
            </div>
            <div class="col-md-8 col-md-offset-3" >
              <p style="color:#a7a6a4;">Copyright © <?php echo date('Y') ?> Porter Advertising, Todos los Derechos Reservados.</p>
            </div>
          </div>

          <!-- SCROLL UP
          <div class="scroll-up">
            <a class="theme-color-bg" href="#home"><i class="fa fa-angle-up"></i></a>
          </div>
          -->


          <!-- SCROLL UP
          <div class="scroll-up">
            <a class="theme-color-bg" href="#home"><i class="fa fa-angle-up"></i></a>
          </div>
          -->

        </footer>
      </div>
    <!-- /END FOOTER -->
  <?php endif; ?>
  <!-- =========================
          SCRIPTS
     ============================== -->
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery-migrate-3.0.0.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/modernizr.custom.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
  <!--
  <script src="<?php echo get_template_directory_uri()?>/js/smoothscroll.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.scrollTo.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.localScroll.min.js"></script>
  -->
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
  <!--<script src="<?php echo get_template_directory_uri()?>/js/slick.js" type="text/javascript" charset="utf-8"></script>-->
  <script src="<?php echo get_template_directory_uri()?>/js/scrolloverflow.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo get_template_directory_uri()?>/js/jquery.fullPage.js" type="text/javascript" charset="utf-8"></script>

  <!-- Codigo JQuery propio -->
  <script src="<?php echo get_template_directory_uri()?>/js/script.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>
