<?php /* Template Name: Pay Page */ get_header(); ?>

  <div class="container">
    <div class="row">

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 col-sm-12'); ?>>

          <h1 class="small-title"><span><?php the_title(); ?></span></h1>
          <form action="" class="form-enter">
            <label for="email" class="form-enter--label"></label>
            <input type="text" name="email" class="form-enter--input" value="">
            <label for="email" class="form-enter--label"></label>
            <input type="text" name="email" class="form-enter--input" value="">
          </form><!-- /.form-enter -->

        </article>
      <?php endwhile; else: ?>
        <article class="col-md-12 col-sm-12">
          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        </article>
      <?php endif; ?>

    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>
