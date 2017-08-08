<?php

?>
<?php get_header(); ?>
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
    </header>


    <section id="portfolio-top" class="portfolio-project pad-top-60">

      <div class="container">
         <div class="row">

            <div class="col-md-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
               <div class="portfolio-project-media">
                 <?php the_post_thumbnail()?>
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
                  <a href="#ignore-click" class="article-nav-link col-sm-6">
                     <i class="arrow_carrot-2left"></i>
                     <p>previous
                        <br> project
                     </p>
                  </a>
                  <a href="#ignore-click" class="article-nav-link col-sm-6">
                     <p>next
                        <br> project
                     </p>
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
