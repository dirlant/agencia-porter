<?php get_header(); ?>
<?php $category = get_queried_object(); ?>

  <section id="about" class="banner">
      <div class="container">
        <div class="clearfix"> </div>
        <!-- <div class="cd-intro"> -->
        <div class="cd-headline clip">
          <!--<h1><?php the_title() ?></h1>-->
          <span>Somos</span>
          <span class="cd-words-wrapper">
            <b class="is-visible">MKT</b>
            <b>BTL</b>
            <b>Digital</b>
          </span>
        </div>
        <!-- </div> -->
      </div>
  </section>
  <div id="about" class="banner-bottom">
    <div class="container">
        <div class="hey">

            <div class="hey-right">
                <div class="hey-right-t"><?php echo $category->cat_name ?><span style="color: red">.</span></div>
                <p><?php echo category_description($category->term_id) ?>

            </div>
        </div>
    </div>
  </div>


  <?php
    $args = array(
      'post_type' => 'portfolio',
      'posts_per_page' => -1,
      'order_by' => 'title',
      'order' => 'ASC',
      'cat' => $category->term_id
    );
    $query = new WP_Query($args);
  ?>
  <!--
  <pre><?php print_r($query) ?></pre>
  -->


  <div id="even-grid">
    <div class="isotope" style="position: relative; height: 876px;">
      <?php while($query->have_posts()): $query->the_post(); ?>
        <div class="grids-item item photo craft">
          <img class="grid-item-gut" src="<?php echo get_the_post_thumbnail_url() ?>" alt="portfolio" width="100%">
          <!-- Portfolio Hover -->
          <a class="port-subt" href="<?php echo get_post_field( 'guid', get_post() ); ?>">
            <div class="portfolio-hover">
                <div class="action-btn">
                  <div class="port-title"> &nbsp; </div>
                  <?php the_title() ?>
                </div>
            </div>
          </a>
          <!-- End Portfolio Hover -->
        </div>
      <?php endwhile; ?>
    </div>
    <!-- END PORTFOLIO ITEMS -->
  </div>
<?php get_footer(); ?>
