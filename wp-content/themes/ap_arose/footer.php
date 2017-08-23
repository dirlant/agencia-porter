

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
              <?php $sliders = get_field('sliders_clientes', 'option') ?>
              <div class="row" >
                <div id="feedbacks" class="owl-carousel owl-theme">
                  <?php for ($i=0; $i < count($sliders); $i = $i+3): ?>
                    <div class="feedback">
                        <!-- IMAGE -->
                      <div class="col-md-4">
                        <!-- i class=" icon_quotations"></i -->
                        <img src="<?php echo $sliders[$i]['url'] ?>" alt="">
                      </div>
                      <div class="col-md-4 ocultar">
                        <!-- i class=" icon_quotations"></i -->
                        <img src="<?php echo $sliders[$i+1]['url'] ?>" alt="">
                      </div>
                      <div class="col-md-4 ocultar">
                        <!-- i class=" icon_quotations"></i -->
                        <img src="<?php echo $sliders[$i+2]['url'] ?>" alt="">
                      </div>
                    </div>
                  <?php endfor; ?>
                </div>
              </div>
            <?php endif; ?>
          <?php endwhile; ?>

          <!-- seccion contacto -->
          <div class="row">
            <?php $telefono = get_field('telefono', 'option') ?>
            <div class="col-md-4 align-table height-contacto" style="background-color: #1A1A1A" >
              <a href="tel:<?php echo $telefono['icono'] ?>" target="_blank" class="align-table-cell">
                <img src="<?php echo $telefono['icono'] ?>" class="img-contacto">
              </a>
            </div>

            <?php $mail = get_field('correo', 'option') ?>
            <div class="col-md-4 align-table height-contacto" style="background-color: #333333; border: 1px solid black;">
              <a href="mailto:<?php echo $mail['correo'] ?>" target="_blank" class="align-table-cell">
                <img src="<?php echo $mail['icono'] ?>" class="img-contacto">
              </a>
            </div>

            <?php $ubicacion = get_field('ubicacion', 'option') ?>
            <div class="col-md-4 align-table height-contacto" style="background-color: #1A1A1A; border: 1px solid black;">
              <a href="<?php echo $ubicacion['ubicacion'] ?>" target="_blank" class="align-table-cell">
                <img src="<?php echo $ubicacion['icono'] ?>" class="img-contacto">
              </a>
            </div>
          </div>

          <!-- seccion logo -->
          <div class="row">
            <div class="col-md-2 col-md-offset-5">
              <a href="<?php echo get_site_url()?>">
                <img src="<?php echo get_field('logo', 'option') ?>" width="170"/>
              </a>
            </div>
            <div class="col-md-6 col-md-offset-3" style="text-align: center;" >
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
