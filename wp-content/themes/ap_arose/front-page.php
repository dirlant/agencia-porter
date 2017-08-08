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
           <div class="grids-item item nopadding photo craft">
                <img class="m-grid-item-2 masonry-pad"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/10.jpg" alt="portfolio">
                    <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <div class="port-title">ceramic</div>
                       <a class="port-subt" href="portfolio-project.html">art</a>
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>

           <div class="grids-item item nopadding branding web-solution">
             <img class="m-grid-item-2 masonry-pad"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/2.jpg" alt="portfolio">
                <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <div class="port-title">cactus</div>
                       <a class="port-subt" href="portfolio-project.html">decoration</a>
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>

           <div class="grids-item item nopadding  branding photo">
             <img class="m-grid-item-2 masonry-pad"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/11.jpg" alt="portfolio">
             <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <div class="port-title">flower</div>
                       <a class="port-subt" href="portfolio-project.html">decor</a>
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>

            <div class="grids-item item height2 nopadding photo craft">
             <img class="m-grid-item-2 masonry-pad m-grid-item-2 masonry-pad--height2"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/4.jpg" alt="portfolio">
             <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <!-- LightBox Button -->
                       <div class="port-title">lamp shed</div><br>
                    <a class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/4.jpg"> <i class="icon-magnifying-glass"></i> </a>
                    <!-- End LightBox Button -->
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>

           <div class="grids-item item height2 nopadding photo craft">
             <img class="m-grid-item-2 masonry-pad m-grid-item-2 masonry-pad--height2"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/12.jpg" alt="portfolio">
             <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <!-- LightBox Button -->
                       <div class="port-title">pencil</div><br>
                    <a class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/12.jpg"> <i class="icon-magnifying-glass"></i> </a>
                    <!-- End LightBox Button -->
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>

            <div class="grids-item item nopadding branding web-solution">
             <img class="m-grid-item-2 masonry-pad"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/13.jpg" alt="portfolio">
                <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <div class="port-title">vase</div>
                       <a class="port-subt" href="portfolio-project.html">interior</a>
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>

           <div class="grids-item item height2 nopadding craft web-solution">
             <img class="m-grid-item-2 masonry-pad m-grid-item-2 masonry-pad--height2"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/5.jpg" alt="portfolio">
             <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                     <div class="port-title">flower</div>
                       <a class="port-subt" href="portfolio-project.html">illusion</a>
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>

           <div class="grids-item item nopadding craft web-solution">
             <img class="m-grid-item-2 masonry-pad"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/9.jpg" alt="portfolio">
             <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <!-- LightBox Button -->
                    <div class="port-title">cactus</div><br>
                    <a class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/9.jpg"> <i class="icon-magnifying-glass"></i> </a>
                    <!-- End LightBox Button -->
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>



             <div class="grids-item item nopadding branding web-solution">
             <img class="m-grid-item-2 masonry-pad"  src="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/8.jpg" alt="portfolio">
             <!-- Portfolio Hover -->
                <div class="portfolio-hover">
                    <div class="action-btn">
                        <!-- LightBox Button -->
                     <div class="port-title">brocolli</div><br>
                      <a class="lightbox" data-lightbox-gallery="gallery1" href="<?php echo get_template_directory_uri()?>/images/portfolio/masonry/8.jpg"> <i class="icon-magnifying-glass"></i> </a>
                    </div>
                </div>
                <!-- End Portfolio Hover -->
           </div>
          </div> <!-- END PORTFOLIO GRID ITEMS -->

          </div>

          </div>

         </div>

          </div>
    </section>

<?php get_footer(); ?>
