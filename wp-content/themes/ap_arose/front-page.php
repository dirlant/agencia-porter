
<?php get_header(); ?>

  <div id="fullpage">

    <div class="container">
      <div class="section active col-md-12">
        <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/wire-frame-final-21-3.png" class="img-responsive"  style="margin: 0 auto">
      </div>

      <div class="section">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <img src="http://localhost/wp-agencia-porter/wp-content/uploads/2017/08/Captura-de-pantalla-2017-08-22-a-las-11.29.29-e1503412314331.png" class="img-responsive">
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

      <!-- seccion clientes -->
      <div class="section">
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
      </div>

      <!-- seccion contacto -->
      <div class="section">
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
      </div>

      <!-- seccion logo -->
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

  </div>

  <?php get_footer(); ?>
  <?php while(have_posts()): the_post(); ?>
    <p><?php //the_content() ?></p>
  <?php endwhile; ?>
