<?php get_header(); ?>

  <!-- /END HEADER -->
    <h1>index.php</h1>
    <?php while (have_posts()): the_post(); ?>
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

    <?php the_content() ?>

  <?php endwhile; ?>

<?php get_footer(); ?>
