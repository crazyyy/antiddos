<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <div class="col-md-8 looper-container">
        <div class="row">

          <h1 class="col-md-12 cat-title inner-title"><?php the_category(', '); ?></h1>
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>

        </div><!-- /.row -->
      </div><!-- /.looper-container -->

      <?php get_sidebar(); ?>

    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
