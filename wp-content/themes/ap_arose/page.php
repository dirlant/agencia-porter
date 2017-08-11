<?php get_header(); ?>
  <div class="container">
    <?php while(have_posts()): the_post(); ?>
      <section id="about" class="banner">
        <div class="container">
          <div class="clearfix"> </div>

            <!-- <div class="cd-intro"> -->
            <div class="cd-headline clip">
              <span>I am</span>
              <span class="cd-words-wrapper">
                <b class="is-visible"><?php the_title() ?></b>
                <b>developer</b>
                <b>dreamer</b>
              </span>
            </div>
          <!-- </div> -->
        </div>
      </section>
      <p><?php the_content() ?></p>
    <?php endwhile; ?>
  </div>
<?php get_footer(); ?>
