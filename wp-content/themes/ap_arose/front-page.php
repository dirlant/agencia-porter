
<?php get_header(); ?>

  <div id="fullpage">

    <div class="container">
      <div id="animacion" class="section active col-md-12">
        <?php
          $pictures = get_field('animacion', 'option');
          $count = count($pictures) - 1;
          $i =  rand( 0 , $count);
        ?>
        <img id="img" src="<?php echo $pictures[$i]['gift'] ?>" class="img-responsive">
      </div>

      <div class="section">
        <div class="row" style="margin-top:80px;">
          <div class="col-md-10 col-md-offset-1">

            <video id="banner"  class="banner-size" autoplay >
              <source src="<?php echo get_field('banner', 'option') ?>">
              Your browser does not support the video tag.
            </video>
          </div>
          <?php
            $args = array(
              'parent' => 0,
            );

            $query = get_categories($args)
          ?>
          <div class="col-md-12">
            <ul class="pf-filter">
            <?php foreach ($query as $key): ?>

              <a href="<?php echo $category_link = get_category_link( $key->cat_ID ) ?>">
                <li class="btn-lines"> <?php echo $key->name ?> </li>
              </a>
            <?php endforeach; ?>
          </ul>
          </div>
        </div>
      </div>


      <?php while(have_posts()): the_post(); ?>
        <?php the_content() ?>
      <?php endwhile; ?>

      <!-- seccion clientes -->
      <div class="section">
        <div class="row" >
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

        </div>
      </div>

      <!-- seccion contacto -->

      <div class="section">
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
      </div>

      <!-- seccion logo -->
      <div class="section">
        <div class="row footer-content logo-footer">
          <div class="col-md-2 col-md-offset-5">
            <a href="<?php echo get_site_url()?>">
              <img src="<?php echo get_field('logo', 'option') ?>"/>
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
      </div>
    </div>

  </div>

  <?php get_footer(); ?>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $('#header-menu').hide();
    });
  </script>
