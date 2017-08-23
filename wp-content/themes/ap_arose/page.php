<?php get_header(); ?>
  <div class="container">
    <?php while(have_posts()): the_post(); ?>
      <?php
        global $post;
        $slug = $post->post_name;
      ?>

      <p><?php the_content() ?></p>

    <?php endwhile; ?>
  </div>
<?php get_footer(); ?>
