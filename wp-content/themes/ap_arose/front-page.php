<?php get_header(); ?>

    <!-- banner-bottom -->
    <section id="about" class="banner">
        <div class="container">
          <div class="clearfix"> </div>
          <!-- <div class="cd-intro"> -->
          <div class="cd-headline clip">
            <h1><?php the_title() ?></h1>
            <span>I am</span>
            <span class="cd-words-wrapper">
              <b class="is-visible">Porter</b>
              <b>Porter 2</b>
              <b>Porter 3</b>
            </span>
          </div>
          <!-- </div> -->
        </div>
    </section>
    </header>
    <!-- /END HEADER -->

 <!-- =========================
     PORTFOLIO
============================== -->
    <section class="xen-pad" id="portfolio">

      <div class="container fluid nopadding">
          <div class="row">
            <?php
              $categorias = get_categories(array(
                'orderby' => 'name',
                'parent'  => 0
              ));

            ?>
            <!--
              <pre><?php print_r($categorias) ?></pre>
            -->
       <!-- PORTFOLIO ITEMS START -->
        <div class="col-md-12">

          <!-- START PORTFOLIO BUTTONS -->
          <ul class="pf-filter">
            <li class="btn-lines" data-filter="*">TODOS</li>
            <?php foreach ($categorias as $key): ?>
              <li class="btn-lines" data-filter=".<?php echo $key->cat_ID ?>"><?php echo $key->name ?></li>
            <?php endforeach; ?>
          </ul>
          <!-- END PORTFOLIO BUTTONS -->

          <?php
            $args = array(
              'post_type' => 'portfolio',
              'posts_per_page' => -1,
              'order_by' => 'title',
              'order' => 'ASC'
            );
            $query = new WP_Query($args);
          ?>

          <!--
            <pre><?php print_r($query) ?></pre>
          -->

             <!-- PORTFOLIO GRID ITEMS -->
          <div id="masonry-grid-4" class="masonry-grid-4">
            <div class="isotope">


            <?php while($query->have_posts()): $query->the_post(); ?>

              <div class="grids-item item nopadding <?php echo implode(wp_get_post_categories(get_post_field( 'ID', get_post()))); ?> craft">
                   <?php the_post_thumbnail()?>
                       <!-- Portfolio Hover -->
                   <div class="portfolio-hover">
                       <div class="action-btn">
                           <div class="port-title"><?php echo get_post_field( 'post_title', get_post() ); ?></div>
                          <a class="port-subt" href="<?php echo get_post_field( 'guid', get_post() ); ?>"><?php echo get_post_field( 'post_title', get_post() ); ?></a>
                       </div>
                   </div>
                   <!-- End Portfolio Hover -->
              </div>

              <!--
              <div class="columnas1-3">
                <?php the_post_thumbnail()?>

                <div class="texto-especialidad">
                  <h4><?php the_title(); ?> </h4>
                  <?php the_content(); ?>
                </div>
              </div>
            -->
            <?php endwhile; wp_reset_postdata(); ?>
           
          </div> <!-- END PORTFOLIO GRID ITEMS -->

          </div>

          </div>

         </div>

          </div>
    </section>

<?php get_footer(); ?>
