<?php get_header(); ?>
  <div class="container">
    <div class="row">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 col-sm-12'); ?>>

          <h1 class="single-title inner-title"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
          <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>

        </article>

      <?php endwhile; else: ?>
        <article class="col-md-8 col-sm-12">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </article>
      <?php endif; ?>

      <?php get_sidebar(); ?>

    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
