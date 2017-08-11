
<?php get_header(); ?>

  <div id="fullpage">


    <?php while(have_posts()): the_post(); ?>
      <p><?php the_content() ?></p>
    <?php endwhile; ?>


    <div class="section">
      <?php get_footer(); ?>
    </div>

  </div>
