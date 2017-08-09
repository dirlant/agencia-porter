<?php get_header(); ?>
    <h1>sigle-portfolio.php</h1>
    <?php while (have_posts()): the_post(); ?>
      <!-- banner-bottom -->
      <div id="about" class="banner-bottom">
            <div class="container">
                <div class="hey">

                    <div class="clearfix"> </div>
                    <div class="hey-right">
                        <div class="hey-right-t"><?php the_title() ?></div>
                        <p><?php the_content() ?>

                    </div>
                </div>
            </div>
        </div>



    <section id="portfolio-top" class="portfolio-project pad-top-60">

      <div class="container">
         <div class="row">



            <div class="col-md-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
              <div class="portfolio-project-media">

                <!-- Obteniendo los slider de lso trabajos -->
                <?php $sliders = get_field('sliders') ?>

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <?php for ($i=0; $i < count($sliders); $i++): ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>"></li>
                    <?php endfor; ?>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <?php for ($i=0; $i < count($sliders); $i++): ?>
                      <div class="item">
                        <img src="<?php echo $sliders[$i]['url']?>" alt="<?php echo $sliders[$i]['title']?>">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                    <?php endfor; ?>
                  </div>


                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


              </div>

              <div class="col-md-4 col-sm-12 col-xs-12">
                <ul class="portfolio-project-info">
                  <li> client Name : <span> <?php echo get_field('cliente') ?></span></li>
                </ul>
              </div>

               <div class="col-md-4 col-sm-12 col-xs-12">
                <ul class="portfolio-project-info">
                  <li>category : <span> <?php $arr = get_the_category();  echo $arr[0]->cat_name ?></span>
                </ul>
               </div>

              <div class="col-md-4 col-sm-12 col-xs-12">
                <ul class="portfolio-project-info">
                  <li>share: <a href="#"><i class="icon-facebook"></i></a> <a href="#"><i class=" icon-dribbble "></i></a> <a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-googleplus"></i></a> <a href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
              </div>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
               <!--/ End Portfolio details text -->
               <nav class="article-nav row">
                  <a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>" class="article-nav-link col-sm-6">
                     <i class="arrow_carrot-2left"></i>
                  </a>

                  <a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>" class="article-nav-link col-sm-6">
                     <i class=" arrow_carrot-2right"></i>
                  </a>
               </nav>

               <!-- End Comments -->
               <!-- Add Comment -->

               <div id="end-content"></div>
            </div>
            <!--/ End col -->

         </div>
         <!--/ End row -->
      </div>
      <!--/ End container -->

   </section>




  <?php endwhile; ?>

<?php get_footer(); ?>
