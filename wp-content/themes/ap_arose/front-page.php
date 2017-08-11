
<?php get_header(); ?>

  <div id="fullpage">



    <div class="section">
      <h1>Logo</h1>
    </div>

    <div class="section">

      <section class="xen-pad">
        <div class="row">
          <a href="<?php echo get_site_url() ?>"><img src="https://placeholdit.co//i/970x400?&bg=fff&fc=000%22" class="col-xs-10 col-xs-offset-1"></a>
        </div>

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


    </div>
    <div class="section">
      <?php get_footer(); ?>
    </div>

  </div>
