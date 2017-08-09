<?php get_header(); ?>

  <!-- banner-bottom -->
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


  <section class="xen-pad">
    <a href="<?php echo get_site_url() ?>"><img src="https://placeholdit.co//i/970x450?&bg=fff&fc=000%22" alt=""></a>

    <div class="container fluid nopadding">
      <?php
        $categorias = get_categories(array(
          'orderby' => 'name',
          'parent'  => 0
        ));

      ?>
      <!--
        <pre><?php print_r($categorias) ?></pre>
      -->
      <!-- PORTFOLIO ITEMS START -->
      <div class="col-md-12">

        <!-- START PORTFOLIO BUTTONS -->
        <ul class="pf-filter">
          <?php foreach ($categorias as $key): ?>
            <a href="<?php echo get_category_link($key->cat_ID) ?>"><li class="btn-lines"><?php echo $key->name ?> </li></a>
          <?php endforeach; ?>
        </ul>
        
      </div>
    </div>
  </section>

<?php get_footer(); ?>
