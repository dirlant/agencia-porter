<?php get_header() ?>
<h1>Reel.php</h1>
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

<?php while (have_posts()): the_post(); ?>
  <div class="container">
    <div class="hey">
      <div class="clearfix"> </div>
      <div class="hey-right">
        <div class="hey-right-t"><?php the_title() ?><span style="color: red">.</span></div>
        <p><?php the_content() ?>
      </div>
    </div>
  </div>
  <div class="clearfix"> </div>
  <div class="container">
    <div class="reel">
      <iframe class="embed-responsive-item" width="100%" height="100%" src="<?php echo str_replace('/watch?v=', '/embed/', get_field('enlace_reel')) ?>" allowfullscreen></iframe>
    </div>
  </div>




<?php endwhile; wp_reset_postdata(); ?>


<?php get_footer() ?>
