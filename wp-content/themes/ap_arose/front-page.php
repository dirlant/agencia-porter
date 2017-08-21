
<?php get_header(); ?>

  <div id="fullpage">

    <div class="container">
      <div class="section active">
        <p>Seccion 1</p>
      </div>

      <div class="section">
        <div class="col-md-12">
          <div style="background-color: #ccc; border: 1px solid black; height:400px; width: 100%">
            <p>seccion de animacion</p>
          </div>
        </div>
      </div>

      <div class="section">
          <div class="row" >
            <div class="col-md-4">
              <div style="background-color: #ccc; border: 1px solid black; height:300px; width: 100%">

              </div>
            </div>
            <div class="col-md-4">
              <div style="background-color: #ccc; border: 1px solid black; height:300px; width: 100%">

              </div>
            </div>
            <div class="col-md-4">
              <div style="background-color: #ccc; border: 1px solid black; height:300px; width: 100%">

              </div>
            </div>

          </div>
        </footer>
      </div>

      <div class="section">
        <div class="row">
          <div class="col-md-4" style="background-color: #ccc; border: 1px solid black;">
            <img src="https://placeholdit.co//i/292x292?&bg=ccc&fc=fff%22" class="img-contacto">
          </div>
          <div class="col-md-4" style="background-color: #ccc; border: 1px solid black;">
            <img src="https://placeholdit.co//i/292x292?&bg=ccc&fc=fff%22" class="img-contacto">
          </div>
          <div class="col-md-4" style="background-color: #ccc; border: 1px solid black;">
            <img src="https://placeholdit.co//i/292x292?&bg=ccc&fc=fff%22" class="img-contacto">
          </div>
        </div>
      </div>

      <div class="section">
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
      </div>


    </div>
    <?php get_footer(); ?>

  </div>

  <?php while(have_posts()): the_post(); ?>
    <p><?php //the_content() ?></p>
  <?php endwhile; ?>
