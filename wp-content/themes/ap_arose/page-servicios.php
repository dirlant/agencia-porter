<?php get_header() ?>

<div class="container">
  <h1>servicios.php</h1>
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
  <?php endwhile; wp_reset_postdata(); ?>
  <section class="team">
    <div class="container">
      <?php $servicios = get_field('servicios') ?>
      <div class="row">
        <div class="col-md-9 col-sm-offset-2">
          <?php $aux = 2; ?>
          <?php for ($i=0; $i < count($servicios); $i++): ?>
          <div class="col-md-4" style="margin: 20px 0px;">
            <div class="ih-item circle effect5">
              <a href="#">
                <div class="img"><img src="<?php echo $servicios[$i]['servicios_imagen']['url']  ?>" alt="img"></div>
                <div class="info">
                  <div class="info-back">
                    <div class="img"><img src="<?php echo $servicios[$i]['servicios_hover']['url']  ?>" alt="img"></div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php if ($i == $aux ) : $aux = $aux + 3; ?>
            <div class="clearfix">  </div>
          <?php endif; ?>
        <?php endfor; ?>
        </div>
      </div>
    </div>
  </section>
</div>
<?php get_footer() ?>
