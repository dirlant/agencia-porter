<?php get_header(); ?>
  <div class="container">
    <?php while(have_posts()): the_post(); ?>
      <p><?php the_content() ?></p>
    <?php endwhile; ?>
  </div>
<?php get_footer(); ?>
